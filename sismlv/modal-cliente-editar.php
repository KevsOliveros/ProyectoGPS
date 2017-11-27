<div class="modal fade" id="modal-cliente-editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
            <div class="col-12">
                <form action="editarcliente.php" method="post" class="form">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="nombre_cliente">Nombre del proveedor:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="nombreEditar" name="nombre_cliente" class="form-control" placeholder="p. ej., Acme, Inc">
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
                                <label for="direccion_facturacion">Dirección de Facturación:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="dirfacturacionEditar" name="direccion_facturacion" class="form-control" placeholder="p. ej., María">
                            </div>
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="ciudad_cliente">Ciudad:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="ciudadEditar" name="ciudad_cliente" class="form-control" placeholder="p. ej., Morelia">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="estado_cliente">Estado:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="estadoEditar" name="estado_cliente" class="form-control" placeholder="p. ej., Michoacán">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="cp_cliente">Código Postal:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="cpEditar" name="cp_cliente" class="form-control" placeholder="p. ej., 58132">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="pais_cliente">País:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="paisEditar" name="pais_cliente" class="form-control" placeholder="p. ej., México">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="telefonop_cliente">Teléfono (principal):</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="telefonopEditar" name="telefonop_cliente" class="form-control" placeholder="p. ej., 555 123 456">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="telefonoa_cliente">Teléfono (alternativo):</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text"id="telefonoaEditar" name="telefonoa_cliente" class="form-control" placeholder="p. ej., 555 987 654">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="fax_cliente">Fax:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="faxEditar" name="fax_cliente" class="form-control" placeholder="p. ej., 555 987 654">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="correo_cliente">Correo electrónico:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="email" id="emailEditar" name="correo_cliente" class="form-control" placeholder="p. ej., maria.perez@gmail.com">
                            </div>
                        </div>
                    </div>
                    <h1 align="center">Otros:</h1>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="direccion_otros">Dirección de envío:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="dir_otrosEditar" name="direccion_otros" class="form-control" placeholder="p. ej., Calle Constitución">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="ciudad_otros">Ciudad:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="ciudad_otrosEditar" name="ciudad_otros" class="form-control" placeholder="p. ej., Guadalajara">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="estado_otros">Estado:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="estado_otrosEditar" name="estado_otros" class="form-control" placeholder="p. ej., Jalisco">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="cp_otros">Código Postal:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="cp_otrosEditar" name="cp_otros" class="form-control" placeholder="p. ej., 58135">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="pais_otros">País:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="pais_otrosEditar" name="pais_otros" class="form-control" placeholder="p. ej., México">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="vendedor_otros">Vendedor:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="pais_otrosEditar" name="vendedor_otros" class="form-control" placeholder="p. ej., Ramón Ayala">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="notas_otros">Notas sobre cliente:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea class="form-control" id="notas_otrosEditar" name="notas_otros" id="" cols="30" rows="1" placeholder="[Entre comentarios privados]"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="clienteOriginal" name="clienteOriginal">
                    <input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Editar cliente" style="margin-bottom: 1%;">
                    <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">
                    </form>
                  </div>
               </div>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp&nbsp&nbsp  Cerrar</button>
        <?php //require_once 'js/cerrar-pestaña.php'?>
      </div>
    </div>
  </div>
</div>