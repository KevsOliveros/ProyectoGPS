<div class="modal fade" id="modal-proveedor-editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
                  <div class="col-12">
                     
                  <form action="editarproveedor.php" method="post" class="form">
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="nombre_proveedor">Nombre del proveedor:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text" id="nombreEditar" name="nombre_proveedor" class="form-control" placeholder="p. ej., Acme, Inc">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="persona_contacto">Persona del contacto:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text" id="contactoEditar" name="persona_contacto" class="form-control" placeholder="p. ej., María Pérez">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="nombre_contacto">Nombre del contacto:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text" id="nombrecontactoEditar" name="nombre_contacto" class="form-control" placeholder="p. ej., María">
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
						<input type="text" id="telefonopEditar" name="telefonop_proveedor" class="form-control" placeholder="p. ej., 555 123 456">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="telefonoa_proveedor">Teléfono (alternativo):</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text"id="telefonoaEditar" name="telefonoa_proveedor" class="form-control" placeholder="p. ej., 555 987 654">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="fax_proveedor">Fax:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="number" id="faxEditar" name="fax_proveedor" class="form-control" placeholder="p. ej., maria.perez@gmail.com">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-md-3">
						<label for="correo_proveedor">Correo electrónico:</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="email" id="emailEditar" name="correo_proveedor" class="form-control" placeholder="p. ej., maria.perez@gmail.com">
					</div>
				</div>
			</div>
         <input type="hidden" id="proveedorOriginal" name="proveedorOriginal">
			<input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Editar proveedor" style="margin-bottom: 1%;">
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">         
                  </div>
               </div>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp&nbsp&nbsp  Cerrar</button>
      </div>
    </div>
  </div>
</div>