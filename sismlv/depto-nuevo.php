<?php 
$areas = [];
$areas[] = "1321";
$areas[] = "4";
$areas = array_diff($areas, array("1321") );
$areas = array_diff($areas, array("4") );
$numero_areas = count($areas);
echo $numero_areas;
?>
<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-nuevo"></span>
		<span>Nuevo Departamento y Área</span>
	</div>
</div>
<br>
<div class="row" id="formulario">
   <div class="col-12">
		<form action="nuevodepto.php" method="post" class="form">
			<div class="form-group">
				<div class="row">
					<div class="col-12 col-lg-4">
						<label for="nombre_depto">Nombre del departamento:</label>
					</div>
					<div class="col-12 col-lg-8">
						<input class="form-control" type="text" placeholder="" name="nombre_depto" required="required">
					</div>
				</div>
         </div>
			<div class="form-group">
				<div class="row">
					<div class="col-12">
						<label for="direccion_almacen">Áreas:</label>
					</div>
					<div class="col-12 col-lg-10 offset-lg-1">
                  <table class="table table-bordered table-hover text-center">
                     <thead class="thead-dark">
                        <tr>
                           <th>Nombre</th>
                           <th>Eliminar</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
				</div>
			</div>
         <div class="form-group">
            <div class="row">
               <div class="col-12 col-lg-6 offset-lg-3 btn btn-dark" data-toggle="modal" data-target="#modal-nuevo-depto" onclick="recargar()">Añadir</div>
            </div>
         </div>
			<input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Aceptar" style="margin-bottom: 1%;">
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">
		</form>
   </div>
</div>

<?php 
require_once 'modal-nuevo-depto.php'
?>