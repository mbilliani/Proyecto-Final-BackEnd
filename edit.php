<?php
return;

function buscar_correo(){
  // 1) Conexion
  if ($conexion = mysqli_connect("127.0.0.1", "root", "")){
    mysqli_select_db($conexion, "catequesis");
    // 2) Almacenamos los datos del envío POST
    $correo = $_POST['correo'];

    if ($q= "SELECT * FROM usuario WHERE correo=$correo"){
      $reg=mysqli_query ($conexion, $q);
      $correo_reg=mysqli_fetch_array($reg);

      if ($correo_reg['correo']==$correo) {
        return $correo_reg;
        }
      } else {
      echo "<p> MySQL no conoce ese usuario y password</p>";
     }
  } else {
    echo "ERROR!";
  }
}

function guardar_cambios(){
  // 1) Conexion

  if ($conexion = mysqli_connect("127.0.0.1", "root", "")) {
    mysqli_select_db($conexion, "catequesis");

    // 2) Almacenamos los datos del envío POST

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];

    // 3) Preparar la orden SQL

    $consulta = "UPDATE usuario SET nombres='$nombres', apellidos='$apellidos', password='$password' WHERE correo=$correo";

    // 4) Ejecutar la orden y ingresamos datos

    mysqli_query($conexion, $consulta);
    header('Location: modificar1.html');
    return;
  } else {
    echo "ERROR!";
  }
}

?>
