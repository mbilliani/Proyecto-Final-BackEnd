<?php
// Conexión con la Base de Datos "catequesis"
if ($conexion = mysqli_connect("127.0.0.1", "root", "")) {
  mysqli_select_db($conexion, "catequesis");

// Almacenar datos

$correo = $_POST['correo'];
$password = $_POST['password'];

//consulta a la base de Datos

    if ($q = "SELECT * FROM usuario WHERE correo=$correo AND password=$password"){
    $reg = mysqli_query($conexion, $q);
    $correo_reg = mysqli_fetch_array($reg);
//recorrer para que tenga diferentes roles
//  foreach ($correo_reg as $x) {
  //  $rol = $x['rol'];
//  }

  //Validar datos de la base de Datos y los ingresados. E inicio de Sesión.

        if (settype($correo_reg['correo'], 'string')==$correo && settype($correo_reg['password'], 'string')==$password) {

            session_start();
            $_SESSION["correo"] = $correo;
            //$_SESSION["rol"] = $rol;
           header("location: inicioa.html");
        }else {
         header("location: ERROR.html");
    }
 }
}
?>
