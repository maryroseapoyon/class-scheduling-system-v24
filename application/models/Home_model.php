<?php
class Home_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	}

    public function login_check($user, $pass){
    	$this->db->select('*');
    	$this->db->where('username', $user);
    	$this->db->where('password', $pass);
    	$this->db->from('user');
    	$query=$this->db->get();
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
    }
}