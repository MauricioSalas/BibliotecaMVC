<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles CSS -->
    <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP."public/css/styles.css";?>">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/d0b24c07da.js" crossorigin="anonymous"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
    <link rel ="icon" href ="<?php print RUTA_APP."public/img/logo.png";?>" type ="image/x-icon">
  <title>Eliminar Editorial</title>
  <meta charset="utf-8">
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"></a>
          <img src="<?php print RUTA_APP."public/img/logo.png";?>" width="40">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <!-- Libros -->
              <li class="nav-item">
              <a class="nav-link active" id="inicioLeng" aria-current="page" href="<?php print RUTA_APP."libros";?>">Libros</a>
              </li>
              <!-- Autor -->
              <li class="nav-item">
                <a class="nav-link active" id="inicioLeng" aria-current="page" href="<?php print RUTA_APP."autor";?>">Autor</a>
              </li>
              <!-- Editorial -->
              <li class="nav-item">
                <a class="nav-link active" id="inicioLeng" aria-current="page" href="<?php print RUTA_APP."editorial";?>">Editorial</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Barra Superior -->
      <div id="barraCrear" class="row justify-content-center">
      <nav class="navbar navbar-light bg-light rounded border border-dark">
        <span class="navbar-brand">Eliminar Editorial</span>
          <form class="form-inline">
            <a class="btn btn-warning" role="button" href="<?php print RUTA_APP."editorial"; ?>"><i class='fas fa-undo-alt'></i> Regresar</a>
          </form>
      </nav>
    </div>
    <!-- Formulario -->
    <form id="formulario" action='<?php print RUTA_APP."editorial/borrar/"; ?>' method="POST">
    <div class="form-group">
      <label for="nombre">Nombres</label>
        <input type="text" class="form-control margin-bottom" name="nombre" value="<?php print $data["nombre"];?>" disabled>
    </div>
    <div class="form-group">
        <input type="hidden" value="<?php print $data["id"];?>" name="id">
        <p><strong>ADVERTENCIA: Una vez borrado el registro, NO se podr?? recuperar.</strong></p>
    </div>
    <button type="submit" class="btn btn-danger" value="Enviar">Eliminar</button>
  </form>
<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>