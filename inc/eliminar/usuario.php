<?php 
require('../../conexion/conexion.php');
$id =$_GET['id'];

if (isset($id)) {

    $sql = "DELETE FROM $tb_usuarios WHERE id = '$id'";
    $conexion->query($sql);
    
}

header("Location: ../../l-usuarios.php");
mysqli_close($conexion);

?>