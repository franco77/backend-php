<?php
require('conexion/conexion.php');

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

		} else {
		   
		       header("location: error.php");

		exit;
		}

		      $now = time();

				if($now > $_SESSION['expire']) {
				session_destroy();

		        header("location: login.php");

		exit;
		}
?>



		<?php
		$nivel_admin                                                       =1;
		$nivel_user                                                        =2;
		$restrict                                                          ='error.php';
		if (!((isset($_SESSION['username'])) && ($_SESSION['tipo_usuario'] == $nivel_admin))) {
		
		$referrer                                                          = $_SERVER['PHP_SELF'];
		urlencode($referrer);
		header("Location: ". $restrict);
		
		}
		
		
		?>