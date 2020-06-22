<?php
header('Content-Type: application/json');
include 'denticonfig.php';
$aux=1;
$resultadoArray = array();
$pacienteQuery = "SELECT * FROM paciente WHERE id_paciente>'$aux'";
$pacienteResultado = mysqli_query($conn, $pacienteQuery);
foreach($pacienteResultado as $row){
 $resultadoArray[] = $row;
}
echo json_encode($resultadoArray);
?>