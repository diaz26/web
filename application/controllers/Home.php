<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('model_nav');
		$this->load->model('model_banner');
  }

	public function index()
	{
		$nav['nav']=$this->model_nav->consultNav(1);
		$body['banner']=$this->model_banner->consultBanner(1);
		$this->load->view('header',$nav);
		$this->load->view('view_home',$body);
		$this->load->view('footer');
	}
}
