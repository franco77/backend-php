<?php 
require('../../conexion/conexion.php');
	$logout    ='salir';
	$nom_tabla = 'tb_usuarios';
	$user_log  = $_SESSION['id'];
	$ip_log    = $_SERVER['REMOTE_ADDR'];
	$nav_log   = $_SERVER['HTTP_USER_AGENT'];
	$nivel_log = $_SESSION['tipo_usuario'];
	
	$logs      = "INSERT INTO $tb_logs SET usuario_log='$user_log', tabla_log='$nom_tabla', nivel_log='$nivel_log', ip_log='$ip_log', navegador_log='$nav_log', consulta_log='$logout'";
	$conexion->query($logs);


    unset ($SESSION['username']);
    session_destroy();
	header('location: ../../login.php'); 
?>