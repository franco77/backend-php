<?php 
require('../../conexion/conexion.php');
$tb=$tb_usuarios;
$id =$_GET['id'];

if (isset($id)) {

    $sql = "DELETE FROM $tb_usuarios WHERE id = '$id'";
    $result = $conexion->query($sql);



    
}

//Logs
require('../php-comun/logs.php'); 

header("Location: ../../l-usuarios.php");

mysqli_close($conexion);

?>

