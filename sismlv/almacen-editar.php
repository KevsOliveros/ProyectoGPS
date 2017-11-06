<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nuevo Almacén</title>
	<?php
		require_once 'libs.php';
	?>
	<!--CSS almacen-nuevo.php-->
	<link rel="stylesheet" href="css/almacen-nuevo.css">
</head>

<body>
	<?php
		require_once 'menu-superior.php';
		require_once 'dashboard.php';
        $nom_alm = $_GET['nom_alm'];
        $desc_alm = $_GET['desc_alm'];
	?>
		<div class="container">
			<div class="row">
				<div class="col-12" id="tituloVentana">
					<div class="row">
						<div class="col-2" id="iconoVentana">
							<img class="align-middle" src="images/iconos/nuevo.png" alt="nuevo">
						</div>
						<div class="col-10" id="nombreVentana">
							<p>Editar Almacen</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="main">
			<div class="row" id="f">
				<div class="col-12">
					<form action="editaralmacen.php?nom_alm=<?php echo $nom_alm ?>" method="post" id="formulario">
						<div class="form-group">
							<label for="nombre">Nombre:</label>
							<input class="form-control" type="text" placeholder="Introduzca un nombre" name="nombre_almacen" value="<?php echo $nom_alm?>">
						</div>
						<div class="form-group">
							<label for="nombre">Descripción:</label>
							<textarea  class="form-control" id="exampleFormControlTextarea1" rows="3" name="direccion_almacen"><?php echo $desc_alm ?></textarea>
						</div>
						<div class="form-group" id="botones">
							<input class="btn btn-success" type="submit" value="Aceptar">
							<input class="btn btn-danger" type="submit" value="Cancelar">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--Scripts-->
		<?php
		require_once 'scripts.php';
	?>
</body>

</html>
