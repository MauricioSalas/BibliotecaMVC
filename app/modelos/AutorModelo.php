<?php
/**
 * Autor Modelo
 */
class AutorModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getAutores(){
    $data = $this->db->querySelect("SELECT * FROM autor");
    return $data;
  }

  public function getAutor($id){
    $data = $this->db->querySelect("SELECT * FROM autor WHERE id=".$id);
    return $data;
  }

  public function insertarAutor($nombres, $apellidopat, $apellidomat){
    $sql = "INSERT INTO autor VALUES(0,";
    $sql.= "'".$nombres."', ";
    $sql.= "'".$apellidopat."', ";
    $sql.= "'".$apellidomat."')";
    if ($this->db->queryNoSelect($sql)) {
      header("Location:".RUTA_APP."autor");
      exit();
    } else {
      exit("Error al insertar los datos del autor");
    }
  }

  public function modificarAutor($id, $nombres, $apellidopat, $apellidomat){
    $sql = "UPDATE autor SET ";
    $sql.= "nombres='".$nombres."', ";
    $sql.= "apellidopat='".$apellidopat."', ";
    $sql.= "apellidomat='".$apellidomat."' ";
    $sql.= "WHERE id=".$id;
    print $sql;
    if ($this->db->queryNoSelect($sql)) {
      header("Location:".RUTA_APP."autor");
      exit();
    } else {
      exit("Error al modificar los datos del autor");
    }
  }

  public function borrarAutor($id){
    $sql = "DELETE FROM autor ";
    $sql.= "WHERE id=".$id;
    if ($this->db->queryNoSelect($sql)) {
      header("Location:".RUTA_APP."autor");
      exit();
    } else {
      exit("Error al borrar el autor");
    }
  }
}
?>