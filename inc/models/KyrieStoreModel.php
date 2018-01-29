<?php
final class KyrieStoreModel extends Model {
  public $producto_id;
  public $nombre;
  public $categoria;
  public $paquete;
  public $ocasion;
  public $tipo;
  public $tamano;
  public $precio;
  public $product_img;
  public $product_descrip;
  public $product_disp;
 
  public function create ( $data = array() ) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    $this->sql = "INSERT INTO productos SET producto_id = '$producto_id', nombre = '$nombre', categoria = '$categoria', paquete = '$paquete', ocasion = '$ocasion', tipo = '$tipo', tamano = '$tamano', precio = $precio, product_img = '$product_img', product_descrip = '$product_descrip', product_disp = '$product_disp'";
    $this->set_query();
  }

  public function read ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM productos WHERE producto_id = '$id'"
      : "SELECT * FROM productos";

    $this->get_query();
    $data = array();
    foreach ($this->rows as $key => $value) {
      array_push($data, $value);
    }

    return $data;
  }

  public function read_categoria ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM productos WHERE product_id = '$id' AND category = 'categoria"
      : "SELECT * FROM productos WHERE category = 'categoria'";

    $this->get_query();
    $data = array();
    foreach ($this->rows as $key => $value) {
      array_push($data, $value);
    }

    return $data;
  }

  public function update ( $data = array() ) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    $this->sql = "UPDATE productos SET  nombre = '$nombre', categoria = '$categoria', paquete = '$paquete', ocasion = '$ocasion', tipo = '$tipo', tamano = '$tamano', precio = $precio, product_img = '$product_img', product_descrip = '$product_descrip', product_disp = '$product_disp' WHERE producto_id = '$producto_id'";
    $this->set_query();
  }

  public function delete ( $id = '' ) {
    $this->sql = "DELETE FROM productos WHERE producto_id = '$id'";
    $this->set_query();
  }
}
