<?php
include_once('../config/config.php');
include('patient.php');

if (isset($_POST) && !empty($_POST)){
    $patient = new patient ();

    //if ($_FILES['imagen']['name'] !== ''){
    //    $_POST['imagen'] = saveImage($_FILES);
    //  }
    $save = $patient->save($_POST);
    if ($save){
        $message = '<div class="alert alert-success" role="alert"> Contacto creado correctamente </div>';
    } else{
        $message = '<div class="alert alert-danger" role="alert" > Error al crear contacto </div>';
    }       
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Registrar Contacto</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/index.css">
    
    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg bg-secondary  ">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="../index.html">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="./index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../tipos.html">Tipos de audifonos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../Pacientes/add.php">Deja tus datos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- carrusel -->

  <div id="caroulse" class="carousel carousel-dark slide " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active ">
          <img src="../pics/articulo 2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item ">
          <img src="../pics/articulo 3.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item ">
          <img src="../pics/logo.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#caroulse" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#caroulse" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
<?php
    if (isset($message)){
        echo $message;
    }
?>
        <div class="container" >
            <h2 class="text-center mb-2" > Informacion del Contacto </h2>
            <form method="POST" enctype="multipart/form-data" >
                <div class="row mb-2" >
                    <div class="col">
                        <input type="text" name="nombres" id="nombres" placeholder="Nombres del paciente" class="form-control" />
                    </div>
                    <div class="col" >
                        <input type="text" name="tipo_de_documento" id="tipo_de_documento" placeholder="Tipo de documento" class="form-control" />
                    </div>
                </div>
                <div class="row mb-2" >
                    <div class="col" >
                        <input type="vartin" name="numero_de_documento" id="numero_de_documento" placeholder="Numero de documento" class="form-control" />
                    </div>
                    <div class="col" >
                        <input type="vartin" name="telefono" id="telefono" placeholder="Numero telefonico" class="form-control" />
                    </div>
                </div>
                <div class="row mb-2" >
                    <div class="col" >
                        <input type="email" name="correo" id="correo" placeholder="Correo electronico" class="form-control" />
                    </div>
                    <div class="col" >
                        <input type="datetime-local" name="fecha" id="fecha" class="form-control" />
                    </div>
                </div>
                <div class="row mb-2" >
                    <div class="col" >
                        <textarea id="motivo_de_contacto" name="motivo_de_contacto" placeholder="Motivo de contacto" class="form-control" >
                        </textarea>
                    </div>
                </div>
                <button class="btn btn-success"> Enviar </button>
            </form>
            <!-- footer -->
  <div class="container-fluid">
    <div class="row p-5 bg-secondary ">
      <div class="col-xs-12 col-md-4 col-lg-4 mt-3">
        <h5>Redes sociales</h5>
        <div class="">
          <a class="text-white text-decoration-none" href="https://www.instagram.com/">Instagram</a>
        </div>
        <div class="">
          <a class="text-white text-decoration-none" href="https://es-la.facebook.com/">facebook</a>
        </div>
        <div class="">
          <a class="text-white text-decoration-none" href="https://www.youtube.com/">Youtube</a>
        </div>
      </div>



      <div class="col-xs-12 col-md-4 col-lg-4 mt-3">
        <h5>Contacto</h5>
        <div class="">
          <a class="text-white text-decoration-none">correoinventado@gmail.com</a>
        </div>
        <div class="">
          <a class="text-white text-decoration-none">Telefono : 300 911 1234</a>
        </div>
        <div class="">
          <a class="text-white text-decoration-none">Fax : Ya no se usa</a>
        </div>
      </div>

      <div class="col-xs-12 col-md-4 col-lg-4 mt-3">
        <h5>Información personal</h5>
        <div class="">
          <a class="text-white text-decoration-none">Alejandro</a>
        </div>
        <div class="">
          <a class="text-white text-decoration-none">Bogotá DC</a>
        </div>
        <div class="">
          <a class="text-white text-decoration-none">Terapeuta</a>
        </div>
      </div>


    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>    
