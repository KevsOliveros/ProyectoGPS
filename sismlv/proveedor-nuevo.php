<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-nuevo"></span>
		<span>Nuevo Proveedor</span>
	</div>
</div>
<div class="row" id="formulario">
	<div class="col-12">
		<br>
		<form action="nuevoproveedor.php" method="post" class="form">
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="nombre_proveedor">Nombre del proveedor:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text" name="nombre_proveedor" class="form-control" placeholder="p. ej., Acme, Inc">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="persona_contacto">Persona del contacto:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text" name="persona_contacto" class="form-control" placeholder="p. ej., María Pérez">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="nombre_contacto">Nombre del contacto:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text" name="nombre_contacto" class="form-control" placeholder="p. ej., María">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="direccion_proveedor">Dirección:</label>
					</div>
					<div class="col-12 col-md-9">
						<textarea class="form-control" name="direccion_proveedor" id="" cols="30" rows="1" placeholder="[Ingresar dirección]"></textarea>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="telefonop_proveedor">Teléfono (principal):</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text" name="telefonop_proveedor" class="form-control" placeholder="p. ej., 555 123 456">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="telefonoa_proveedor">Teléfono (alternativo):</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text" name="telefonoa_proveedor" class="form-control" placeholder="p. ej., 555 987 654">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="fax_proveedor">Fax:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="number" name="fax_proveedor" class="form-control" placeholder="p. ej., maria.perez@gmail.com">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="correo_proveedor">Correo electrónico:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="email" name="correo_proveedor" class="form-control" placeholder="p. ej., maria.perez@gmail.com">
					</div>
				</div>
			</div>
			<input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Añadir proveedor" style="margin-bottom: 1%;">
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">         
		</form>
	</div>
</div>