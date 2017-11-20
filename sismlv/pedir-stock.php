<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-pedir"></span>
		<span>Pedir stock</span>
	</div>
</div>
<div class="row" id="formulario">
   <div class="col-12">
      <br>
      <form action="" class="form">
         <div class="form-group">
            <div class="row">
               <div class="col-12 col-sm-3">
                  <label for="proveedor_pedido">Proveedor del pedido:</label>
               </div>
               <div class="col-7">
                  <select name="proveedor_pedido" required="required" class="form-control custom-select">
                     <option value="" selected disabled>-- Seleccione una opción --</option>
                  </select>
               </div>
               <div class="col-1">
                  <div class="btn btn-dark"><i class="fa fa-binoculars" aria-hidden="true"></i></div>
               </div>
               <div class="col-1 col-sm-1 offset-1 offset-sm-0">
                  <div class="btn btn-dark"><i class="fa fa-plus" aria-hidden="true"></i></div>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-12 col-sm-4">
                  <label for="fecha_recibo">Fecha estimada de recibo:</label>
               </div>
               <div class="col-12 col-sm-8">
                  <input type="date" name="fecha_recibo" class="form-control">
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-12 col-sm-4">
                  <label for="fecha_emision">Fecha de emisión:</label>
               </div>
               <div class="col-12 col-sm-8">
                  <input type="date" name="fecha_emision" class="form-control">
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-12 col-sm-4">
                  <label for="impuesto">Impuesto:</label>
               </div>
               <div class="col-12 col-sm-8">
                  <input type="number" name="impuesto" class="form-control" min="0">
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-12 col-sm-4">
                  <label for="almacen">Enviar a (almacén):</label>
               </div>
               <div class="col-12 col-sm-8">
                  <select name="alamcen" required="required" class="form-control custom-select">
                     <option value="" disabled selected>-- Selección una opción --</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-12 col-sm-4">
                  <label for="facturar_a">Facturar a:</label>
               </div>
               <div class="col-12 col-sm-8">
                  <textarea placeholder="Ingrese dirección de facturación" name="facturar_a" cols="30" rows="3" class="form-control"></textarea>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-12 col-sm-6">
                  <label for="enviar_a">Enviar a:</label>
               </div>
               <div class="col-12 col-sm-6">
                  <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Igual que 'facturar a'</span>
               </label>
               </div>
               <div class="col-12 col-sm-8 offset-sm-2">
                  <textarea placeholder="Ingrese dirección de envío" name="enviar_a" cols="30" rows="3" class="form-control"></textarea>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12 col-sm-6">
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="seguimiento">Ref. de seguimiento N°:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <input type="number" name="seguimiento" class="form-control">
                     </div>
                  </div>
               </div>
            </div>
               <div class="col-12 col-sm-6">
                  <div class="form-group">
                     <div class="row">
                        <div class="col-12 col-sm-4">
                           <label for="metodo_envio">Enviar por:</label>
                        </div>
                        <div class="col-10 col-sm-6">
                           <select name="metodo_envio" class="form-control custom-select" required="required">
                              <option value="" selected disabled>-- Seleccione una opción --</option>
                           </select>
                        </div>
                        <div class="col-1 col-sm-1">
                           <div class="btn btn-dark"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
         <div class="row">
                  <div class="col-12">
                     <table class="table table-bordered table-responsive table-hover text-center">
                        <thead class="thead-dark">
                           <tr>
                              <th>Cantidad</th>
                              <th>Artículo</th>
                              <th>Descripción</th>
                              <th>Impuesto</th>
                              <th>Valor unitario</th>
                              <th>Total de línea</th>
                              <th>Medida</th>
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
               <button class="btn btn-dark col-12 col-sm-4 offset-sm-1" style="margin-bottom: 1%;">Añadir</button>
               <button class="btn btn-dark col-12 col-sm-4 offset-sm-1" style="margin-bottom: 1%;">Quitar</button>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="notas_pedido">Notas del pedido:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <textarea class="form-control" name="notas_pedido" cols="30" rows="5"></textarea>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="notas_internas">Notas internas:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <textarea class="form-control" name="notas_internas" cols="30" rows="5"></textarea>
                     </div>
                  </div>
               </div>
         <div class="row">
            <div class="col-12">
               <b>Total: $00.00</b>
            </div>
         </div>
         <select class="btn btn-success col-12 col-sm-4 offset-sm-1" style="margin-bottom: 1%;">
            <option value="">Registrar e imprimir</option>
            <option value="">Guardar como borrador</option>
            <option value="">Guardar como recurrente</option>
            <option value="">Registrar</option>
         </select>
         
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">         
      </form>
   </div>
</div>