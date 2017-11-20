<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Vender Stock</title>
	<?php
		require_once 'libs.php';
	?>
	<!--CSS cliente-nuevo.php-->
	<link rel="stylesheet" href="css/venta-stock.css">
</head>

<body>
	<?php
		require_once 'menu-superior.php';
		require_once 'dashboard.php';
	?>
		<div class="container">
			<div class="row">
				<div class="col-12" id="tituloVentana">
					<div class="row">
						<div class="col-2" id="iconoVentana">
							<img class="align-middle" src="images/iconos/vender.png" alt="nuevo">
						</div>
						<div class="col-10" id="nombreVentana">
							<p>Vender Stock</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="main">
			<div class="row" id="f">
				<div class="col-12">
					<form action="" method="post" id="formulario">
                  <div class="form-group">
                     <label for="cliente">Cliente:</label>
                     <select class="form-control custom-select" name="cliente" id="cliente">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="fecha_venta">Fecha de venta:</label>
                     <input type="date" class="form-control" name="fecha_venta" id="fecha_venta" value="<?php echo date("Y-m-d"); ?>">
                  </div>
                  <div class="form-group">
                     <table class="table" id="tablaLista">
                        <thead>
                           <th>Artículo</th>
                           <th>Descripción</th>
                           <th>Ubicación</th>
                           <th>Cant. venta</th>
                           <th>Precio</th>
                           <th>Cant. stock</th>
                        </thead>
                        <tbody>
                        </tbody>
                     </table>
                  </div>
                  <div class="form-grup">
                     <input type="button" name="anadir" id="anadir" class="btn btn-primary" value="Añadir">
                     <input type="button" name="quitar" id="quitar" class="btn btn-secondary" value="Quitar">   
                  </div>
                  <div class="form-group">
                     <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                           <span class="custom-control-indicator"></span>
                           <span class="custom-control-description">Artículo dañado/perdido</span>
                     </label>
                  </div>
                  <div class="form-group">
                     <label for="nota">Nota:</label>
                     <textarea class="form-control" name="nota" id="nota" rows="3"></textarea>
                  </div>
                  <div class="form-group" id="botones">
							<input class="btn btn-success" type="submit" value="Añadir artículo">
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
      <!--Data Table:-->
		<script src="js/dt-tablaLista.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>