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
			<li><a href="index.html" accesskey="1" title="">Inicio</a></li>
			<li><a href="biblioteca.html" accesskey="2" title="">Biblioteca</a></li>
			<li><a href="actividades.html" accesskey="3" title="">Actividades</a></li>
			<li><a href="historia.html" accesskey="4" title="">Nuestra Historia</a></li>
			<li class="current_page_item"><a href="sesion.php" accesskey="5" title="">Inicia Sesión</a></li>
		</ul>
	</div>
</div></div>

<!-- Cuerpo -->

<div id="page" class="container">
	<div id="content">
		<div class="title">
			<h2>Inicia Sesión</h2>
			<span class="byline">Inicia Sesión con tu perfil en la página</span> </div>

			<!-- Formulario -->

			<h1>Ingresa Tus Datos</h1>
			<br>
			<br>
			<form name="login" method="post" action="login.php">
			     <table width="200" border="0">
			       <tr>
			         <th scope="row"><h2>Correo</h2></th>
			         <td><span class="cnt">
			           <input name="correo" placeholder="Correo Electrónico" type="text" class="Input" value="" size="20"/>
			         </span></td>
			       </tr>
			       <tr>
							 <br>
			         <th height="33" scope="row"><h2>Contraseña</h2></th>
			         <td><span class="cnt">
			           <input name="password" placeholder="Contraseña" type="password" class="Input" value="" size="20"/>
			         </span></td>
			         <td><span class="cnt">
			           <input value="Inicia Sesión" type="submit" class="boton"/>
			         </span></td>
			       </tr>
			     </table>
			</form>

		<div id="onecolumn">
			<div class="title">
				<h1>Soy nuevo en la página</h1>
			</div>
			<p>Si sos nuevo en la página podes crear tu perfil y registrarte en la página. <br>
			 No pierdas tiempo y <a href="usuario.html" target="_blank"> ¡Registrate!</a></p>
		</div>
	</div>
  <div id="sidebar">
		<ul class="style1">
			<li class="first">
				<href="sesion.php">
        <div align="center"> <img src="images/pluma.png"> </div>
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

	<?php

	session_start();
	if (empty($_SESSION["rol"])) {
	 exit();
	} elseif ($_SESSION ["rol"]=="profe") {
		header("location: iniciop.html");
	}
	elseif ($_SESSION ["rol"]=="alum") {
		header("location: inicioa.html");
	}

	 ?>

</body>
</html>
