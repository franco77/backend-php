	<?php 
	
	require_once('../../conexion/conexion.php');
	
	$usuario  = $_POST['usuario'];
	$email    = $_POST['email'];
	$password = $_POST['password'];
	$nombre   = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$nivel    = $_POST['nivel'];
	$perfil   = $_POST['perfil'];
	$guardar  = $_POST['guardar_usuario'];

	$sha1_pass = sha1($password);




    $consulta      = "SELECT * FROM tb_usuarios WHERE email = '$email' ";
	$result=$conexion->query($consulta);
	$rows = $result->num_rows;

    



	
	if($rows == 0){
	
	$sql = "INSERT INTO $tb_usuarios SET usuario='$usuario', email='$email', password='$sha1_pass', nombre='$nombre', apellido='$apellido', telefono='$telefono', perfil='$pefil', id_tipo='$nivel'";
	$conexion->query($sql);

	header("location: ../../l-usuarios.php");
	
	}

	else
	{

    $error=1;
    header("location: ../../a-usuarios.php?error=$error");
	mysqli_close($conexion);
	}
	?>