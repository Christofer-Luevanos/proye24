<?php
  include 'denticonfig.php';
  $name = filter_input(INPUT_POST, "nombre");
  $lastname = filter_input(INPUT_POST, "apellido");
  $doctor = filter_input(INPUT_POST, "doctor");
  $date = filter_input(INPUT_POST, "fecha");
  $hour = filter_input(INPUT_POST, "hora");

  $pacientQuery = "SELECT ID_PAC FROM paciente WHERE NOMBRE_P='".$name."' AND APELLIDO_P='".$lastname."'";
  $pacientResult = mysqli_query($conn, $pacientQuery);
  $pacientRow = mysqli_fetch_assoc($pacientResult);

$query = "INSERT INTO cita(ID_PAC, ID_DOC, FECHA_CITA, HORA_CITA)
  VALUES ('".$pacientRow['ID_PAC']."','".$doctor."','".$date."','".$hour."')";
  echo $query;
  $result = mysqli_query($conn, $query);
  $lastId = mysqli_insert_id($conn);

  $query2 = "SELECT * FROM cita WHERE ID_CITA = '".$lastId."'";
  $result2 = mysqli_query($conn, $query2);
  $row = mysqli_fetch_array($result2);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>