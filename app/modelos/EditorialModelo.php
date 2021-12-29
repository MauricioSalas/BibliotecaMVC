<?php
/**
 * Editorial Modelo
 */
class EditorialModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getEditoriales(){
    $data = $this->db->querySelect("SELECT * FROM editorial");
    return $data;
  }

  public function getEditorial($id){
    $data = $this->db->querySelect("SELECT * FROM editorial WHERE id=".$id);
    return $data;
  }

  public function insertarEditorial($nombre){
    $sql = "INSERT INTO editorial VALUES(0,";
    $sql.= "'".$nombre."')";
    if ($this->db->queryNoSelect($sql)) {
      header("Location:".RUTA_APP."editorial");
      exit();
    } else {
      exit("Error al insertar los datos de la editorial");
    }
  }

  public function modificarEditorial($id, $nombre){
    $sql = "UPDATE editorial SET ";;
    $sql.= "nombre='".$nombre."' ";
    $sql.= "WHERE id=".$id;
    print $sql;
    if ($this->db->queryNoSelect($sql)) {
      header("Location:".RUTA_APP."editorial");
      exit();
    } else {
      exit("Error al modificar los datos de la editorial");
    }
  }

  public function borrarEditorial($id){
    $sql = "DELETE FROM editorial ";
    $sql.= "WHERE id=".$id;
    if ($this->db->queryNoSelect($sql)) {
      header("Location:".RUTA_APP."editorial");
      exit();
    } else {
      exit("Error al borrar la editorial");
    }
  }
}
?>