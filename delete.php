<?php
  // 1) Conexion
  if ($conexion = mysqli_connect("127.0.0.1", "root", "")){
    mysqli_select_db($conexion, "catequesis");

    // 2) Almacenamos los datos del envío POST
    $correo = $_POST['correo'];

    // 3) Preparar la orden SQL
  $consulta = "DELETE FROM usuario WHERE correo='{$_POST["correo"]}'";

// 4) Ejecutar la orden y ingresamos datos
 if (mysqli_query($conexion, $consulta) ){
    header("location: index.html");
  } else {
  echo "ERROR";
  }
 } else {
  header("location: ERROR.html");
 }

  ?>
