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
	<link rel="stylesheet" href="css/FinalServicios.css">
	<meta charset="utf-8">
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
		<a href="#">Lugares Turisticos</a>
		<a href="aComida.php">Comida Tipica</a>
		<a href="uContacto.php">Contacto</a>
		<a href="aRegistro.php">Registro</a>
		<a href="aExtras.php">Extras</a>
        <a href="php/FinalTabla.php">Usuarios Registrados</a>
		<a href="php/destruir.php">Cerrar Sesion</a>
	</nav>
	<section>
		<h2>Historia de valencia</h2>

		<p>Bienvenido a Valencia, una ciudad llena de historia, cultura y belleza que te cautivará desde el primer momento. 
            Prepárate para descubrir una mezcla única de tradición y modernidad mientras exploras sus fascinantes lugares turísticos.
        </p>
        <p>
            La Ciudad de las Artes y las Ciencias: Este complejo arquitectónico futurista diseñado por Santiago Calatrava es un símbolo de la Valencia contemporánea.
             Con sus impresionantes estructuras, incluyendo el Oceanogràfic, el Hemisfèric y el Museo de las Ciencias Príncipe Felipe, ofrece experiencias educativas y de entretenimiento para todas las edades.
        </p>
        <div class="contenedor"> <img src="imagenes\ciencia.jpg" alt=""></div>
       
        <p>
            La Catedral de Valencia: Conocida como la "Seu", esta majestuosa catedral es una joya arquitectónica que combina estilos gótico, románico y barroco.
            En su interior alberga el Santo Cáliz, considerado por algunos como el Grial, lo que la convierte en un destino de peregrinación y admiración.
        </p>
        <div class="contenedor"><img src="imagenes\catedral.jpg" alt=""></div>
        
        <p>
            La Lonja de la Seda: Este impresionante edificio gótico del siglo XV es un testimonio del próspero pasado comercial de Valencia. 
            Su intrincada arquitectura y su historia como centro de comercio de seda lo convierten en un lugar fascinante para visitar.
        </p>
        <div class="contenedor"><img src="imagenes\lonja.jpg" alt=""></div>
        
        <p>
            El Mercado Central: Sumérgete en la vida cotidiana de Valencia explorando este vibrante mercado, uno de los más grandes de Europa. 
            Aquí encontrarás una amplia variedad de productos frescos, desde frutas y verduras hasta mariscos y especias, todo ello en un entorno arquitectónico impresionante.
        </p>
        <div class="contenedor"><img src="imagenes\mercado.jpg" alt=""></div>
        
        <p>Las Fallas: Si tienes la suerte de visitar Valencia en marzo, no te pierdas las Fallas, una festividad única llena de color, música y fuegos artificiales.
             Durante esta celebración, las calles se llenan de monumentos artísticos que luego son quemados en espectaculares "cremàs".
        </p>
        <div class="contenedor"><img src="imagenes\fallas.jpg" alt=""></div>
        
        <p>La Playa de la Malvarrosa: Relájate y disfruta del sol en esta amplia playa de arena dorada, situada a pocos minutos del centro de la ciudad.
         Con su animado paseo marítimo y una amplia oferta de restaurantes y bares, es el lugar perfecto para disfrutar del estilo de vida mediterráneo.
        </p>
        <div class="contenedor"><img src="imagenes\playa.jpg" alt=""></div>
        
        <p>Estos son solo algunos de los muchos lugares turísticos que Valencia tiene para ofrecer. Con su combinación única de historia, cultura y belleza natural, 
            esta ciudad te dejará recuerdos inolvidables y ganas de volver una y otra vez. ¡Bienvenido a Valencia, donde cada rincón cuenta una historia!
        </p>
	</section>
	<footer>
		<p>Derechos reservados © Turisticos S.A</p>
	</footer>
</body>
</html>
