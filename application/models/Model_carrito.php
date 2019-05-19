<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_carrito extends CI_Model {

  function __construct(){
    parent::__construct();

  }
  function con_carrito_pro($id= NULL){
    $sql = "SELECT bp.cod_producto AS codigo, bp.Precio AS precio, bp.Nombre AS nombre, bp.Imagen AS foto
    from baseo_productos bp WHERE bp.cod_producto='$id'";
    $query = $this->db->query($sql);
    return $query->row();
  }
}
