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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/FinalExtras.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/navBar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
	<title>Lugares Turisticos</title>
</head>
<body>
	<header>
		<h1>Valencia Historia</h1>
		<p>La historia de Valencia</p>
	</header>
	<nav>
    <a href="aInicio.php">Inicio</a>
		<a href="aHistoria.php">Historia</a>
		<a href="aTuristicos.php">Lugares Turisticos</a>
		<a href="aComida.php">Comida Tipica</a>
		<a href="aContacto.php">Contacto</a>
		<a href="aRegistro.php">Registro</a>
		<a href="#">Extras</a>
    <a href="php/FinalTabla.php">Usuarios Registrados</a>
		<a href="php/destruir.php">Cerrar Sesion</a>
	</nav>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="imagenes/musica.jpg" />
            <div>
              <h2>Palacio de la musica</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="imagenes/teatro.jpg" />
            <div>
              <h2>Teatro Principal</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="imagenes/centro.jpg" />
            <div>
              <h2>Centro Arqueologico</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="imagenes/palacio.jpg" />
            <div>
              <h2>Palacio del Marqués de Dos Aguas</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="imagenes/torres.jpg" />
            <div>
              <h2>Torres de Serranos</h2>
            </div>
          </div>
        </div>
      </div>
      <script src="js/swiper2.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<footer>
		<p>Derechos reservados © Turisticos S.A</p>
	</footer>
</body>
</html>
