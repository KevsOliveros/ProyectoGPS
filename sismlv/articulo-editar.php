          <?php
                      $cod_art = $_GET['cod_art'];
                      require 'conn.php';
                      $query = mysqli_query($conn,"SELECT 
                      AES_DECRYPT(codigo_articulo,UNHEX('000')) AS codigo_articulo, AES_DECRYPT(descripcion_articulo,UNHEX('000')) AS descripcion_articulo, AES_DECRYPT(departamento_articulo,UNHEX('000')) AS departamento_articulo, AES_DECRYPT(area_articulo,UNHEX('000')) AS area_articulo, AES_DECRYPT(impuesto_articulo,UNHEX('000')) AS impuesto_articulo, AES_DECRYPT(precio_costo_articulo,UNHEX('000')) AS precio_costo_articulo, AES_DECRYPT(precio_venta_articulo,UNHEX('000')) AS precio_venta_articulo, AES_DECRYPT(unidad_medida_articulo,UNHEX('000')) AS unidad_medida_articulo,
                      AES_DECRYPT(notas_articulo,UNHEX('000')) AS notas_articulo
                      FROM articulo WHERE nom_usuario = AES_ENCRYPT('".$_SESSION['current_user']."',UNHEX('000')) AND codigo_articulo = AES_ENCRYPT('$cod_art',UNHEX('000'))");
                      $row = mysqli_fetch_array($query,MYSQLI_ASSOC)
                    ?>
 <div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-editar"></span>
		<span>Editar Artículo</span>
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
      <form action="editararticulo.php?cod_ant=<?php echo $cod_art; ?>" method="post" class="form" id="formularioArticulo">
         <div>               
            <fieldset>
               <legend>General</legend>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="codigo">Código:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <input type="text" class="form-control" name="codigo" required="required" placeholder="p. ej., WID2" value="<?php echo $cod_art; ?>">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="descripcion">Descripción:</label>
                     </div>
                     <div class="col-12 col-sm-8">
                        <textarea class="form-control" name="descripcion" cols="30" rows="5" required="required"> <?php echo $row['descripcion_articulo']; ?></textarea>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-12 col-sm-4">
                        <label for="departamento">Departamento:</label>
                     </div>
                     <div class="col-10 col-sm-7">
                        <select disabled class="form-control custom-select" name="departamento" required="required">
                        
                           <option value="<?php echo $row['departamento_articulo']; ?>" disabled selected><?php echo $row['departamento_articulo']; ?></option>
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
                        <select disabled class="form-control custom-select" name="area" required="required">
                            <option value="<?php echo $row['area_articulo']; ?>" disabled selected><?php echo $row['departamento_articulo']; ?>, <?php echo $row['area_articulo']; ?></option>
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
                           <input type="number" class="form-control" name="costo_compra_unitario" value="<?php echo $row['precio_costo_articulo']; ?>">
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
                           <input type="number" class="form-control" name="precio_venta_unitario" value="<?php echo $row['precio_venta_articulo']; ?>">
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
                           <input type="number" class="form-control" name="impuesto" placeholder="p. ej., 16.00" value="<?php echo $row['impuesto_articulo']; ?>">
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
                     <textarea class="form-control" name="nota" cols="30" rows="5" required="required" placeholder="Ingrese nota aquí"><?php echo $row['notas_articulo']; ?></textarea>
                  </div>
               </div>
            </div>
         </div>
         <input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Editar artículo" style="margin-bottom: 1%;">
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
         <input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Editar artículo" style="margin-bottom: 1%;">
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">        
      </form>
   </div>
</div>