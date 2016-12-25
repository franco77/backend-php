<?php 
require('../../conexion/conexion.php');

$id=$_GET['id_evento'];

if(isset($id)){

$sql = "DELETE FROM $tb_eventos WHERE id_evento = '$id'";
$conexion->query($sql);
}

header("Location: ../../l-eventos.php");

mysqli_close($conexion);