<?php
header('Content-Type: application/json');
include 'dbconfig.php';

$menu = 1;
$resultadoArray = array();

if($menu == 1){
  $mascotaQuery = "SELECT nombre FROM paciente WHERE id_upaciente > '$aux'";
  $mascotaResultado = mysqli_query($conn, $mascotaQuery);
  foreach($mascotaResultado as $row){
    $resultadoArray[] = $row;
  }
}


echo json_encode($resultadoArray);
?>