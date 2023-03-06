<?php
$conexion= mysqli_connect("localhost", "root", "", "r_user");

if(isset($_POST['reg'])){

    if(strlen($_POST['nombre']) >=1 && strlen($_POST['nit'])){

    $nombre = trim($_POST['nombre']);
    $nit = trim($_POST['nit']);

    $consulta= "INSERT INTO restaurant ('nombre', 'nit')
    VALUES ('$nombre', '$nit')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../views/restaurant.php');
  }
}

?>