<?php 
require('../../conexion/conexion.php');
$tb     = $tb_eventos;
$id     = $_GET['id_evento'];

if(isset($id)){

$sql    = "DELETE FROM $tb_eventos WHERE id_evento = '$id'";
$result = $conexion->query($sql);
}


require('../php-comun/logs.php');

header("Location: ../../l-eventos.php");

mysqli_close($conexion);