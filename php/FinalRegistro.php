<?php

   $conexion= mysqli_connect("localhost", "root", "","pfinal");

   if(isset($_POST['registro'])){ 
      $nombre = strtoupper($_POST['nombre']);
      $apellido = strtoupper($_POST['apellido']);
      $edad  = $_POST['edad'];
      $ciudad = strtoupper($_POST['ciudad']);
      $celular = $_POST['celular'];
      $transporte = strtoupper($_POST['transporte']);
      $camisa = strtoupper($_POST['camisa']);
      $talla = strtoupper($_POST['talla']);
      $comentarios = $_POST['comentarios'];
      $sexo  = strtoupper($_POST['sexo']);

         $sql = "INSERT INTO registros VALUES('','$nombre', '$apellido', '$edad','$ciudad','$celular','$transporte','$camisa','$talla','$comentarios','$sexo')";

         $ejecutar = mysqli_query ($conexion,$sql)
   }
?>

