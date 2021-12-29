<?php
/**
 * Autor
 */
class Autor extends Controlador{
  private $modelo;
  function __construct()
  {
    $this->modelo = $this->modelo("AutorModelo");
  }

  public function index(){
    $data = $this->modelo->getAutores();
    $this->vista("AutorVista",$data);
  }

  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $nombres = isset($_POST["nombres"])?$_POST["nombres"]:"";
      $apellidopat = isset($_POST["apellidopat"])?$_POST["apellidopat"]:"";
      $apellidomat = isset($_POST["apellidomat"])?$_POST["apellidomat"]:"";


      $this->modelo->modificarAutor($id, $nombres, $apellidopat, $apellidomat);

    } else {
      $data = $this->modelo->getAutor($id);
      $datos = [
        "id" => $id,
        "nombres" => $data[0]["nombres"],
        "apellidopat" => $data[0]["apellidopat"],
        "apellidomat" => $data[0]["apellidomat"]
      ];
      $this->vista("AutorModificar",$datos);
    }
  }

  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";

      $this->modelo->borrarAutor($id);

    } else {
      $data = $this->modelo->getAutor($id);
      $datos = [
        "id" => $id,
        "nombres" => $data[0]["nombres"],
        "apellidopat" => $data[0]["apellidopat"],
        "apellidomat" => $data[0]["apellidomat"]
      ];
      $this->vista("AutorBorrar",$datos);
    }
  }

  public function crea()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $nombres = isset($_POST["nombres"])?$_POST["nombres"]:"";
      $apellidopat = isset($_POST["apellidopat"])?$_POST["apellidopat"]:"";
      $apellidomat = isset($_POST["apellidomat"])?$_POST["apellidomat"]:"";
      

      $this->modelo->insertarAutor($nombres, $apellidopat, $apellidomat);

    } else {
      $this->vista("AutorNuevo");
    }
  }
}
?>