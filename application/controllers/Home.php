<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
    parent::__construct();
		$this->load->model('model_nav');
		$this->load->model('Model_productos');
  }

	public function index()
	{
		$nav['nav']=$this->model_nav->consultNav(1);
		$nav['productos']=$this->Model_productos->consultaproductos();
		$this->load->view('header',$nav);
		$this->load->view('view_home');
		$this->load->view('footer');
	}
}
