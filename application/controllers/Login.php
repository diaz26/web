	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('model_login');
  }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('view_login');
		$this->load->view('footer');
	}

	public function valida()
	{
		$user=$this->input->post('user');
		$pass=$this->input->post('pass');
		$security=$this->input->post('security');

		$result=$this->model_login->validar($user,$pass,$security);

		if ($result->cuenta==1) {

			$date=$this->model_login->consulta_user($user,$pass,$security);
			$session=array(
				'ID'=>$date->id,
				'USER'=>$date->user,
				'PASS'=>$date->pass,
				'ROL'=>$date->rol,
				'SECURITY'=>$date->security,
				'logged_in'=> true
			);

			$this->session->set_userdata($session);
			redirect("".base_url()."index.php/admin");
		}else {
			$this->session->set_flashdata('msg', '<div> User/Password or Security Invalid</div>');
			redirect("".base_url()."index.php/login");
		}

	}

	public function session_dest(){
		$session = array(
			'logged_in' => FALSE
		);
		$this->session->set_userdata($session);
		$this->session->sess_destroy();
		redirect("".base_url()."index.php/login");
	}
}
