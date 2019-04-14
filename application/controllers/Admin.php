<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')){
			if($this->session->userdata('ROL')=='Admin'){
				$this->load->view('header');
				$this->load->view('view_admin');
				$this->load->view('footer');
			}else {
				$this->load->view('error_page');
			}
		}else {
			redirect("login");
		}
	}

	public function error()
	{
		$this->load->view('error_page');
	}

}
