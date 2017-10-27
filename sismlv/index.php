<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<!--CSS Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<!--iconos-->
	<link rel="stylesheet" href="libs/iconos/css/font-awesome.css">
	<!--Google fonts: raleway-->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!--CSS login-->
	<link rel="stylesheet" href="css/login-estilos.css">
</head>
<body>
	<div id="formulario">
		<h1 id="titulo">SISMLV</h1>
		<form action="menu.php">
			<label for="usuario">Usuario:</label>
			<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
				</div>
				<input class="form-control" type="text" name="usuario" id="usuario" placeholder="usuario">
			</div>
			<label for="pass">Password:</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-key" aria-hidden="true"></i>
				</div>
				<input class="form-control" type="password" name="pass" id="pass">
			</div>
			<br>
			<input class="btn" type="submit" value="Entrar" id="entrar">
		</form>
	</div>


	<!-- Scripts -->
	<!--jquery-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<!--pooper-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<!--bootstrap-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
