<?php
session_start();
$host_db = "localhost";
$user_db = "root";
$pass_db = "15925621";
$db_name = "db_franco";

		//Variables De Las Tablas
		$tb_usuarios    = "tb_usuarios";
		$tb_eventos     = "tb_eventos";
		$tb_nivel       = "tb_nivel";
		$tb_logs        = "tb_logs";
		$tb_user_online = "tb_user_online";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

	if ($conexion->connect_error) {
 		die("La conexion falló: " . $conexion->connect_error);
	}




?>

