<?php
final class CategoriaModel extends Model {
  public $cat_id;
  public $cat_nombre;

  public function create ( $data = array() ) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    $this->sql = "INSERT INTO categoria SET cat_id = $cat_id, cat_nombre = '$cat_nombre'";
    $this->set_query();
  }

  public function read ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM categoria WHERE cat_id = $id"
      : "SELECT * FROM categoria";

    $this->get_query();
    $data = array();
    foreach ($this->rows as $key => $value) {
      array_push($data, $value);
    }

    return $data;
  }

  public function read_desc ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM categoria WHERE cat_id = $id ORDER BY cat_id DESC"
      : "SELECT * FROM categoria ORDER BY cat_id DESC";

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

    $this->sql = "UPDATE categoria SET cat_nombre = '$cat_nombre' WHERE cat_id = $cat_id";
    $this->set_query();
  }

  public function delete ( $id = '' ) {
    $this->sql = "DELETE FROM categoria WHERE cat_id = $id";
    $this->set_query();
  }
}
