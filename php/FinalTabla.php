<?php
   $conexion= mysqli_connect("localhost", "root", "","pfinal");
   $sql="SELECT * from registros";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../css/FinalTabla.css">
	<meta charset="utf-8">
	<title>Registros</title>
</head>
<body>
	<header>
  <h1>Valencia - España</h1>
	<p>Disfruta de la ciudad y diviértete con tus amigos</p>
	</header>
	<nav>
    <a href="aInicio.html">Inicio</a>
		<a href="aHistoria.html">Historia</a>
		<a href="aTuristicos.html">Lugares Turisticos</a>
		<a href="aComida.html">Comida Tipica</a>
		<a href="aContacto.html">Contacto</a>
		<a href="aRegistroshtml.html">Registro</a>
		<a href="">Extras</a>
    <a href="#">Usuarios Registrados</a>
    <a href="">Cerrar Sesion</a>
	</nav>
	<section>
		<h2>Registrados al Tour</h2>
  </section>
  <table cellspacing="10" cellpadding="2">
      <tr>
        <td>Numero de Tour</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Edad</td>
        <td>Sexo</td>
        <td>Ciudad</td>
        <td>Celular</td>
        <td>Transporte</td>
        <td>Camisa</td>
        <td>Talla</td>
        <td>Comentarios</td>
      </tr>

      <?php
       $sql="SELECT * from registros";
       $result=mysqli_query($conexion,$sql);

       while($mostrar=mysqli_fetch_array($result)){
    ?>

    <tr>
      <td><?php echo $mostrar['ID'] ?></td>
      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['apellido'] ?></td>
      <td><?php echo $mostrar['edad'] ?></td>
      <td><?php echo $mostrar['sexo'] ?></td>
      <td><?php echo $mostrar['ciudad'] ?></td>
      <td><?php echo $mostrar['celular'] ?></td>
      <td><?php echo $mostrar['transporte'] ?></td>
      <td><?php echo $mostrar['camisa'] ?></td>
      <td><?php echo $mostrar['talla'] ?></td>
      <td><?php echo $mostrar['comentarios'] ?></td>
    </tr>
    <?php
    }
    ?>
    </table>
	<footer>
		<p>Derechos reservados © Campamento de verano</p>
	</footer>
</body>
</html>
