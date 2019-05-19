<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

  function __construct(){
    parent::__construct();

  }
  public function comprobar($users,$pass){
    $sql="SELECT COUNT(*) comprobando FROM web_users WHERE user='$users' AND pass='$pass'";
    $query=$this->db->query($sql);
    return $query->row();
  }
  public function actualizar_clave($user,$newpass){
    $this->db->where('user',$user);
    $this->db->update('baseo_usuarios',array('pass'=>$newpass));
  }

  public function traer($users,$pass){
    $sql="SELECT * FROM web_users WHERE user='$users' AND pass='$pass'";
    $query=$this->db->query($sql);
    //cuando es un solo registro
    return $query->row();
    // cuando son varios registros
    //  return $query->result();
  }


}
