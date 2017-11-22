<div class="modal fade" id="modal-proveedor-predeterminado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elegir Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
                  <div class="col-12">
                     <form action="i-informe-proveedor-predeterminado.php" method="" class="form">
                        <div class="form-group">
                           <div class="row">
                              <div class="col-12 col-lg-6">
                                 <label for="proveedor">Proveedor:</label>
                              </div>
                              <div class="col-12 col-lg-6">
                                 <select name="proveedor" class="form-control custom-select">
                                    <option value="" disabled selected>-- Seleccione una opción --</option>
                                 </select>
                              </div>
                           </div>
                        </div>
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