<?php
			require('../../conexion/conexion.php');
			
			$id=$_POST['id'];
			$usuario=$_POST['usuario'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$password_1=$_POST['password_1'];
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$telefono=$_POST['telefono'];
			$perfil=$_POST['perfil'];

            $sha1_pass = sha1($password);


			if (isset($_POST['edit'])) {
			    $sql = "UPDATE tb_usuarios SET usuario ='$usuario', email ='$email', nombre ='$nombre', apellido ='$apellido', telefono ='$telefono', perfil ='$perfil' WHERE id = '$id'";
			    $result = $conexion->query($sql);
			} 



			if (isset($_POST['edit_pass']) && ($password === $password_1))  {
			    $sql = "UPDATE tb_usuarios SET password ='$sha1_pass' WHERE id = '$id'";
			    $result = $conexion->query($sql);
			} 
			



header("Location: ../../perfil-user.php?id=$id");



			mysqli_close($conexion);

			
