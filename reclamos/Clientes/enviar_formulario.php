<?php

include '../config.php';

//Tomas los datos del formulario del clinte en index.html

$agente = $_POST["agente"];
$localidad = $_POST["localidad"];
$sector = $_POST["sector"];
$pedido = $_POST["pedido"];
$detalles = $_POST["detalles"];

//Toma la Fecha y hora actual

date_default_timezone_set('America/Argentina/Buenos_Aires');

$fecha_reclamo = date('Y-m-d H:i:s', time());


//Sube todos los datos a la tabla reclamos 
mysqli_query($conexion, "INSERT INTO reclamos(agente, localidad, sector, pedido, detalles, fecha_reclamo, estado) VALUES ('$agente', '$localidad','$sector','$pedido','$detalles','$fecha_reclamo','En espera')");

header("Location: cartel.html");

?>