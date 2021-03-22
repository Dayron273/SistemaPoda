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
				<a href="pantallaInicial.php"><img src="img/Logo.jpeg" alt="Logo"></a>
			</div>
		</div>
	</header>

	<main class="seccion">
		<div class="contenedor-panel">
			<form action="" method="post" autocomplete="off">
				<h1>Iniciar Sesión</h1>
				<p id="mensaje"></p>
				<input type="text" name="usuario" class="campo user" placeholder="Usuario">
				<input type="password" name="clave" class="campo pass" placeholder="Contraseña">
				<a href="#">¿Olvidaste tu susuario o contraseña?</a><br><br>
				<input type="submit" value="Ingresar" id="boton">
			</form>
		</div>
	</main>
</body>
</html>