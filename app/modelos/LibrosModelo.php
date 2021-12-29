<?php
/**
 * Libros Modelo
 */
class LibrosModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getLibros(){
    $data = $this->db->querySelect("SELECT * FROM libros");
    return $data;
  }

  public function getLibro($id){
    $data = $this->db->querySelect("SELECT * FROM libros WHERE id=".$id);
    return $data;
  }

  public function insertarLibros($titulo, $autor, $editorial, $isdn){
    $sql = "INSERT INTO libros VALUES(0,";
    $sql.= "'".$titulo."', ";
    $sql.= "'".$autor."', ";
    $sql.= "'".$editorial."', ";
    $sql.= "'".$isdn."')";
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."libros");
      exit();
    } else {
      exit("Error al insertar los datos del libro");
    }
  }

  public function modificarLibros($id, $titulo, $autor, $editorial){
    $sql = "UPDATE libros SET ";
    $sql.= "titulo='".$titulo."', ";
    $sql.= "autor='".$autor."', ";
    $sql.= "editorial='".$editorial."' ";
    $sql.= "WHERE id=".$id;
    print $sql;
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."libros");
      exit();
    } else {
      exit("Error al modificar los datos del libro");
    }
  }

  public function borrarLibro($id){
    $sql = "DELETE FROM libros ";
    $sql.= "WHERE id=".$id;
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."libros");
      exit();
    } else {
      exit("Error al borrar el libro");
    }
  }
}
?>