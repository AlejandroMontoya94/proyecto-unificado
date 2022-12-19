<?php 
 include_once('../config/config.php');
 include('../config/database.php');

 class patient{
    public $conn;

    function __construct(){
      $db = new Database();
      $this->conn = $db->connectToDatabase();
    }

    function save($params){
      $nombres = $params['nombres'];
      $tipo_de_documento = $params['tipo_de_documento'];
      $numero_de_documento = $params['numero_de_documento'];
      $telefono = $params['telefono'];
      $correo = $params['correo'];
      $fecha = $params['fecha'];
      $motivo_de_contacto = $params['motivo_de_contacto'];

      $insert = " INSERT INTO pacientes VALUES (NULL, '$nombres', '$tipo_de_documento', $numero_de_documento, $telefono, '$correo', '$fecha', '$motivo_de_contacto')";
      return mysqli_query($this->conn, $insert);
    }

    function getALL(){
      $sql = "SELECT * FROM pacientes ORDER BY fecha ASC ";
      return mysqli_query($this->conn, $sql);
    }
    
    function getOne($id){
      $sql = "SELECT * FROM pacientes WHERE id = $id";
      return mysqli_query($this->conn, $sql);
    }
    
    function update($params){
      $nombres = $params['nombres'];
      $tipo_de_documento = $params['tipo_de_documento'];
      $numero_de_documento = $params['numero_de_documento'];
      $telefono = $params['telefono'];
      $correo = $params['correo'];
      $fecha = $params['fecha'];
      $motivo_de_contacto = $params['motivo_de_contacto'];
      $id = $params['id'];

      $update = " UPDATE pacientes SET nombres='$nombres', tipo_de_documento='$tipo_de_documento', numero_de_documento='$numero_de_documento', telefono='$telefono', correo='$correo', fecha='$fecha', motivo_de_contacto='$motivo_de_contacto'WHERE id = $id";
      return mysqli_query($this->conn, $update);
    }

    function remove($id){
      $remove ="DELETE FROM pacientes WHERE id=$id";
      return mysqli_query($this->conn, $remove);
    }
 }
?>