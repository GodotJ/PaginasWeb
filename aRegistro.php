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
  <link rel="stylesheet" href="css/FinalRegistro.css">
	<meta charset="utf-8">
	<title>Tour - Inscripción</title>
</head>
<body>
	<header>
		<h1>Valencia - España</h1>
		<p>Disfruta de la ciudad y diviértete con tus amigos</p>
	</header>
	<nav>
		<a href="aInicio.php">Inicio</a>
		<a href="aHistoria.php">Historia</a>
		<a href="aTuristicos.php">Lugares Turisticos</a>
		<a href="aComida.php">Comida Tipica</a>
		<a href="aContacto.php">Contacto</a>
		<a href="#">Registro</a>
		<a href="aExtras.php">Extras</a>
    <a href="php/FinalTabla.php">Usuarios Registrados</a>
		<a href="php/destruir.php">Cerrar Sesion</a>
	</nav>
	<section>
		<p>Para inscribirte en nuestro tour, por favor completa el siguiente formulario:</p>
    <div class="caja">

      <h3>Inscripcion</h3>
      <table cellspacing="10" cellpadding="2">
        <form class="formulario" onsubmit="return validacion()" action="php/FinalRegistro.php" method="post" id="formulario">
          <tr>
            <td>Nombres:</td>
            <td>Apellidos:</td>
          </tr>
          <tr>
            <td><input type="text" id="nombres" name="nombres" onkeyup="mayusculas(this)" onkeypress="return soloLetras(event)"></td>
            <td><input type="text" id="apellidos" name="apellidos" onkeyup="mayusculas(this)" onkeypress="return soloLetras(event)"></td>
          </tr>
          <tr>
            <td>Edad:</td>
            <td>Sexo:</td>
          </tr>
          <tr>
            <td><input type="number" id="edad" name="edad" maxlength="2" max="60" min="18"></td>
            <td><select class="sexo" id="sexo" name="sexo">
              <option value="1" disabled selected value>Elige una opcion:</option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select></td>
          </tr>
          <tr>
            <td>Lugar Turistico:</td>
            <td>Celular: (10 digitos)</td>
          </tr>
          <tr>
            <td><select class="ciudad" name="ciudad" id="ciudad">
              <option value="1" disabled selected value>Elige un lugar:</option>
              <option value="Ciudad de las Artes y las Ciencias">Ciudad de las Artes y las Ciencias</option>
              <option value="Catedral de Valencia">Catedral de Valencia</option>
              <option value="Lonja de la Seda">Lonja de la Seda</option>
              <option value="Mercado Central">Mercado Central</option>
              <option value="Playa de la Malvarrosa">Playa de la Malvarrosa</option>
              <option value="Las Fallas">Las Fallas</option>
            </select></td>
            <td><input type="text" name="celular" id="celular" maxlength="10" value="" onkeypress="return valideKey(event);"></td>
          </tr>
          <tr>
            <td>Transporte:</td>
            <td>Comentarios:</td>
          </tr>
          <tr>
            <td><select class="transporte" name="transporte" id="transporte">
              <option value="1" disabled selected value>Elige una opcion:</option>
              <option value="No">No</option>
              <option value="Si">Si</option>
            </select></td>
            <td rowspan="3"><textarea value="" name="comentarios" rows="8" cols="21" onkeyup="mayusculas(this)"></textarea></td>
          </tr>
          <tr>
            <td>Camisa:</td>
          </tr>
          <tr>
            <td><select class="camisa" name="camisa" id="camisa" onchange="aparecer()">
              <option value="1" disabled selected value>Elige una opcion:</option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select></td>
          </tr>
          <tr class="prueba">
            <td>Talla:</td>
          </tr>
          <tr class="prueba">
            <td><select class="talla" id="talla" name="talla">
              <option value="1" disabled selected value>Elige una opcion:</option>
              <option value="XS">XS</option>
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="XL">XL</option>
            </select></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="registro" value="Enviar" id="boton"></td>
          </tr>
        </form>
      </table>
    </div>
    <script type="text/javascript" src="js/FinalRegistro.js"></script>
      </section>
