<?php
  include 'denticonfig.php';
  $name = filter_input(INPUT_POST, "nombre");
  $lastname = filter_input(INPUT_POST, "apellido");
  $birthday = filter_input(INPUT_POST, "nacimiento");
  $gender = filter_input(INPUT_POST, "sexo");
  $phone = filter_input(INPUT_POST, "telefono");
  $address = filter_input(INPUT_POST, "direccion");

  $query = "INSERT INTO paciente(NOMBRE_P, APELLIDO_P, SEXO, TELEFONO, DOMICILIO, FECHA_NAC)
  VALUES ('".$name."','".$lastname."','".$gender."','".$phone."','".$address."','".$birthday."')";
  $result = mysqli_query($conn, $query);
  $lastId = mysqli_insert_id($conn);

  $query2 = "SELECT * FROM paciente WHERE ID_PAC = '".$lastId."'";
  $result2 = mysqli_query($conn, $query2);
  $row = mysqli_fetch_array($result2);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>