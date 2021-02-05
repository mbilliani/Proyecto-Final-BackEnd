<?php

//Conexión con la base de Datos "catequisis"

if ($conexion = mysqli_connect("127.0.0.1", "root", "")){
  mysqli_select_db($conexion, "catequesis");

  //Almacen de Datos

   $nombres = $_POST['nombres'];
   $apellidos = $_POST['apellidos'];
   $correo = $_POST['correo'];
   $password = $_POST['password'];

// Generar consulta a la Base de Datos, para verificar si existen datos ya ingresados

   if ($q= "SELECT correo FROM usuario WHERE correo=$correo") {
     $reg= mysqli_query ($conexion, $q);
     $correo_reg= mysqli_fetch_array($reg);

     if ($correo_reg['correo']==$correo) {
        echo "Estado: Ya está en la base de datos";
     } else {

//Generar un usuario nuevo

   $consulta = "INSERT INTO usuario (id, nombres, apellidos, correo, password) VALUES ('', '$nombres', '$apellidos', '$correo', '$password')";

     if (mysqli_query($conexion, $consulta)) {
     header("location:sesion.php");
   } else {
     header("location:ERROR.html");
   }
 }
}
} else {
  echo "MySQL no reconoce";
}

 ?>
