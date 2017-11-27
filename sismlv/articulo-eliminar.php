 <div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-eliminar"></span>
		<span>Eliminar Artículo</span>
	</div>
</div>
<br>
<div class="row">
	<div class="col-12">
		<table class="table table-bordered table-hover text-center">
      	<thead class="thead-dark">
         	<tr>
					<th>Eliminar</th>
            	<th>Artículo</th>
               <th>Descripción</th>
               <th>Departamento</th>
               <th>Area</th>
               <th>Impuesto</th>
               <th>Costo</th>
               <th>Precio</th>
               <th>Cantidad</th>
               <th>Medida</th>
            </tr>
         </thead>
         <?php
                      require 'conn.php';
                      $query = mysqli_query($conn,"SELECT 
                      AES_DECRYPT(codigo_articulo,UNHEX('000')) AS codigo_articulo, AES_DECRYPT(descripcion_articulo,UNHEX('000')) AS descripcion_articulo, AES_DECRYPT(departamento_articulo,UNHEX('000')) AS departamento_articulo, AES_DECRYPT(area_articulo,UNHEX('000')) AS area_articulo, AES_DECRYPT(impuesto_articulo,UNHEX('000')) AS impuesto_articulo, AES_DECRYPT(precio_costo_articulo,UNHEX('000')) AS precio_costo_articulo, AES_DECRYPT(precio_venta_articulo,UNHEX('000')) AS precio_venta_articulo, AES_DECRYPT(unidad_medida_articulo,UNHEX('000')) AS unidad_medida_articulo FROM articulo WHERE nom_usuario = AES_ENCRYPT('".$_SESSION['current_user']."',UNHEX('000'))");
                    ?>
      	<tbody>
           <?php
                                   while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                                       echo "<td><a href=\"eliminararticulo.php?cod_art=".$row['codigo_articulo']."\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>";
                                       
                                       echo "<td>".$row['codigo_articulo']."</td>";
                                       echo "<td>".$row['descripcion_articulo']."</td>";
                                       echo "<td>".$row['departamento_articulo']."</td>";
                                       echo "<td>".$row['area_articulo']."</td>";
                                       echo "<td>".$row['impuesto_articulo']."</td>";
                                       echo "<td>".$row['precio_costo_articulo']."</td>";
                                       echo "<td>".$row['precio_venta_articulo']."</td>";
                                       echo "<td>3</td>";
                                       echo "<td>".$row['unidad_medida_articulo']."</td>";
                                       
                                       echo "</tr>";
                                   }

                                ?>
                        
         </tbody>
      </table>
	</div>
</div>