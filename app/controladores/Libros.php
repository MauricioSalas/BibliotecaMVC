<?php
/**
 * Libros
 */
class Libros extends Controlador{
  private $modelo;
  function __construct()
  {
    $this->modelo = $this->modelo("LibrosModelo");
  }

  public function index(){
    $data = $this->modelo->getLibros();
    //llamamos a la vista
    $this->vista("LibrosVista",$data);
  }

  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $titulo = isset($_POST["titulo"])?$_POST["titulo"]:"";
      $autor = isset($_POST["autor"])?$_POST["autor"]:"";
      $editorial = isset($_POST["editorial"])?$_POST["editorial"]:"";


      $this->modelo->modificarLibros($id, $titulo, $autor, $editorial);

    } else {
      $data = $this->modelo->getLibro($id);
      $datos = [
        "id" => $id,
        "titulo" => $data[0]["titulo"],
        "autor" => $data[0]["autor"],
        "editorial" => $data[0]["editorial"]
      ];
      $this->vista("LibrosModificar",$datos);
    }
  }

  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";

      $this->modelo->borrarLibro($id);

    } else {
      $data = $this->modelo->getLibro($id);
      $datos = [
        "id" => $id,
        "titulo" => $data[0]["titulo"],
        "autor" => $data[0]["autor"],
        "editorial" => $data[0]["editorial"]
      ];
      $this->vista("LibrosBorrar",$datos);
    }
  }

  public function crea()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $titulo = isset($_POST["titulo"])?$_POST["titulo"]:"";
      $autor = isset($_POST["autor"])?$_POST["autor"]:"";
      $editorial = isset($_POST["editorial"])?$_POST["editorial"]:"";
      $isdn = isset($_POST["isdn"])?$_POST["isdn"]:"";
      

      $this->modelo->insertarLibros($titulo, $autor, $editorial, $isdn);

    } else {
      $this->vista("LibrosAlta");
    }
  }
}
?>