<?php
include('../config/config.php');
include('patient.php');
$p = new patient();

$allpatients= $p->getAll();

if (isset($_GET['id']) && !empty($_GET['id'])) {
$remove = $p->remove($_GET['id']);
if ($remove){
header('Location: ' . ROOT . 'Pacientes/index.php');
} else {
$msj = "<div class='alert alert-dangr' rol='alert' > Error al eliminar agenda. </div>";   
}
}

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<title> lista de paciente </title>
<link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


<body>
<?php include('../menu.php') ?>
    <div class="container">
        <h2 class="text-center mb-5">lista de pacientes</h2>
        
        <div class="row">
            <?php
            while ($patient = mysqli_fetch_object($allpatients)){
                $input = $patient->fecha;
                echo "<div class='col-6'>";
                echo "<div class='border border-info p-2'>";
                echo "<h5> Documento:
                    $patient->tipo_de_documento 
                     $patient->numero_de_documento 
                    </h5>"; 
                echo "<h5> Telefono:
                    $patient->telefono 
                    </h5>"; 
                echo "<h5> Correo:
                    $patient->correo 
                    </h5>"; 
                echo "<h5> Motivo:
                    $patient->motivo_de_contacto 
                    </h5>"; 
                    echo " <p> <b>Fecha:</b> ".date("D", strtotime($input)) . " " . date("d-M-Y", strtotime($input)). " </p> ";
                    echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/Pacientes/edit.php?id=$patient->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/Pacientes/index.php?id=$patient->id' >Eliminar</a> </div>";

                echo "</div>";
                echo "</div>";  
            }
            ?>
            </div>
        </div>

</body>

