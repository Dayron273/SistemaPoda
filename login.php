<?php 
include 'Funciones/Funciones.php';
$alert = '';
if(!empty($_SESSION['active'])){
	header('location: SolicitudPub.html');
}else{
	if(!empty($_POST)){
		if(empty($_POST['usuario']) || empty($_POST['clave'])){
			$alert = "Uno de los campos está vacío";
		}else{
			require_once "Funciones/conexion.php";
			$user = $_POST['usuario'];
			$pass = $_POST['clave'];
			$query = mysqli_query($conection,"SELECT *FROM usuario WHERE email = '$user' AND clave = '$pass'");
			$result = mysqli_num_rows($query);
			if($result > 0){
				$data = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idUsuario'] = $data['idUsuario'];
				$_SESSION['rol'] = $data['tipoUsuario'];
				if($_SESSION['rol'] == 0){			//Tramitante
					header('location: catalogoTramites.php');	
				}elseif($_SESSION['rol'] == 1){		//Servidor Publico
					header('location: catalogoTramitesServidor.php');
				}	
			}else{
				$alert = 'El usuario o la clave son incorrectos';
				session_destroy();
			}
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
	 <link rel="stylesheet" href="css/normalize.css">
	 <link rel="stylesheet" href="css/login.css">
</head>
<body>

	<header class="site-header">
		<div class="contenedor">
			<div class="barra">
				<div>
					<a href="index.html"><img src="img/Logo.png" alt="Logo"></a>
				</div>
				<div class="titulo">
					<h1>Sistema de llave CDMX</h1>
				</div>
			</div>
		</div>
	</header>

	<main class="seccion">
		<div class="contenedor-panel">
			<form action="" method="post" autocomplete="off">
				<h1>Iniciar Sesión</h1>
				<p id="mensaje"><?php echo $alert ?></p>
				<input type="text" name="usuario" class="campo user" placeholder="Correo">
				<input type="password" name="clave" class="campo pass" placeholder="Contraseña">
				<a href="catalogoTramites.php">¿Olvidaste tu usuario o contraseña?</a><br><br>
				<input type="submit" value="Ingresar" id="boton"> </br></br>
				<p id="registro">¿Aún no tienes una cuenta? <a href="">Regístrate</a></p>
			</form>
		</div>
	</main>
</body>
</html>