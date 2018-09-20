<?php
  $bd = 'chat';
  $server = 'localhost';
  $user = 'root';
  $password = 'root';

  $conexion = @mysqli_connect($server, $user, $password, $bd);
  if (!$conexion) die('error, no se pudo conectar: '. mysqli_connect_error());

  if (isset($_POST['user']) && isset($_POST['message'])) {
    $user = $_POST['user'];
    $message = $_POST['message'];

    if ($message !== '') {
      $sql = "INSERT INTO conversation (usuario, mensaje) VALUES ('$user', '$message')";
      $result = mysqli_query($conexion, $sql);
    }

    if ($result) {
      echo "mensaje registrado";
    } else{
      echo "no se registró el mensaje";
    }

  }




 ?>
