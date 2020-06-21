<?php
  include 'denticonfig.php';
  $name = filter_input(INPUT_POST, "nombre1");
  $lastname = filter_input(INPUT_POST, "apellido1");
  $birthday = filter_input(INPUT_POST, "nacimiento1");
  $gender = filter_input(INPUT_POST, "sexo1");
  $phone = filter_input(INPUT_POST, "telefono1");
  $address = filter_input(INPUT_POST, "direccion1");
  $query = "UPDATE PACIENTE SET NOMBRE_P='".$name."',APELLIDO_P='".$lastname."',SEXO='".$gender."',TELEFONO='".$phone."',DOMICILIO='".$address."',FECHA_NAC='".$birthday."'WHERE NOMBRE_P='".$name."'";
  $result = mysqli_query($conn, $query);
  $lastId = mysqli_insert_id($conn);

  $query3 = "SELECT * FROM paciente WHERE ID_PAC = '".$lastId."'";
  $result3 = mysqli_query($conn, $query3);
  $row = mysqli_fetch_array($result3);
  $row = mysqli_fetch_array($result3);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>