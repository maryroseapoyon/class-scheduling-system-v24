<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->model('Home_model');
	}
	
	public function index(){
		if($this->session->userdata("logged_in")){
			redirect(base_url('welcome_admin'));

		}else {
		    $data = array('alert' => false);  
            $this->load->view('home',$data);	
  	 }
	}

	public function login(){
		$user = ($_POST['username']);
		$pass = ($_POST['password']);
		$userdata = $this->Home_model->login_check($user, $pass);
		if(isset($userdata)){
			$_SESSION = array( 
				'id' => $userdata[0]->user_id, 
				'user' => $userdata[0]->username,
				'pass' => $userdata[0]->password,
				'utype' => $userdata[0]->usertype,
				'logged_in' => TRUE,
			);
			$this->session->set_userdata($_SESSION);
            
			switch ($userdata[0]->usertype) {
				case 'admin':
					redirect('welcome_admin');
					break;
			}
		}
		else{
			$this->session->set_flashdata('error_msg','Invalid Username or Password, Try again!'); 
			redirect();
		}
	}
	public function logout(){
		session_destroy();
		redirect();
	}
}
