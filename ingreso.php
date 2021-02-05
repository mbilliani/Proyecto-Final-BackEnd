<?php

if ($conexion = mysqli_connect("127.0.0.1", "root", "")){

   $nombres = $_POST['nombres'];
   $apellidos = $_POST['apellidos'];
   $correo = $_POST['correo'];
   $password = $_POST['password'];

   if ($q= "SELECT correo FROM usuario WHERE correo=$correo") {
     mysqli_select_db($conexion, "catequesis");
     $dato=mysqli_query($conexion; $q);

     if (mysqli_num_rows($datos) > 0) {
              echo "Ese correo ya se encuentra registrado";
     } 
   }

   $consulta = "INSERT INTO usuario (id, nombres, apellidos, correo, password) VALUES ('', '$nombres', '$apellidos', '$correo', '$password')";

   mysqli_select_db($conexion, "catequesis");
   if (mysqli_query($conexion, $consulta)) {
     echo "¡Bienvenido/a!";
     header("location:sesion_r.html");
   } else {
      echo "No se agregó";
   }

} else {
  echo "MySQL no reconoce";
}
 ?>
