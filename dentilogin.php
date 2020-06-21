<?php
  include 'denticonfig.php';
  
  $email = filter_input(INPUT_POST, "correo");
  $password = filter_input(INPUT_POST, "contra");
  $password = md5($password);
  $query = "SELECT * FROM doctor WHERE CORREO = '". $email."'
            AND CONTRASENA = '". $password ."'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>