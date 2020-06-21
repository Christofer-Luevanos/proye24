<?php
  $host = "us-cdbr-iron-east-05.cleardb.net";
  $user = "b0bf35b39e0352";
  $password = "5bc3f717";
  $db = "heroku_68c12e7c7b895b6";

  $conn = new mysqli($host, $user, $password, $db);
  if($conn->connect_error){
    die("Error de conexion: " .$conn->connection_error);
  }
?>
