<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('view_productos');
		$this->load->view('footer');
	}
}
