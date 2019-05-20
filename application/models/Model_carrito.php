<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_carrito extends CI_Model {

  function __construct(){
    parent::__construct();

  }
  function con_carrito_pro($id= NULL){
    $sql = "SELECT id as id, referencia AS codigo, precio AS precio, nombre AS nombre, img AS foto
    from web_productos WHERE referencia='$id'";
    $query = $this->db->query($sql);
    return $query->row();
  }
  function buscaPedido($pedido){
    $sql = "SELECT * from web_pedidos WHERE cod_pedido='$pedido'";
    $query = $this->db->query($sql);
    return $query->row();
  }

  public function insertaPedido($new_pedido){
    $this->db->insert('web_pedidos',$new_pedido);
    return $this->db->insert_id();
  }

  public function insertItem($new_pedido){
    $this->db->insert('productos_pedidos',$new_pedido);
    return $this->db->insert_id();
  }

  public function insertPago($new_pago){
    $this->db->insert('web_pagos',$new_pago);
    return $this->db->insert_id();
  }

}
