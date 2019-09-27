
<!-- 
	si la session existe mostrar la paguina 
	si la session no existe redireccionar a login

	si la seesion existe redireccionar a index 
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio de Sesión - ActiveBox</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/login.css">
</head>
<body class="text-center">
	<form class="form-signin">
		<!--<img class="mb-4" src="../img/logotipo.png">-->
		<h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
		<label for="inputEmail" name="Usuario" class="sr-only">Correo Electrónico</label>
		<input type="email" name="usuario" class="form-control" placeholder="Email address" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Password" required>
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" name="recordar" value="remember-me"> Recordar
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" id="btn-login" type="button">Iniciar</button>
		<p class="mt-5 mb-3 text-muted">TAREA CHINGONA</p>
	</form>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="js/login.js"></script>
	</body>
	</html>