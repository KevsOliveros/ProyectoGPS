<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-nuevo"></span>
		<span>Nuevo Almacén</span>
	</div>
</div>
<br>
<div class="row" id="formulario">
   <div class="col-12">
		<form action="nuevoalmacen.php" method="post" class="form">
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-lg-4">
						<label for="nombre">Nombre:</label>
					</div>
					<div class="col-12 col-lg-8">
						<input class="form-control" type="text" placeholder="Introduzca un nombre" name="nombre_almacen" required="required">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-lg-4">
						<label for="descripcion">Descripción:</label>
					</div>
					<div class="col-12 col-lg-8">
						<textarea  class="form-control" id="exampleFormControlTextarea1" rows="3" name="direccion_almacen" required="required"></textarea>
					</div>
				</div>
			</div>
			<input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Aceptar" style="margin-bottom: 1%;">
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">
		</form>
   </div>
</div>