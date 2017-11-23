<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-vender"></span>
		<span>Vender stock</span>
	</div>
</div>
<div class="row" id="formulario">
	<div class="col-12">
		<br>
		<form action="" class="form">
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-sm-4">
						<label for="cliente">Cliente:</label>
					</div>
					<div class="col-12 col-sm-8">
						<select name="cliente" class="form-control custom-select" id="cliente">
							<option selected>-- Seleccione un cliente --</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-sm-4">
						<label for="fecha_venta">Fecha de venta:</label>
					</div>
					<div class="col-12 col-sm-8">
						<input type="date" class="form-control" value="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table class="table table-bordered table-responsive table-hover text-center">
						<thead class="thead-dark">
							<tr>
								<th>Artículo</th>
								<th>Descripción</th>
								<th>Ubicación</th>
								<th>Cant. venta</th>
								<th>Precio</th>
								<th>Cant. stock</th>
								<th>Quitar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<br>
			<button class="btn btn-dark col-12 col-sm-4 offset-sm-4" style="margin-bottom: 1%;">Añadir</button>
			<div class="form-group">
				<br>
				<div class="row">
					<div class="col-12">
						<label class="custom-control custom-checkbox">
						  	<input type="checkbox" class="custom-control-input">
						  	<span class="custom-control-indicator"></span>
						  	<span class="custom-control-description">Artículo dañado/perdido</span>
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-sm-2">
						<label for="nota">Nota:</label>
					</div>
					<div class="col-12 col-sm-10">
						<textarea class="form-control" name="nota" id="nota" cols="30" rows="10"></textarea>
					</div>
				</div>
			</div>
			<input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Añadir artículo" style="margin-bottom: 1%;">
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">         
		</form>
	</div>
</div>