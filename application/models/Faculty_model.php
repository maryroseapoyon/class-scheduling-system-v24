<?php
class Faculty_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	}

	public function yourSubjects($id){
		$query = $this->db->query("
			SELECT sl.subjectlist_id,f.first_name,s.subject_name
			FROM subject_list AS sl
			LEFT JOIN faculty AS f
			ON sl.faculty_id = f.prof_id
			LEFT JOIN SUBJECT AS s
			ON sl.subject_code = s.subject_id
			WHERE f.prof_id = '$id'
		");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}	
	}

	public function view_subjects(){
		$query = $this->db->query("
			SELECT s.subject_id, s.subject_code, s.subject_name, s.subject_unit, s.subject_hrs, s.subject_type, s.department_code, s.status
			FROM subject as s
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty(){
		$query = $this->db->query("
			SELECT f.prof_id, f.first_name, f.middle_name, f.last_name, p.position_name, f.contact, d.department_name, f.status fs,
			d.status ds
			FROM faculty as f
			LEFT JOIN department as d ON f.department_code = d.department_code
			LEFT JOIN position as p ON f.position_code = p.position_code
		");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function facsub($sub, $id){
		$faculty_id = $this->input->post('fid');
		$this->db->set('faculty_id', $id);
		$this->db->set('subject_code', $sub);
		$this->db->insert('subject_list');
	}


}