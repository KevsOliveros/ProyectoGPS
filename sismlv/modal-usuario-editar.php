<div class="modal fade" id="modal-almacen-editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elegir Almacén y Departamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
                  <div class="col-12">
                     <form action="editaralmacen.php" method="post" class="form">
                        <div class="form-group">
                           <div class="row">
                              <div class="col-12 col-lg-4">
                                 <label for="nombre">Nombre(s):</label>
                              </div>
                               <div class="col-12 col-lg-8">
                                 <input class="form-control" id="nombreEditar" type="text" name="nombre_almacen" required="required">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-12 col-lg-4">
                                 <label for="direccion_almacen">Nombre de Usuario:</label>
                              </div>
                              <div class="col-12 col-lg-8">
                                 <textarea  class="form-control" id="direccionEditar" rows="3" name="direccion_almacen" required="required"></textarea>
                              </div>
                           </div>
                        </div>
                        <input type="hidden" id="usuarioOriginal" name="nom_alm">
                        <input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Aceptar" style="margin-bottom: 1%;">
                        <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">
                     </form>
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