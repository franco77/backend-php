<?php
require_once('../../conexion/conexion.php');

$time      = 5 ;
$date      = time() ;
$ip        = $_SERVER['REMOTE_ADDR'];
$usuario   = $_SESSION['email'];
$limite    = $date-$time*60 ;



		$delete    = "DELETE FROM $tb_user_online WHERE fecha_online < '$limite'";
		$conexion->query($delete);

				$seleciona = "SELECT * FROM $tb_user_online WHERE ip_online ='$ip'";
				$resp      = $conexion->query($seleciona);
				$rows = $resp->num_rows;

					if($rows != 0) {
					$update = "UPDATE $tb_user_online SET fecha_online ='$date', nombre_online ='$usuario' where ip ='$ip'";
					$conexion->query($update);
					}

						else 
						{
						$insertar = "INSERT INTO $tb_user_online (fecha_online, ip_online, nombre_online) VALUES ('$date', '$ip', '$usuario')";
						$conexion->query($insertar);
						}


		$consulata = "SELECT * FROM $tb_user_online";
		$contenido = $conexion->query($consulata);

        $usuarios = $contenido->num_rows;
        if ($usuarios > 0) { 
        foreach ($contenido as $fila) {

        	echo $fila['ip_online'].'<br>';
        	echo $fila['nombre_online'].'<br>';
        }
    }

         
?>