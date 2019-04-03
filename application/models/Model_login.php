<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function validar($user,$pass,$secu){
    $sql="SELECT count(*) cuenta from part_usuarios where user='$user' and pass='$pass' and security='$secu'";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function consulta_user($user,$pass,$secu){
    $sql="SELECT * from part_usuarios where user='$user' and pass='$pass' and security='$secu'";
    $query=$this->db->query($sql);
    return $query->row();
  }
  /*
  public function actualiza_pass($user,$pass){
    $this->db->where('user',$user);
    $this->db->update('usuarios',array('pass'=>$pass));
  }*/

}
