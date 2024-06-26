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
		<a href="aTuristicos.php">Lugares Turisticos</a>
		<a href="#">Comida Tipica</a>
		<a href="aContacto.php">Contacto</a>
		<a href="aRegistro.php">Registro</a>
		<a href="aExtras.php">Extras</a>
        <a href="php/FinalTabla.php">Usuarios Registrados</a>
		<a href="php/destruir.php">Cerrar Sesion</a>
	</nav>
	<section>
		<h2>Comidas tipicas de valencia</h2>

        <p>¡Prepárate para una experiencia gastronómica inolvidable en Valencia, donde la cocina tradicional mediterránea se combina con sabores únicos y auténticos! 
            Descubre las delicias culinarias que hacen de esta región un paraíso para los amantes de la buena comida.</p>
        <p>La Paella Valenciana: Considerada el plato más emblemático de Valencia, la paella es una explosión de sabores que refleja la riqueza agrícola de la región. Preparada con arroz, pollo, conejo, judías verdes, tomate, garrofón (una variedad de judía blanca) y azafrán, 
            esta receta tradicional se cocina lentamente sobre fuego abierto para lograr un sabor incomparable.</p>
            <div class="contenedor"><img src="imagenes/paella-valenciana-tradicional.jpg" alt=""></div>
            
        <p>La Fideuà: Similar a la paella pero preparada con fideos en lugar de arroz, la fideuà es otro plato imprescindible en la gastronomía valenciana. 
            Se cocina con mariscos frescos, como gambas, calamares y mejillones, junto con ajo, tomate, ñora (pimiento seco) y pescado, todo ello combinado para crear una explosión 
            de sabores marinos.
        </p>
        <div class="contenedor"> <img src="imagenes/fideua.jpeg" alt=""></div>
           
        <p>La Horchata con Fartons: Refréscate con una horchata, una bebida tradicional valenciana elaborada a base de chufa, azúcar y agua. 
            Acompáñala con unos deliciosos fartons, unos bollos esponjosos y alargados que se sumergen en la horchata, creando una combinación irresistible de sabores y texturas.</p>
            <div class="contenedor"><img src="imagenes\Horchata.jpeg" alt=""></div>
            
        <p>El All i Pebre: Si eres amante de los platos de cuchara, no puedes perderte el all i pebre, un guiso de anguilas típico de la Albufera, 
            la reserva natural de Valencia. Preparado con anguilas de la laguna, ajo, pimentón, patatas y laurel, este plato es reconfortante y lleno de sabor.
        </p>
        <div class="contenedor"><img src="imagenes\pebre.jpeg" alt=""></div>
        
        <p>Las Oranges y Clementinas: Valencia es conocida por sus deliciosas naranjas y clementinas, que se cultivan en los campos de la región y se exportan a todo el mundo. 
            Prueba estas frutas frescas y jugosas como postre o como tentempié durante tu visita.
        </p>
        <div class="contenedor"> <img src="imagenes\Clementinas.jpg" alt=""></div>
       
        <p>Los Buñuelos de Calabaza: Endulza tu paladar con unos buñuelos de calabaza, un postre tradicional valenciano que se disfruta especialmente durante las fiestas de Fallas. 
            Estos bollos fritos, espolvoreados con azúcar glas, son irresistiblemente deliciosos y perfectos para satisfacer tu antojo de algo dulce.
        </p>
        <div class="contenedor"><img src="imagenes\bunuelos.jpg" alt=""></div>
        
        <p>Estas son solo algunas de las delicias culinarias que Valencia tiene para ofrecer. Con ingredientes frescos, sabores auténticos y una tradición culinaria arraigada, 
            cada bocado en Valencia es una experiencia única que te dejará con ganas de más. ¡Disfruta de la comida y la hospitalidad valencianas mientras exploras esta maravillosa 
            ciudad!
        </p>
	</section>
	<footer>
		<p>Derechos reservados © Turisticos S.A</p>
	</footer>
</body>
</html>
