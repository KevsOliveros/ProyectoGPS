 <div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-nuevo"></span>
		<span>Nuevo Artículo</span>
	</div>
</div>
<div class="row">
   <div class="col-12">
      <div class="btn-group">
         <button class="btn btn-light" id="btn-articulo">Artículo</button>
         <button class="btn btn-light" id="btn-inventario">Inventario</button>
      </div>
   </div>
</div>
<div class="row" id="formulario">
   <div class="col-12">
      <br>
      <?php             
                        
                      require 'conn.php';
                      $query = mysqli_query($conn,"SELECT 
                      AES_DECRYPT(nombre_depto,UNHEX('000')) AS nombre_depto,
                      AES_DECRYPT(nombre_area,UNHEX('000')) AS nombre_area
                      FROM deptoarea WHERE nom_usuario = AES_ENCRYPT('".$_SESSION['current_user']."',UNHEX('000')) ORDER BY nombre_depto, nombre_area");
                       $deptos = array();
                        $areas = array();
                    $pruebas = array("uno","dos","tres");
                        while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                            $deptos[] = $row['nombre_depto'];
                            $areas[]  = $row['nombre_area'];
                        }
       
                    ?>
                 
      <form action="nuevoarticulo.php" class="form" id="formularioArticulo" method="post">
         <div>               
            <fieldset>
               <legend>General</legend>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="codigo">Código:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <input type="text" class="form-control" name="codigo" required="required" placeholder="p. ej., WID2">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="descripcion">Descripción:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <textarea class="form-control" name="descripcion" cols="30" rows="5" required="required" placeholder="Ingrese descripción completa aquí"></textarea>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="departamento">Departamento:</label>
                     </div>
                     <div class="col-10 col-sm-7">
                        <select class="form-control custom-select" name="departamento" required="required">
                           <option value="" disabled selected>-- Seleccione una opción --</option>
                           <?php
                                    $cont = 0;
                                   while (sizeof($deptos) - 1 >= $cont) {
                                       if($deptos[$cont] != $deptos[$cont - 1]){
                                       echo "<option value=\"".$deptos[$cont]."\">".$deptos[$cont]."</option>";
                                       }
                                       $cont = $cont + 1;
                                   } ?>
                        </select>
                     </div>
                     <div class="col-1 col-sm-1">
                        <div class="btn btn-dark"><i class="fa fa-plus" aria-hidden="true"></i></div>
                     </div>
                  </div>
               </div>
               
               
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="area">Área:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <select class="form-control custom-select" name="area" required="required">
                         <option value="" disabled selected>-- Seleccione una opción --</option>
                         
                                   <?php
                                    $cont2 = 0;
                                   while (sizeof($areas) - 1 >= $cont2) {
                                       //if($deptos[$cont2] != $deptos[$cont2 - 1]){
                                       echo "<option value=\"".$areas[$cont2]."\">".$deptos[$cont2].",".$areas[$cont2]."</option>";
                                       //}
                                       $cont2 = $cont2 + 1;
                                   } ?>
                        </select>
                     </div>
                  </div>
               </div> 
               
                
                  
            </fieldset>
            <fieldset>
               <legend>Precios</legend>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="costo_compra_unitario">Costo de compra unitario:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <div class="input-group">
                           <span class="input-group-addon">$</span>
                           <input type="number" class="form-control" name="costo_compra_unitario" placeholder="p. ej., 20.90">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="precio_venta_unitario">Precio de venta unitario:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <div class="input-group">
                           <span class="input-group-addon">$</span>
                           <input type="number" class="form-control" name="precio_venta_unitario" placeholder="p. ej., 21.90">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="impuesto">Impuesto:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <div class="input-group">
                           <span class="input-group-addon">$</span>
                           <input type="number" class="form-control" name="impuesto" placeholder="p. ej., 16.00">
                        </div>
                     </div>
                  </div>
               </div>
            </fieldset>
            <div class="form-group">
               <div class="row">
                  <div class="col-12 col-sm-4">
                     <label for="unidad_medida">Unidad de medida:</label>
                  </div> 
                  <div class="col-12 col-sm-8">
                     <input type="text" class="form-control" name="unidad_medida" value="pieza" disabled>
                  </div> 
               </div>
            </div> 
            <div class="form-group">
               <div class="row">
                  <div class="col-12 col-sm-4">
                     <label for="nota">Nota del artículo:</label>
                  </div>
                  <div class="col-12 col-sm-8">
                     <textarea class="form-control" name="nota" cols="30" rows="5" required="required" placeholder="Ingrese nota aquí"></textarea>
                  </div>
               </div>
            </div>
         </div>
         <input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Añadir artículo" style="margin-bottom: 1%;">
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">         
      </form>
      <form action="" class="form" id="formularioInventario">
         <div class="form-group">
            <div class="row">
               <div class="col-12">
                  <table class="table table-bordered table-hover text-center">
                     <thead class="thead-dark">
                        <tr>
                           <th>Ubicación</th>
                           <th>Cantidad</th>
                           <th>Cantidad ideal</th>
                           <th>Cantidad aviso</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <button class="btn btn-dark col-12 col-sm-4 offset-sm-1" style="margin-bottom: 1%;">Añadir</button>
         <button class="btn btn-dark col-12 col-sm-4 offset-sm-1" style="margin-bottom: 1%;">Quitar</button>
         <fieldset>
            <legend>Proveedor</legend>
            <div class="form-group">
               <div class="row">
                  <div class="col-12 col-sm-4">
                     <label for="proveedor">Proveedor predeterminado:</label>
                  </div>
                  <div class="col-10 col-sm-7">
                     <select class="form-control custom-select" name="proveedor" required="required">
                        <option value="" disabled selected>-- Seleccione una opción --</option>
                     </select>
                  </div>
                  <div class="col-1 col-sm-1">
                     <div class="btn btn-dark"><i class="fa fa-plus" aria-hidden="true"></i></div>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="row">
                  <div class="col-12 col-sm-4">
                     <label for="num_pieza_proveedor">Número de pieza del proveedor:</label>
                  </div>
                  <div class="col-12 col-sm-8">
                     <input type="number" class="form-control" name="num_pieza_proveedor" required="required">
                  </div>
               </div>
            </div>
         </fieldset>
         <input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Añadir artículo" style="margin-bottom: 1%;">
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">        
      </form>
   </div>
</div>