<?php
  include 'denticonfig.php';
  
  $usua = filter_input(INPUT_POST, "usuario");
  $password = filter_input(INPUT_POST, "contra");
  $query = "SELECT * FROM usario WHERE nombre_usua = '". $usua."'
            AND contraseña = '". $password ."'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>