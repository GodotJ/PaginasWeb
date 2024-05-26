<?php

session_start();

$usuario = $_SESSION['admin'];

if (!isset($usuario)) {
  header("Location:index.html");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<link rel="stylesheet" href="css/FinalInicio.css">
	<meta charset="utf-8">
	<title>Lugares Turisticos</title>
	<style type="text/css">

	</style>
</head>
<body>
	<header>
		<h1>Valencia - España</h1>
		<p>Disfruta de la ciudad y diviértete con tus amigos</p>
	</header>
	<nav>
		<a href="#">Inicio</a>
		<a href="aHistoria.php">Historia</a>
		<a href="aTuristicos.php">Lugares Turisticos</a>
		<a href="aComida.php">Comida Tipica</a>
		<a href="aContacto.php">Contacto</a>
		<a href="aRegistro.php">Registro</a>
		<a href="aExtras.php">Extras</a>
		<a href="php/FinalTabla.php">Usuarios Registrados</a>
		<a href="php/destruir.php">Cerrar Sesion</a>
	</nav>
	<section>
		<h2>Bienvenidos</h2>
		<p>Daremos una pequeña introduccion a un sitio turistico muy especial como es Valencia.</p>

		<p>Valencia (oficialmente en valenciano: València,​ es un municipio​ y una ciudad de España, 
			capital de la provincia homónima y de la Comunidad Valenciana. Con una población de 807 693 habitantes (2023),
			​ que sube a 1 581 057 habitantes (2020) si se incluye su espacio urbano,
			​ es la tercera ciudad y área metropolitana más poblada de España, por detrás de Madrid y Barcelona.​
		</p>

		<p>Esta ciudad portuaria de la costa sureste de España ha sido nombrada Capital Mundial del Diseño para 2022 
		gracias a su largo legado de diseño y a sus innovadoras políticas públicas. Esta distinción conlleva un año de programación 
		pública para celebrar el diseño y su capacidad para mejorar la vida de los habitantes de la ciudad. Si vas, no dejes de visitar los Jardines del Turia,
		 uno de los mayores parques urbanos de España.
		</p>

		<img src="imagenes\Valenciaimg.jpg">
	</section>
	<footer>
		<p>Derechos reservados © Turisticos S.A</p>
	</footer>
</body>
</html>
