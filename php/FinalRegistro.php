<?php

$conexion = mysqli_connect("localhost","root","","pfinal") or die("problemas con la coneccion");

if(isset($_POST['registro'])){ 
   $nombre = strtoupper($_POST['nombres']);
   $apellido = strtoupper($_POST['apellidos']);
   $edad  = $_POST['edad'];
   $ciudad = strtoupper($_POST['ciudad']);
   $celular = $_POST['celular'];
   $transporte = (isset($_POST['transporte']))? $_POST['transporte']: "NINGUNO";
   $camisa = strtoupper($_POST['camisa']);
   $talla = (isset($_POST['talla']))? $_POST['talla']: "NINGUNO";
   $comentarios = $_POST['comentarios'];
   $sexo  = strtoupper($_POST['sexo']);

      $sql = "INSERT INTO registros VALUES('','$nombre', '$apellido', '$edad','$sexo','$ciudad','$celular','$transporte','$camisa','$talla','$comentarios')";
      
      $ejecutar = mysqli_query ($conexion,$sql);
}

header('Location: http://localhost:8080/paginasweb/uRegistro.html');


mysqli_close($conexion);

?>


