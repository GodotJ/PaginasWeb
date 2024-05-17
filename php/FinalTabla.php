<?php
   $conexion= mysqli_connect("localhost", "root", "","pfinal");
   $sql="SELECT * from registros";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../css/FinalTabla.css">
	<meta charset="utf-8">
	<title>Campamento de verano - Contacto</title>
</head>
<body>
	<header>
  <h1>Valencia - España</h1>
	<p>Disfruta de la ciudad y diviértete con tus amigos</p>
	</header>
	<nav>
  <a href="">Inicio</a>
		<a href="FinalHistoria.html">Historia</a>
		<a href="FinalTuristicos.html">Lugares Turisticos</a>
		<a href="Final">Comida Tipica</a>
		<a href="FinalContacto.html ">Contacto</a>
		<a href="FinalRegistro.html">Registro</a>
		<a href="">Extras</a>
		<a href="php/FinalTabla.php">Admin</a>
	</nav>
	<section>
		<h2>Registrados al Tour</h2>
  </section>
  <table>
    <tr>
      <td>nombre</td>
      <td>edad</td>
      <td>sexo</td>
      <td>otro</td>
      <td>celular</td>
      <td>celular2</td>
      <td>domicilio</td>
      <td>ciudad</td>
      <td>alergias</td>
      <td>tiposAlergias</td>
      <td>correo</td>
    </tr>

    <?php
       $sql="SELECT * from registros";
       $result=mysqli_query($conexion,$sql);

       while($mostrar=mysqli_fetch_array($result)){


    ?>
    <tr>
      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['edad'] ?></td>
      <td><?php echo $mostrar['sexo'] ?></td>
      <td><?php echo $mostrar['otro'] ?></td>
      <td><?php echo $mostrar['celular'] ?></td>
      <td><?php echo $mostrar['celular2'] ?></td>
      <td><?php echo $mostrar['domicilio'] ?></td>
      <td><?php echo $mostrar['ciudad'] ?></td>
      <td><?php echo $mostrar['alergias'] ?></td>
      <td><?php echo $mostrar['tiposAlergias'] ?></td>
      <td><?php echo $mostrar['correo'] ?></td>
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
