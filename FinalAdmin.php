<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="css/FinalRegistro.css">
	<meta charset="utf-8">
	<title>Campamento de verano - Inscripción</title>
</head>
<body>
	<header>
		<h1>Valencia - España</h1>
		<p>Disfruta de la ciudad y diviértete con tus amigos</p>
	</header>
	<nav>
		<a href="index.html">Inicio</a>
		<a href="uHistoria.html">Historia</a>
		<a href="uTuristicos.html">Lugares Turisticos</a>
		<a href="uComida.html">Comida Tipica</a>
		<a href="uContacto.html">Contacto</a>
		<a href="uRegistro.html">Registro</a>
		<a href="uExtras.html">Extras</a>
		<a href="#">Admin</a> 
	</nav>
	<section>
    <div class="caja">

      <table cellspacing="10" cellpadding="2">
        <form class="formulario" onsubmit="return validacion()" action="" method="post" id="formulario">
          <tr>
            <td>Usuario:</td>
            <td>Contraseña:</td>
          </tr>
          <tr>
            <td><input type="text" name="usuario" id="usuario" value="" placeholder="USERNAME" onpaste="return false;" onDrop="return false;" autocomplete="off"></td>
            <td><input type="password" name="password" id="password" value="" placeholder="PASSWORD" onpaste="return false;" onDrop="return false;" autocomplete="off"></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="sesion" value="Iniciar Sesion" id="boton"></td>
          </tr>
        </form>
      </table>
    </div>
    <script type="text/javascript" src="js/validacionSesion.js"></script>
      </section>

      <?php

$conexion = mysqli_connect("localhost","root","","pfinal") or die("problemas con la coneccion");

if($_POST){

  $registros = mysqli_query($conexion,"select usuario,password from usuarios where usuario = ('$_REQUEST[usuario]') and password =('$_REQUEST[password]')") or die ("Problemas en el select". mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {

    session_start();
      $_SESSION['admin'] = $_REQUEST['usuario'];
      header('Location: http://localhost:8080/paginasweb/aInicio.php');

    
  }else {
    echo '<script> alert("Usuario o contraseña incorrectos"); </script>';
  }

}

mysqli_close($conexion);

?>
