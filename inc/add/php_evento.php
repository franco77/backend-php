<?php 

require_once('../../conexion/conexion.php');

$titulo       = $_POST['titulo'];
$nota         = $_POST['nota'];
$fecha_d      = $_POST['fecha_d'];
$fecha_h      = $_POST['fecha_h'];
$prioridad    = $_POST['prioridad'];
$autor        = $_POST['autor'];
$guardar_nota = $_POST['guardar_nota'];

if(isset($guardar_nota) && isset($titulo) && isset($fecha_d)){

$sql = "INSERT INTO $tb_eventos SET titulo_evento='$titulo', nota_evento='$nota', desde_evento='$fecha_d', hasta_evento='$fecha_h', autor_evento='$autor', prioridad_evento='$prioridad'";
    $conexion->query($sql);

}
header("location: ../../eventos.php");






?>
