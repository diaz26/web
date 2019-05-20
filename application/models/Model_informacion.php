<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_informacion extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function consultInfo(){
    $id=$this->session->userdata('ID');
    $sql= "SELECT * FROM baseo_usuarios WHERE id=$id";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function consultPage(){
    $id=$this->session->userdata('ID');
    $sql= "SELECT be.* FROM baseo_ecommerce be WHERE be.id_usuario=$id";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function consultPageX($id){
    $sql= "SELECT be.nombre FROM baseo_ecommerce be WHERE be.id_usuario=$id";
    $query=$this->db->query($sql);
    return $query->row()->nombre;
  }

  public function consultPageO($flag){
    $sql= "SELECT be.*, bu.celular, bu.email FROM baseo_ecommerce be, baseo_usuarios bu WHERE be.nombre='$flag' and be.id_usuario=bu.id";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function consultConsec($aa){
    $sql= "SELECT bo.pr900 FROM baseo_oficial bo WHERE bo.id=$aa";
    $query=$this->db->query($sql);
    return $query->row()->pr900;
  }

  public function consultPagee($id){
    $sql= "SELECT be.*, bu.celular, bu.email FROM baseo_ecommerce be, baseo_usuarios bu WHERE be.id=$id and be.id_usuario=bu.id";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function consul_cuenta_paypal($id){
    $sql= "SELECT bu.paypal FROM baseo_ecommerce be, baseo_usuarios bu WHERE be.id=$id and be.id_usuario=bu.id";
    $query=$this->db->query($sql);
    return $query->row()->paypal;
  }

  public function idUser($id){
    $sql= "SELECT bu.id FROM baseo_ecommerce be, baseo_usuarios bu WHERE be.id=$id and be.id_usuario=bu.id";
    $query=$this->db->query($sql);
    return $query->row();
  }


  public function actInf($datos,$id){
    $this->db->where('id',$id);
    $this->db->update('baseo_usuarios',$datos);
  }

  public function alteraConsec($datos){
    $this->db->where('id',1);
    $this->db->update('baseo_oficial',$datos);
  }

  public function actPage($datos,$id){
    $idd=$this->session->userdata('ID');
    $this->db->where('id',$id);
    $this->db->where('id_usuario',$idd);
    $this->db->update('baseo_ecommerce',$datos);
  }
}
