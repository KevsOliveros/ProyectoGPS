<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-recibir"></span>
		<span>Recibir stock</span>
	</div>
</div>
<br>
<div class="row" id="formulario">
   <div class="col-12">
      <form action="" class="form">
         <div class="custom-controls-stacked">
            <label class="custom-control custom-radio" style="margin-left: 1%;">
               <input checked id="radio1" name="radio-stacked" type="radio" class="custom-control-input">
               <span class="custom-control-indicator"></span>
               <span class="custom-control-description">Artículos específicos</span>
            </label>
            <fieldset id="articuloEspecifico">
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="proveedor">Provedor:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <select name="proveedor" class="form-control custom-select" required="required">
                           <option value="" disabled selected>-- Seleccione una opción --</option>
                        </select>
                     </div>
                  </div>
               </div>
            </fieldset>
            <label class="custom-control custom-radio" style="margin-left: 1%;">
               <input id="radio2" name="radio-stacked" type="radio" class="custom-control-input">
               <span class="custom-control-indicator"></span>
               <span class="custom-control-description">Orden de compra</span>
            </label>
            <fieldset id="ordenCompra">
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="pedido">Pedido:</label>
                     </div>
                     <div class="col-10 col-sm-7">
                        <select class="form-control custom-select" name="pedido" required="required">
                           <option value="" disabled selected>-- Seleccione una opción --</option>
                        </select>
                     </div>
                     <div class="col-1 col-sm-1">
                        <div class="btn btn-dark"><i class="fa fa-binoculars" aria-hidden="true"></i></div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="fecha_recibida">Fecha recibida:</label>
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
                              <th>Cant. recib.</th>
                              <th>Costo unitario</th>
                              <th>Cant. stock</th>
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
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <br>
               <button class="btn btn-dark col-12 col-sm-4 offset-sm-1" style="margin-bottom: 1%;">Añadir</button>
               <button class="btn btn-dark col-12 col-sm-4 offset-sm-1" style="margin-bottom: 1%;">Quitar</button>
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
               <input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Recibir" style="margin-bottom: 1%;">
               <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">    
            </fieldset>
         </div>
      </form>
   </div>
</div>