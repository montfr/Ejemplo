<?php
final class CountriesModel extends Model {
  public $tipo_id;
  public $tipo_nombre;

  public function create ( $data = array() ) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    $this->sql = "INSERT INTO tipo SET tipo_id = $tipo_id, tipo_nombre = '$tipo_nombre'";
    $this->set_query();
  }

  public function read ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM tipo WHERE tipo_id = $id"
      : "SELECT * FROM tipo";

    $this->get_query();
    $data = array();
    foreach ($this->rows as $key => $value) {
      array_push($data, $value);
    }

    return $data;
  }

  public function read_desc ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM tipo WHERE tipo_id = $id ORDER BY tipo_id DESC"
      : "SELECT * FROM tipo ORDER BY tipo_id DESC";

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

    $this->sql = "UPDATE tipo SET tipo_nombre = '$tipo_nombre' WHERE tipo_id = $tipo_id";
    $this->set_query();
  }

  public function delete ( $id = '' ) {
    $this->sql = "DELETE FROM tipo WHERE tipo_id = $id";
    $this->set_query();
  }
}
