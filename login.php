<?php
require('conexion/conexion.php');
session_start();


if(isset($_SESSION["username"])){
		header("Location: panel.php");
	}


   
   if(!empty($_POST))
	{


				$email = $_POST['email'];
				$password = $_POST['password'];
				$sha1_pass = sha1($password);
				 
					$sql = "SELECT * FROM $tb_usuarios WHERE email = '$email' AND password = '$sha1_pass' AND estado = 'Activo' ";
					$result = $conexion->query($sql);
					$rows = $result->num_rows;


				if ($rows > 0) { 
						    $row = $result->fetch_assoc();    

						    $_SESSION['loggedin'] = true;
						    $_SESSION['id'] = $row['id'];
						    $_SESSION['email'] = $email;
                            $_SESSION['username'] = $row['usuario'];
   						    $_SESSION['tipo_usuario'] = $row['id_tipo'];
						    $_SESSION['start'] = time();
						    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

						    header("Location: panel.php");

						    
				               } 
				       else 
				    { 

				   $error ="Algo Salio Mal Volver a Intentarlo";
				    }


    }    

   mysqli_close($conexion); 
 ?>







<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="libs/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="libs/custon/cx_stylo.css">
</head>
  <body>
    

<div class="container bootstrap snippet">
    <div class="row login-page"> 
        <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4"> 
    		<img src="http://ani-theme.strapui.com/images/flat-avatar.png" class="user-avatar"> 
    		<h1>Citrux</h1> 

    		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> 
    			<div class="form-content"> 
    				<div class="form-group"> 
    					<input type="email" name="email" class="form-control input-underline input-lg" placeholder="Email"> 
    				</div> 
    				<div class="form-group"> 
    					<input type="password" name="password" class="form-control input-underline input-lg" placeholder="Password"> 
    				</div> 
    			</div> 
    			 &nbsp; 
    			<input name="login" type="submit" value="login" class="btn btn-info btn-lg">
    		</form>
    		<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div> 
    	</div> 
    </div>
</div>



    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="libs/vendor/bootstrap/js/bootstrap.js"></script>
  </body>
</html>





