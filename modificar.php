<?php
include 'edit.php';

$reg= buscar_correo();
$nombres=$reg["nombres"];
$apellidos=$reg["apellidos"];
$correo=$reg["correo"];
$password=$reg["password"];

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Mongoose
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130920

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>


<body>
<div id="header-wrapper">
<div id="header" class="container">
	<div id="logo">
		<h1><a href="index.html"> <img src="images/logo.png" width="380" height="190" class="ccr" ></a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="inicioa.html" accesskey="1" title="">Inicio</a></li>
			<li><a href="bibliotecaa.html" accesskey="2" title="">Biblioteca</a></li>
			<li><a href="actividadesa.html" accesskey="3" title="">Actividades</a></li>
			<li><a href="historiaa.html" accesskey="4" title="">Nuestra Historia</a></li>
			<li><a href="logout.php" accesskey="5" title="">Cerrar Sesión</a></li>
		</ul>
	</div>
</div></div>
<div id="page" class="container">
	<div id="content">
		<div class="title">
			<h2>Modifica tus datos de la página</h2>
      <br>
			<span class="byline">Sentite libre y seguro/a de cambiar cualquiera de los datos que ingresaste a la página, eso si ¡recordá anotarte los datos que cambias!</span> </div>

			<!-- Formulario -->

			<h1>Modifica Tus Datos</h1>
<br>
<br>
	            <div id="cuerpo">

	                <form id="form-login" action=" " method="post">
<br>
	                    <h3><label>Nombres:</label></h3>
	                       <p><input type="text" name="nombres" placeholder="Modifica tus nombres" value="<?php echo "$nombres"; ?>"></p>
<br>
	                    <h3><label>Apellidos:</label></h3>
	                        <p><input type="text" name="apellidos" placeholder="Modifica tus apellidos" value="<?php echo "$apellidos"; ?>"></p>
<br>
	                    <h3><label>Contraseña:</label></h3>
	                        <p><input type="password" name="password" placeholder="Modifica tu contraseña" value="<?php echo "$password"; ?>"></p>
<br>
	                    <p id="bot"><input type="submit" value="Guardar Cambios" class="boton"/></p>
	                </form>
	            </div>

  <!-- Fin del Formulario -->
<!-- Código PHP -->
<?php
if(array_key_exists('Guardar Cambios', $_POST)){
   guardar_cambios();
}
 ?>

 <!--Fin códgio PHP -->

 <div id="onecolumn">
   <div class="title">
     <h1>Si te equivocaste y entraste por error a esta sección <br> ¡NO TE PREOCUPES!</h1>
   </div>
   <p>Volve para atrás haciendo <a href="inicioa.html" target="_blank">click aquí</a></p>
 </div>
</div>
<div id="sidebar">
 <ul class="style1">
   <li class="first">
     <href="sesion.php">
     <div align="center"> <img src="images/edit.png" width="300" height="300"> </div>
   </li>
 </ul>
</div>
</div>
<div id="copyright">
<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>

	<!-- Redes Sociales -->

	<div class="sticky-container">
	    <ul class="sticky">
				<li>
						<img src="images/facebook.png" width="32" height="32">
						<p><a href="https://www.facebook.com/capilla.sannicolas" target="_blank">Hacete Fan<br>Facebook</a></p>
				</li>
				<li>
						<img src="images/instagram.png" width="32" height="32">
						<p><a href="https://www.instagram.com/capillantrasradelrosario" target="_blank">Seguinos en<br>Instagram</a></p>
				</li>

				<li>
						<img src="images/gmail.png" width="32" height="32">
						<p><a href=" https://mail.google.com/mail/?view=cm&fs=1&to=capillaMRSN@gmail.com&su=Asunto&body=cuerpo%20mensaje" target="_blank">Contactanos<br>Gmail</a></p>
				</li>

	    </ul>
	</div>

 </body>
 </html>
