<?php   
   session_start();
    if(isset($_SESSION['token_Id'])) 
    echo "<script>document.location.href='menu.php';</script>";
?>
<!doctype html>
<html lang="es">

<head>
   <title>Menu Principal</title>
	<?php require_once 'meta_tags.php';?>
   <?php require_once 'libs_css.php';?>
   <?php require_once 'font_awesome.php';?>
   <?php require_once 'google_fonts.php';?>
   <?php require_once 'favicon.php';?>
   <link rel="stylesheet" href="libs/iconos/style.css">
	<link rel="stylesheet" href="css/login-estilos.css">
</head>

<body>
   <div class="container-fluid" id="principal">
		<br>
		<div class="row">
         <div class="col-12 col-lg-6 offset-lg-3" id="contenedor-principal">
				<div class="row">
					<div class="col-12">
						<h1 class="text-center" id="titulo">SISMLV</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<i class="fa fa-user-md" id="logo-usuario" aria-hidden="true"></i>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-12">
						<form action="iniciar.php" method="post" class="form">
							<div class="form-group">
								<div class="col-12">
									<label for="usuario" class="etiqueta">Usuario:</label>
								</div>
								<div class="col-12">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
										</div>
										<input class="form-control" type="text" name="usuario" placeholder="usuario">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-12">
									<label for="pass" class="etiqueta">Password:</label>
								</div>
								<div class="col-12">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-key" aria-hidden="true"></i>
										</div>
										<input class="form-control" type="password" name="pass" id="pass">
									</div>
								</div>
							</div>
							<div class="col-12">
								<input class="btn btn-entrar col-12" type="submit" value="Entrar" id="entrar">
							</div>
						</form>
					</div>
				</div>
			</div>
      </div>
   </div>
   <?php require_once 'scripts.php';?>
</body>
</html>