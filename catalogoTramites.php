<?php 
include 'Funciones/Funciones.php';
require_once 'Funciones/conexion.php';
obtenerDatos($_SESSION['idUsuario'],$conection,"Tramitante");
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
					<a href="index.php"><img src="img/Logo.png" alt="Logo"></a>
					<div>
                    <h1>Tus trámites</h1>
                </div>
                <div class="log">
                    <a href="Funciones/cerrarSesion.php">Cerrar Sesión</a>
                </div>
				</div>
			</div>
		</header>

		<main class="seccion contenedor">
			<div class="seccionespecial">
				<?php obtenerTramites($conection, $_SESSION['idTramitante']);?>
			</div>
		</main>
		<footer class="footer-site seccion"></footer>
	</body>
</html>	