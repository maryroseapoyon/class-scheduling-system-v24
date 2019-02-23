<?php
class Admin_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	}

// VIEW MODEL


	public function view_faculty(){
		$query = $this->db->query("
			SELECT f.ProfID, f.Firstname, f.Middlename, f.Lastname, p.PositionName, f.Contact, d.DepartmentName, f.Status fs,
			d.Status ds, f.DepartmentCode as dc
			FROM faculty as f
			LEFT JOIN department as d ON f.DepartmentCode = d.DepartmentCode
			LEFT JOIN position as p ON f.PositionCode = p.PositionCode
		");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty_name($id){
		$query = $this->db->query("
			SELECT f.ProfID, f.Firstname, f.Middlename, f.Lastname, f.Contact
			FROM faculty as f
			WHERE f.ProfID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}


	public function view_faculty_info($id){
		$query = $this->db->query("
			SELECT f.ProfID, p.PositionName, f.Contact, d.DepartmentName, d.DepartmentCode, p.PositionCode
			FROM faculty as f
			INNER JOIN department as d ON f.DepartmentCode = d.DepartmentCode
			INNER JOIN position as p ON f.PositionCode = p.PositionCode
			WHERE f.ProfID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty_info2($id){
		$query = $this->db->query("
			SELECT DISTINCT s.SubjectName, s.Status as ss, sl.SubjectLID, s.SubjectDeptCode as sdept
			FROM faculty as f
			LEFT JOIN subject_list as sl ON f.ProfID = sl.ProfID
			LEFT JOIN subject as s ON sl.SubjectCode = s.SubjectCode
			WHERE f.ProfID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty_info3($id){
		$query = $this->db->query("
			SELECT DISTINCT tl.TimeLID, t.Time, f.Status, tl.Days
			FROM faculty as f
		 	LEFT JOIN time_list as tl ON f.ProfID = tl.ProfID
		 	LEFT JOIN timee as t ON tl.Time = t.Time
			WHERE f.ProfID = '$id'
		 	ORDER BY tl.Days

			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}


	public function view_department(){
		$query = $this->db->query("
			SELECT *
			FROM department
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_department_name($id){
		$query = $this->db->query("
			SELECT *
			FROM department as d
			WHERE DepartmentID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_subjects(){
		$query = $this->db->query("
			SELECT *, s.Status as ss
			FROM subject as s
			LEFT JOIN department as d ON s.SubjectDeptCode = d.DepartmentCode
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty_subjects($id){
		$query = $this->db->query("
			SELECT DISTINCT *
			FROM subject as s
			LEFT JOIN department as d ON s.SubjectDeptCode = d.DepartmentCode
			WHERE NOT EXISTS(
				SELECT * FROM subject_list AS sl 
				LEFT JOIN faculty as f ON sl.ProfID = f.ProfID
    			WHERE sl.SubjectCode = s.SubjectCode AND sl.ProfID = '$id'
			)
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty_time($id){
		$query = $this->db->query("
			SELECT DISTINCT t.Time
			FROM timee as t
			WHERE NOT EXISTS(
				SELECT * FROM time_list AS tl 
				LEFT JOIN faculty as f ON tl.ProfID = f.ProfID
    			WHERE tl.time = t.time AND tl.ProfID = '$id'
			)
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}
	
	public function view_faculty_time2($shift){
		// $query = $this->db->get_where('timee', array('Shift' => $shift));
		$query = $this->db->query("
			SELECT DISTINCT t.Time
			FROM timee as t
			WHERE NOT EXISTS(
				SELECT * FROM time_list AS tl 
				INNER JOIN faculty as f ON tl.ProfID = f.ProfID
			WHERE tl.Time = T.time AND tl.ProfID <> f.ProfID OR t.Shift <> '$shift'
			GROUP BY tl.Days
			)
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}


	public function view_faculty_day(){
		$query = $this->db->query("
			SELECT DISTINCT t.Day
			FROM timee as t
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty_shift($day){
		$query = $this->db->query("
			SELECT DISTINCT t.Shift
			FROM timee as t
			WHERE t.Day = '$day'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_subjects_name($id){
		$query = $this->db->query("
			SELECT *
			FROM subject as s
			-- LEFT JOIN department as d ON s.SubjectDeptCode = d.DepartmentCode
			WHERE SubjectID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}


	public function view_section(){
		$query = $this->db->query("
			SELECT *
			FROM section as s
			LEFT JOIN department as d ON s.DepartmentCode = d.DepartmentCode 
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_courses(){
		$query = $this->db->query("
			SELECT c.CourseCode, c.CourseName, c.CourseType, d.DepartmentName
			FROM course as c
			LEFT JOIN department as d ON c.DepartmentCode = d.DepartmentCode 
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_position(){
		$query = $this->db->query("
			SELECT *
			FROM position
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_policy(){
		$query = $this->db->query("
			SELECT *
			FROM policy
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}


// -- VIEW MODEL END

// ADD MODEL

	public function add_faculty(){
		$data = array(
			'Firstname'=>strtoupper($this->input->post('fname')),
			'Middlename'=>strtoupper($this->input->post('mname')),
			'Lastname'=>strtoupper($this->input->post('lname')),
			'Contact'=>$this->input->post('contact'),
			'PositionCode'=>$this->input->post('position'),
			'DepartmentCode'=>$this->input->post('depCode'),
			'Status' => "A"
		
		);
		$this->db->insert('faculty', $data);
	}

	public function add_department(){
		$data = array(
			'DepartmentName'=>strtoupper($this->input->post('depname')),
			'DepartmentCode'=>strtoupper($this->input->post('depcode')),
			'Status' => "A"

		);
		$this->db->insert('department', $data);
	}

	public function add_subject(){
		if($this->input->post('type') == "Lecture"){
			$data = array(
			'SubjectCode'=>$this->input->post('subj_code'),
			'SubjectName'=>$this->input->post('subj_name'),
			'LecUnits'=>$this->input->post('units'),
			'LecHours'=>$this->input->post('hrs'),
			'SubjectType'=>$this->input->post('type'),
			'SubjectDeptCode'=>$this->input->post('dept'),
			'Status' => "A"
			);
		}
		else{
			$data = array(
			'SubjectCode'=>$this->input->post('subj_code'),
			'SubjectName'=>$this->input->post('subj_name'),
			'LabUnits'=>$this->input->post('units'),
			'LabHours'=>$this->input->post('hrs'),
			'SubjectType'=>$this->input->post('type'),
			'SubjectDeptCode'=>$this->input->post('dept'),
			'Status' => "A"
			);
		}
		$this->db->insert('subject', $data);
	}
	
	public function facsub($sub){
		$faculty_id = $this->input->post('fid');
		$this->db->set('ProfID', $faculty_id);
		$this->db->set('SubjectCode', $sub);
		$this->db->insert('subject_list');
	}

	public function factime($time){
		$faculty_id = $this->input->post('fid');
		$day = $this->input->post('day');
		$shift = $this->input->post('shift');
		$this->db->set('ProfID', $faculty_id);
		$this->db->set('Days', $day);
		$this->db->set('Shift', $shift);
		$this->db->set('Time', $time);
		$this->db->insert('time_list');
	}
//-- ADD MODEL END


// EDIT MODEL

	public function edit_faculty(){
		$first_name = $this->input->post('fname');
		$middle_name = $this->input->post('mname');
		$last_name = $this->input->post('lname');
		$contact = $this->input->post('contact');
		$position_code = $this->input->post('position');
		$department_code = $this->input->post('depCode');
		$prof_id = $this->input->post('fid');

		$this->db->set('Firstname', $first_name);
		$this->db->set('Middlename', $middle_name);
		$this->db->set('Lastname', $last_name);
		$this->db->set('Contact', $contact);
		$this->db->set('PositionCode', $position_code);
		$this->db->set('DepartmentCode', $department_code);
		$this->db->where('ProfID', $prof_id);

		$result = $this->db->update('faculty');
		return $result;
	}

	public function edit_department(){
		$department_name = $this->input->post('depname');
		$department_code = $this->input->post('depcode');
		$department_id = $this->input->post('depID');

		$this->db->set('DepartmentName', $department_name);
		$this->db->set('DepartmentCode', $department_code);
		$this->db->where('DepartmentID', $department_id);

		$result = $this->db->update('department');
		return $result;
	}


	public function edit_subject(){
		$code = $this->input->post('subj_code');
		$name = $this->input->post('subj_name');
		$units = $this->input->post('units');
		$hours = $this->input->post('hrs');
		$type = $this->input->post('type');
		$dep = $this->input->post('dept');
		$sub_id = $this->input->post('sid');

		if($this->input->post('type') == "Lecture"){
			$this->db->set('SubjectCode', $code);
			$this->db->set('SubjectName', $name);
			$this->db->set('SubjectType', $type);	
			$this->db->set('LecUnits', $units);
			$this->db->set('LecHours', $hours);
			$this->db->set('SubjectDeptCode', $dep);
			$this->db->where('SubjectID',$sub_id);
		}
		else{
			$this->db->set('SubjectCode', $code);
			$this->db->set('SubjectName', $name);
			$this->db->set('SubjectType', $type);	
			$this->db->set('LabUnits', $units);
			$this->db->set('LabHours', $hours);
			$this->db->set('SubjectDeptCode', $dep);
			$this->db->where('SubjectID',$sub_id);	
		}
		
        $result = $this->db->update('subject');
        return $result;
	}

	public function get_subjects($id){
		$query = $this->db->query("
			SELECT *
			FROM subject as s
			WHERE SubjectID = $id 
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}
// -- EDIT MODEL END

// ACTIVATE DEACTIVATE MODEL 

	public function act_faculty($id){
		$data = array('Status' => 'A');
		$this->db->where('ProfID',$id);
        return $this->db->update('faculty',$data);
	}

	public function del_faculty($id){
		$data = array('status' => 'D');
		$this->db->where('ProfID',$id);
        return $this->db->update('faculty',$data);
	}

	public function act_department($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('Status' => 'A');
		$this->db->where('DepartmentID',$id);
        return $this->db->update('department',$data);
	}

	public function del_department($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('Status' => 'D');
		$this->db->where('DepartmentID',$id);
        return $this->db->update('department',$data);
	}

	public function act_subject($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('Status' => 'A');
		$this->db->where('SubjectID',$id);
        return $this->db->update('subject',$data);
	}

	public function del_subject($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('Status' => 'D');
		$this->db->where('SubjectID',$id);
        return $this->db->update('subject',$data);
	}
// -- ACTIVATE DEACTIVATE MODEL END

// ID COUNT MODEL
	public function faculty_count(){
		$query = $this->db->query("
			SELECT COUNT(ProfID) AS prof_id
			FROM faculty
			");
		return $query->result();
	}

	public function faculty_count2(){
		$query = $this->db->query("
			SELECT COUNT(ProfID) AS prof_id
			FROM faculty
			WHERE status = 'A'
			");
		return $query->result();
	}

	public function faculty_count3(){
		$query = $this->db->query("
			SELECT COUNT(ProfID) AS prof_id
			FROM faculty
			WHERE status = 'D'
			");
		return $query->result();
	}

	public function department_count(){
		$query = $this->db->query("
			SELECT COUNT(DepartmentID) AS dep_id
			FROM department
			");
		return $query->result();
	}

	public function department_count2(){
		$query = $this->db->query("
			SELECT COUNT(DepartmentID) AS dep_id
			FROM department
			WHERE status = 'A'
			");
		return $query->result();
	}

	public function department_count3(){
		$query = $this->db->query("
			SELECT COUNT(DepartmentID) AS dep_id
			FROM department
			WHERE status = 'D'
			");
		return $query->result();
	}	

	public function subjects_count(){
		$query = $this->db->query("
			SELECT COUNT(SubjectID) AS sub_id
			FROM subject
			");
		return $query->result();
	}

	public function subjects_count2(){
		$query = $this->db->query("
			SELECT COUNT(SubjectID) AS sub_id
			FROM subject
			WHERE status = 'A'
			");
		return $query->result();
	}

	public function subjects_count3(){
		$query = $this->db->query("
			SELECT COUNT(SubjectID) AS sub_id
			FROM subject
			WHERE status = 'D'
			");
		return $query->result();
	}

	public function rooms_count(){
		$query = $this->db->query("
			SELECT COUNT(RoomID) AS room_id
			FROM room
			");
		return $query->result();
	}

	public function section_count(){
		$query = $this->db->query("
			SELECT COUNT(SectionID) AS section_id
			FROM section
			");
		return $query->result();
	}

	public function course_count(){
		$query = $this->db->query("
			SELECT COUNT(CourseID) AS course_id
			FROM course
			");
		return $query->result();
	}

// -- ID COUNT MODEL END

// OTHERS

	

// MARY ROSE APOYON MODEL

	public function view_room_name(){

		$query = $this->db->query("
			SELECT * FROM room AS r
			LEFT JOIN department as d ON r.DepartmentCode = d.DepartmentCode		
		");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_room_all(){
		$query = $this->db->query("
			SELECT s.SchedName, s.SchedDays, f.Firstname, f.Middlename, f.Lastname, subj.SubjectName, r.RoomNo
			FROM schedule as s
			LEFT JOIN faculty as f
			ON s.SchedProf = f.ProfID
			LEFT JOIN subject as subj
			ON s.SubjectCode = subj.SubjectCode
			LEFT JOIN room as r
			ON s.SchedRoom = r.RoomID
			

			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function add_room(){
		$data = array(
			'RoomNo'=>$this->input->post('room_no'),
			'RoomType'=>$this->input->post('room_type'),
			'DepartmentCode'=>$this->input->post('dep')
		
		);
		$result = $this->db->insert('room', $data);
		return $result;


	}

	public function list_room(){
		$query = $this->db->query("
				SELECT r.RoomID, r.RoomNo,  r.RoomType, r.DepartmentCode, d.DepartmentCode, d.DepartmentName, r.RoomStatus
 				FROM room as r
				LEFT JOIN department as d
				ON r.DepartmentCode = d.DepartmentCode
 			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_room_schedule($id){
		$query = $this->db->query("
			SELECT s.SchedID, s.SchedName, s.SchedTime, s.SchedDays, f.Firstname, f.Middlename, f.Lastname, subj.SubjectName, r.RoomNo, r.RoomID, s.SubjectHours, s.SchedEnd
 			FROM schedule as s
			LEFT JOIN faculty as f
			ON s.SchedProf = f.ProfID
			LEFT JOIN subject as subj
			ON s.SubjectCode = subj.SubjectCode
			LEFT JOIN room as r
			ON s.SchedRoom = r.RoomNo
			WHERE s.SchedRoom = '$id'

			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function room_name($id){

		$query = $this->db->query("
				SELECT * FROM room
				WHERE RoomID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function departments(){
			$query = $this->db->query("
				SELECT * 
				FROM department 
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}


// -- MARY ROSE APOYON MODEL END

	/////////////////////NEW MODE FUNCTIONS TO DISPLAY SCHEDULE////////////////////////////////////////////

		public function faculty_name()
	{
		$query = $this->db->query("
				SELECT *
				FROM faculty
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function math()
	{
		$query = $this->db->query("
				SELECT f.Lastname, f.Firstname, f.Lastname, f.ProfID, p.PositionName
   				FROM faculty as f
   				LEFT JOIN position as p
   				ON f.PositionCode = p.PositionCode
   				LEFT JOIN department as d
   				ON f.DepartmentCode = d.DepartmentCode
				WHERE f.DepartmentCode = 'MATH' AND f.Status = 'A'
				ORDER BY p.PositionCode, f.Lastname, f.Firstname ASC
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function physics()
	{
		$query = $this->db->query("
				SELECT f.Lastname, f.Firstname, f.Lastname, f.ProfID, p.PositionName
   				FROM faculty as f
   				LEFT JOIN position as p
   				ON f.PositionCode = p.PositionCode
   				LEFT JOIN department as d
   				ON f.DepartmentCode = d.DepartmentCode
				WHERE f.DepartmentCode = 'PHYS' AND f.Status = 'A'
				ORDER BY p.PositionCode, f.Lastname, f.Firstname ASC
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function chemistry()
	{
		$query = $this->db->query("
				SELECT f.Lastname, f.Firstname, f.Lastname, f.ProfID, p.PositionName
   				FROM faculty as f
   				LEFT JOIN position as p
   				ON f.PositionCode = p.PositionCode
   				LEFT JOIN department as d
   				ON f.DepartmentCode = d.DepartmentCode
				WHERE f.DepartmentCode = 'CHEM' AND f.Status = 'A'
				ORDER BY p.PositionCode, f.Lastname, f.Firstname ASC
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function faculty_name_2($id)
	{
		$query = $this->db->query("
				SELECT *
				FROM faculty as f
				WHERE f.ProfID = '$id'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function faculty_name_default()
	{
		$query = $this->db->query("
				SELECT *
				FROM faculty as f
				WHERE f.ProfID = '1'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function view_sched_default(){
			$query = $this->db->query("
				SELECT s.SchedID, s.SchedName, s.SchedTime, s.SchedDays, f.Firstname, f.Middlename, f.Lastname, subj.SubjectName, r.RoomNo, r.RoomID, s.SubjectHours, s.SchedEnd
	 			FROM schedule as s
				LEFT JOIN faculty as f
				ON s.SchedProf = f.ProfID
				LEFT JOIN subject as subj
				ON s.SubjectCode = subj.SubjectCode
				LEFT JOIN room as r
				ON s.SchedRoom = r.RoomNo
				WHERE s.SchedProf = '1'

			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}


	public function view_prof_sched($id){
			$query = $this->db->query("
				SELECT s.SchedID, s.SchedName, s.SchedTime, s.SchedDays, f.Firstname, f.Middlename, f.Lastname, subj.SubjectName, r.RoomNo, r.RoomID, s.SubjectHours, s.SchedEnd
	 			FROM schedule as s
				LEFT JOIN faculty as f
				ON s.SchedProf = f.ProfID
				LEFT JOIN subject as subj
				ON s.SubjectCode = subj.SubjectCode
				LEFT JOIN room as r
				ON s.SchedRoom = r.RoomNo
				WHERE s.SchedProf = '$id'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}

		public function department(){
			$query = $this->db->query("
				SELECT * 
				FROM department 
				WHERE status = 'A'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
}
