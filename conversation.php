<?php

  $bd = 'chat';
  $server = 'localhost';
  $user = 'root';
  $password = 'root';

  $conexion = @mysqli_connect($server, $user, $password, $bd);
  if (!$conexion) {
    die('error, no se pudo conectar: '. mysqli_connect_error());
  }

  $sql = "SELECT usuario, mensaje FROM conversation order by idConversation asc;";
  $result = mysqli_query($conexion, $sql);

  while ($data = mysqli_fetch_assoc($result)) {
    // echo "<p><b>".$data["usuario"]."</b> dice: ".$data["mensaje"]."</p>";
    echo "<p><b>".$data["usuario"]."</b> dice: ".$data["mensaje"]."</p>";
  }


 ?>
