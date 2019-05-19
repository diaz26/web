<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_service extends CI_Model {

  function __construct(){
    parent::__construct();

  }

  public function consultService($id){
    $sql="SELECT * FROM baseo_service WHERE id='$id'";
    $query=$this->db->query($sql);
    return $query->row();
  }


}
