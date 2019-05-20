	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('model_login');
		$this->load->model('model_nav');
		$this->load->model('model_banner');
  }

	public function index()
	{
		$nav['nav']=$this->model_nav->consultNav(1);
		$this->load->view('header',$nav);
		$this->load->view('view_login');
		$this->load->view('footer');
	}

	public function valida()
	{
		if (isset($_POST['user'])) {
			$users=$this->input->post('user');
			$pass=$this->input->post('pass');
			//$security=$this->input->post('security');
			$result=$this->model_login->comprobar($users,$pass);

			if ($result->comprobando==1) {

				$date=$this->model_login->traer($users,$pass);
				$session=array(
					'ID'=>$date->id,
					'USER'=>$date->user,
					'PASS'=>$date->pass,
					'ROL'=>$date->rol,
					'SECURITY'=>$date->security,
					'logged_in'=> true
				);

				$this->session->set_userdata($session);

					redirect("".base_url()."index.php/Admin");

			}
			else {
						$this->session->set_flashdata('msg', '<div> User/Password Invalid</div>');
						redirect("".base_url()."index.php/login");
					}
		}else {
				  $this->load->view('error_page');
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
