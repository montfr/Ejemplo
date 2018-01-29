<?php
final class OcasionModel extends Model {
  public $ocasion_id;
  public $tipo_ocasion;

  public function create ( $data = array() ) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    $this->sql = "INSERT INTO ocasion SET ocasion_id = $ocasion_id, tipo_ocasion = '$tipo_ocasion'";
    $this->set_query();
  }

  public function read ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM ocasion WHERE ocasion_id = $id"
      : "SELECT * FROM ocasion";

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

    $this->sql = "UPDATE ocasion SET tipo_ocasion = '$tipo_ocasion' WHERE ocasion_id = $ocasion_id";
    $this->set_query();
  }

  public function delete ( $id = '' ) {
    $this->sql = "DELETE FROM ocasion WHERE ocasion_id = $id";
    $this->set_query();
  }
}
