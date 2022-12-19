<?php
include_once('../config/config.php');
include('patient.php');
$p = new patient();
$data = mysqli_fetch_object($p->getOne($_GET['id']));
$date = new DateTime($data->fecha);
if (isset($_POST) && !empty($_POST)){
$update = $p->update($_POST);
if ($update){
    $message = '<div class="alert alert-success" role= "alert">pacinte modificado correctamente</div>';
    }else{
    $message = '<div class= "alert alert-danger" role="alert" > Error al modificar un pacinte </div>';
}
}
?>
<!DOCTYPE thml>
<html>

    <head>
        <meta charset="UTF-8" />
        <title>modoficar pacinte </title>
        <link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

<body>
<?php include('../menu.php') ?>
<?php
    if (isset($message)){
        echo $message;
    }
?>
        <div class="container" >
            <h2 class="text-center mb-2" > Modificar el Contacto </h2>
            <form method="POST" enctype="multipart/form-data" >
            <div class="row mb-2" >
                    <div class="col">
                        <input type="text" name="nombres" id="nombres" placeholder="Nombres del paciente" class="form-control" value="<?= $data->nombres ?>"/>
                        <input type="hidden" name="id" id="id"  class="form-control" value="<?= $data->id ?>"/>
                    </div>
                    <div class="col" >
                        <input type="text" name="tipo_de_documento" id="tipo_de_documento" placeholder="Tipo de documento" class="form-control" value="<?= $data->tipo_de_documento ?>" />
                    </div>
                </div>
                <div class="row mb-2" >
                    <div class="col" >
                        <input type="vartin" name="numero_de_documento" id="numero_de_documento" placeholder="Numero de documento" class="form-control" value="<?= $data->numero_de_documento ?>" />
                    </div>
                    <div class="col" >
                        <input type="vartin" name="telefono" id="telefono" placeholder="Numero telefonico" class="form-control" value="<?= $data->telefono ?>" />
                    </div>
                </div>
                <div class="row mb-2" >
                    <div class="col" >
                        <input type="email" name="correo" id="correo" placeholder="Correo electronico" class="form-control" value="<?= $data->correo ?>"/>
                    </div>
                    <div class="col" >
                        <input type="datetime-local" name="fecha" id="fecha" class="form-control"  value="<?= $date->format('Y-m-d\TH:i') ?>" />
                    </div>
                </div>
                <div class="row mb-2" >
                    <div class="col" >
                        <textarea id="motivo_de_contacto" name="motivo_de_contacto" placeholder="Motivo de contacto" class="form-control" >
                        <?= $data->motivo_de_contacto ?>
                        </textarea>
                    </div>
                </div>
                <button class="btn btn-success"> Modificar </button>
            </form>
    </body>
</html>    