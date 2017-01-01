<?php
require('../../conexion/conexion.php');

	if(isset($_POST['email'])){
	$email      = $_POST['email'];
	$email_user = strtolower($email);
	
	$sql      = "SELECT * FROM tb_usuarios WHERE email = '$email_user' ";
	$result=$conexion->query($sql);
	$rows = $result->num_rows;


   
   if($rows > 0){
        echo '<div class="alert alert-danger" role="alert">Este Email Ya Esta En Uso Por Otro Usuario</div>';
   }
    else{
        echo '<div class="alert alert-info" role="alert">Usuario Disponible</div>';
    }
}



?>