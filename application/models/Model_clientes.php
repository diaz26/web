<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_clientes extends CI_Model {

  function __construct(){
    parent::__construct();

  }
  public function agarra($id){

    $sql= "SELECT * FROM baseo_productos WHERE id = '$id'";
    $query=$this->db->query($sql);
    return $query->result();

  }
}
