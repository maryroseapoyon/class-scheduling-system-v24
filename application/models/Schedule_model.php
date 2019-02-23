<?php 
class Schedule_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	}
	//GET RANDOM ROOM
	public function getRoom(){
		$query = $this->db->query(" SELECT RoomNo,RoomType,DepartmentCode FROM room ORDER BY RAND() LIMIT 1 ");
		return $query->result_array();
		
	}

	public function position(){
		$query = $this->db->query("SELECT  f.PositionCode, f.Lastname, p.PositionName
			FROM faculty as f
			INNER JOIN position as p
			ON f.PositionCode = p.PositionCode
			");
		return $query->result_array();
	}

	public function policyFacPure(){
		$query = $this->db->query("SELECT policyName,policyValue,policyTitle,policyDefaultValue FROM policy WHERE policyName = 'pootPure'");
		return $query->result_array();
	}

	public function policyFacMixed(){
		$query = $this->db->query("SELECT policyName,policyValue,policyTitle,policyDefaultValue FROM policy WHERE policyName = 'pootMixed'");
		return $query->result_array();
	}

	public function policyFacHead(){
		$query = $this->db->query("SELECT policyName,policyValue,policyTitle,policyDefaultValue FROM policy WHERE policyName = 'rtlHead'");
		return $query->result_array();
	}

	public function policySem(){
		$query = $this->db->query("SELECT * FROM policy WHERE policyName = 'semester'");
		return $query->result_array();
	}
	//GET SUBJECT
	public function curriculum(){
		$data = $this->policySem();
		if($data[0]['policyValue'] == NULL){
			$data = array_map(function($i){ return $i['policyDefaultValue']; }, $data);
		}else{
			$data = array_map(function($i){ return $i['policyValue']; }, $data);
		}
		$datarr = implode(',',$data);
		$query = $this->db->query("
			SELECT c.SubjectCode,sub.SubjectName,sub.SubjectType,sub.LecHours,sub.LecUnits,sub.LabHours,sub.LabUnits,c.CourseCode,sub.SubjectDeptCode,c.Year,s.SectionCode,c.Semester,sub.Status
			FROM curriculum as c
			INNER JOIN section as s
			on c.CourseCode = s.CourseCode
			INNER JOIN subject as sub
			on sub.SubjectCode = c.SubjectCode
			WHERE c.Semester = '$datarr'AND s.SectionSemester = '$datarr' AND c.Year = s.SectionYearLvl 
			");

		return $query->result_array();
	}

	public function sub_list(){
		$query = $this->db->query("SELECT * FROM subject_list");
		return $query->result();	
	}

	public function time(){
		$query = $this->db->query("SELECT DISTINCT Time,Shift FROM timee ORDER BY RAND() LIMIT 1");
		return $query->result_array();

	}

	public function timeList(){
		$query = $this->db->query("SELECT * FROM time_list");
		return $query->result();
	}

	public function day(){
		$query = $this->db->query("SELECT DISTINCT Day FROM timee ORDER BY RAND() LIMIT 1");
		return $query->result_array();
	}

	public function facultypos(){
		$query = $this->db->query("SELECT *
			FROM faculty as f
			INNER JOIN position as p
			on f.PositionCode = p.PositionCode
			");
		return $query->result_array();
	}

	public function faculty(){
		$query = $this->db->query("SELECT f.ProfID,f.Firstname,f.MiddleName,f.Lastname,f.PositionCode,f.DepartmentCode,f.Status,tl.Days,p.PositionCode,p.PositionName
			FROM faculty as f 
			LEFT JOIN time_list as tl 
			on f.ProfID = tl.ProfID
			INNER JOIN position as p
			on f.PositionCode = p.PositionCode
			WHERE f.Status = 'A'
			ORDER BY RAND() LIMIT 1");
		return $query->result_array();

	}

	public function facultysub(){
		$query = $this->db->query("SELECT * FROM subject_list");
		return $query->result_array();
	}

	public function getSched(){
		$query = $this->db->query("SELECT * FROM schedule");
		return $query->result_array();
	}

	public function insert($Schedule){
		if($Schedule[7]['LecHours'] == "0"){
			$Hours = $Schedule[7]['LabHours'];
		}else{
			$Hours = $Schedule[7]['LecHours'];
		}
		$data = array(
	 		'SchedName'=>$Schedule[0],
	 		'SchedTime'=>$Schedule[1]['Time'],
	 		'SchedEnd'=>$Schedule[2]['EndTime'],
	 		'SchedDays'=>$Schedule[3]['Day'],
	 		'SchedRoom'=>$Schedule[4]['RoomNo'],
	 		'SchedProf'=>$Schedule[5]['ProfID'],
	 		'SubjectCode'=>$Schedule[7]['SubjectCode'],
	 		'SubjectName'=>$Schedule[7]['SubjectName'],
	 		'SubjectType'=>$Schedule[7]['SubjectType'],
	 		'SubjectHours'=>$Hours,
	 		'DepartmentCode'=>$Schedule[7]['SubjectDeptCode']
		);

		$this->db->insert('schedule',$data);
	}
}