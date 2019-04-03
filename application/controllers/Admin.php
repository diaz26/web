<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
    if($this->session->userdata('logged_in')){
      $this->load->view('header');
  		$this->load->view('view_admin');
  		$this->load->view('footer');
    }else {
      redirect("login");
    }
	}

}
