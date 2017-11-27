<div class="modal fade" id="modal-nuevo-depto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Área</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="container-fluid">
            <form class="form" action="i-depto-nuevo.php" method="get">
               <div class="form-group">
                  <div class="row">
                     <div class="col-12">
                        <label for="nombre_area">Ingresar nombre del área:</label>
                     </div>
                     <div class="col-12">
                        <input type="text" name="nombre_area" class="form-control" value="">
                     </div>
                  </div>
               </div>
               <input type="hidden" name="areas" value="<?php echo htmlentities(serialize($areas)); ?>">
               <input type="hidden" name="primera" value="<?php echo $primera; ?>">
               <input type="hidden" name="indice" value="<?php echo $indice; ?>"> 
               <input type="hidden" name="eliminar" value="0"> 
               <input type="submit" class="btn btn-success col-5" value="Aceptar" style="margin-bottom: 1%;">
               <input type="reset" class="btn btn-danger col-5" value="Cancelar" style="margin-bottom: 1%;">
            </form>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp&nbsp&nbsp  Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script>
   function agregarArea() {
      <?php echo $areas[0]; ?>
   }
</script>