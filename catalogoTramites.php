<?php 
include 'Funciones/Funciones.php';
echo $_SESSION['idUsuario']; 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Buscar Expediente</title>
		<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
	    <link rel="stylesheet" href="css/normalize.css">
	    <link rel="stylesheet" href="css/catalogoTramites.css">
	</head>
	<body>
		<header class="site-header">
			<div class="contenedor">
				<div class="barra">
					<a href="login.php"><img src="img/Logo.png" alt="Logo"></a>
					<a href="Funciones/cerrarSesion.php">Cerrar Sesión</a>
				</div>
			</div>
		</header>

		<main class="seccion contenedor">
			<div class="buscador">
				<form action="buscarExpediente.php" id="busqueda">
					<p>
						<input type="search" name="buscarpaciente" placeholder="Buscar Trámite" class="text">
						<input type="submit" name="buscar" value="Buscar" class="btn">
					</p>
				</form>
			</div>

			<div class="seccionespecial">
			</div>
		</main>
		<footer class="footer-site seccion"></footer>
	</body>
</html>	