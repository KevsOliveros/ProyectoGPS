<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nuevo Artículo</title>
	<?php
		require_once 'libs.php';
	?>
	<!--CSS cliente-nuevo.php-->
	<link rel="stylesheet" href="css/cliente-nuevo.css">
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
							<img class="align-middle" src="images/iconos/nuevo.png" alt="nuevo">
						</div>
						<div class="col-10" id="nombreVentana">
							<p>Nuevo Artículo</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="main">
			<div class="row" id="f">
				<div class="col-12">
					<div class="btn-group" role="group" aria-label="Opciones cliente" id="opcionesDatos">
						<button type="button" class="btn btn-light btnOpcion" id="btnDatosCliente">Artículo</button>
						<button type="button" class="btn btn-light btnOpcion" id="btnDatosOtros">Inventario</button>
					</div>
					<form action="" method="post" id="formulario">
						<div id="datosCliente">
                     <fieldset>
                        <legend>General</legend>
                        <div class="form-group">
                           <label for="nombre">Código :</label>
                           <input class="form-control" type="text" placeholder="p. ej., WID32" name="nombre_almacen">
                        </div>
                        <div class="form-group">
                           <label for="nombre">Descripción:</label>
                           <textarea class="form-control" rows="3" name="" placeholder="[Entrar descripción completa aquí]"></textarea>
                        </div>
                        <div class="form-group row">
                           <label for="nombre">Categoría:</label>
                           <select name="" class="col-9 form-control">
                              <option value="">Categoría 1</option>
                              <option value="">Categoría 2</option>
                              <option value="">Categoría 3</option>
                           </select>
                           <a href="" class="col-2">
                              <button class="btn btnNuevaCat"><img src="images/iconos/nuevo.png" alt="nuevo"></button>
                           </a>
                        </div>
                        <div class="form-group">
                           <label for="nombre">Subcategoría:</label>
                           <select name="" class="form-control">
                              <option value="">Subcategoría 1</option>
                              <option value="">Subcategoría 2</option>
                              <option value="">Subcategoría 3</option>
                           </select>
                        </div>
                     </fieldset>
                     <fieldset>
                        <legend>Precios</legend>
                        <div class="form-group">
                           <label for="nombre">Costo de compra unitario:</label>
                           <input class="form-control" type="number" placeholder="p. ej., $20.90" name="nombre_almacen">
                        </div>
                        <div class="form-group">
                           <label for="nombre">Precio de venta unitario:</label>
                           <input class="form-control" type="number" placeholder="p. ej., $15.00" name="nombre_almacen">
                        </div>
                        <div class="form-group">
                           <label for="nombre">Impuesto:</label>
                           <input class="form-control" type="number" placeholder="p. ej., $86.00" name="nombre_almacen">
                        </div>
                     </fieldset>
                     <div class="form-group">
                        <label for="nombre">Unidad de medida:</label>
                        <input class="form-control" type="text" name="nombre_almacen" value="pieza" disabled="disabled">
                     </div>
                     <div class="form-group">
								<label for="nombre">Notas del artículo:</label>
								<textarea class="form-control" rows="3" name="" placeholder="[Entre nota aquí]"></textarea>
							</div>
						</div>
						<div id="datosOtros">
                        <table class="table table-bordered table-responsive" id="tablaLista">
                           <thead class="thead-dark">
                              <tr>
                                 <th>Almacén</th>
                                 <th>Cantidad</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><input type="text"></td>
                                 <td><input type="number"></td>
                              </tr>
                              <tr>
                                 <td><input type="text"></td>
                                 <td><input type="number"></td>
                              </tr>
                              <tr>
                                 <td><input type="text"></td>
                                 <td><input type="number"></td>
                              </tr>
                              <tr>
                                 <td><input type="text" value="Totales:" disabled="disabled"></td>
                                 <td><input type="number" value="0"></td>
                              </tr>
                           </tbody>
                        </table>
                        <a href="">
                           <button class="btn btn-primary">Añadir</button>
                        </a>
                        <a href="">
                           <button class="btn btn-secondary">Quitar</button>
                        </a>
                        <fieldset>
                           <legend>Proveedor</legend>
                           <div class="form-group row">
                              <label for="nombre">Proveedor:</label>
                              <select name="" class="col-9 form-control">
                                 <option value="">Proveedor 1</option>
                                 <option value="">Proveedor 2</option>
                                 <option value="">Proveedor 3</option>
                              </select>
                              <a href="" class="col-2">
                                 <button class="btn btnNuevaCat"><img src="images/iconos/nuevo.png" alt="nuevo"></button>
                              </a>
                           </div>
                        </fieldset>
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
		<!-- Mostrar/ocultar opciones del formulario -->
		<script src="js/nuevo-cliente.js"></script>
</body>
</html>