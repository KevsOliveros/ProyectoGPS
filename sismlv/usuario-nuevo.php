<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-nuevo"></span>
		<span>Nuevo Usuario</span>
	</div>
</div>
<div class="row" id="formulario">
	<div class="col-12">
		<br>
		<form action="nuevousuario.php" method="post" class="form">
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="nombre_del_usuario">Nombre(s):</label>
					</div>
					<div class="col-12 col-md-9">
						<input autofocus type="text" name="nombre_del_usuario" class="form-control" placeholder="Juan Jose">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="nom_usuario">Nombre de usuario:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text" name="nom_usuario" class="form-control" placeholder="eljotajota">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="pass_usuario">Contraseña:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="password" name="pass_usuario" class="form-control" placeholder="contraseña aqui">
					</div>
				</div>
			</div>
			<input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Añadir usuario" style="margin-bottom: 1%;">
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">         
		</form>
	</div>
</div>