<?php

$conexion = mysqli_connect("localhost","root","","pfinal") or die("problemas con la coneccion");

if(isset($_POST['sesion'])){

  $registros = mysqli_query($conexion,"select usuario,password from usuarios where usuario = ('$_REQUEST[usuario]') and password =('$_REQUEST[password]')") or die ("Problemas en el select". mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
    header('Location: http://localhost:8080/paginasweb/FinalSesion.html');
  }

}

mysqli_close($conexion);

?>