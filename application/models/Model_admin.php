<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

  function __construct(){
    parent::__construct();

  }

  public function actNav($datos,$id){
    $this->db->where('id',$id);
    $this->db->update('baseo_oficial',$datos);
  }

  public function actSer($datos,$id){
    $this->db->where('id',$id);
    $this->db->update('baseo_service',$datos);
  }

}
