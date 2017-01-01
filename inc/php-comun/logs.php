<?php 


$user_log  = $_SESSION['id'];
$ip_log    = $_SERVER['REMOTE_ADDR'];
$nav_log   = $_SERVER['HTTP_USER_AGENT'];
$nivel_log = $_SESSION['tipo_usuario'];
//$tabla_log = mysqli_fetch_field_direct ($result);
$nom_tabla=$tb;
$sql_log   = substr($sql,0,6);
//$nom_tabla=($tabla_log->table);

if(($_POST['login'] =='')){

$logs = "INSERT INTO $tb_logs SET usuario_log='$user_log', tabla_log='$nom_tabla', nivel_log='$nivel_log', ip_log='$ip_log', navegador_log='$nav_log', consulta_log='$sql_log'";
$conexion->query($logs);
}

else if(isset($_POST['login'])){


$logs = "INSERT INTO $tb_logs SET usuario_log='$user_log', tabla_log='$nom_tabla', nivel_log='$nivel_log', ip_log='$ip_log', navegador_log='$nav_log', consulta_log='$login_log'";
$conexion->query($logs);

}





 ?>