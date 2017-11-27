<?php
$nomb;
$dir;
?>
<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-ver"></span>
		<span>Lista de almacenes</span>
	</div>
</div>
<br>
<?php
	//Conexion a la bd
	require_once 'conectar.php';
	$conexion = mysqli_connect($servername, $username, $password);
	if(mysqli_connect_errno()) {
		echo "Error en la conexión";
		exit();
	}
	//Selecionar db
   mysqli_select_db($conexion, $dbname) or die("Error al conectar con la BD");
   mysqli_set_charset($conexion, "utf8");
   $sql = "SELECT nombre_almacen, direccion_almacen FROM almacen WHERE nom_usuario = AES_ENCRYPT('".$_SESSION['current_user']."',UNHEX('000'))";
   // preparar consulta
   $resultado = mysqli_prepare($conexion, $sql);
   // ejecutar sql
   $estatus = mysqli_stmt_execute($resultado);
?>
<div class="row">
   <div class="col-12">
      <table class="table table-bordered table-hover text-center">
         <thead>
            <tr>
               <th>Almacén</th>
               <th>Dirección</th>
               <th>Editar</th>
               <th>Eliminar</th>
            </tr>
         </thead>
         <tbody>
         <?php
            if($estatus == false)
					echo "Error al ejecutar la consulta";
				else {
				   // asociar variables
				   $estatus = mysqli_stmt_bind_result(
               $resultado, $nombre, $direccion);
				   // leer resultados
					while(mysqli_stmt_fetch($resultado)) {
						echo
							"<tr>".
								"<td>".
								   $nombre.
								"</td>".
								"<td>".
								   $direccion.
								"</td>".
								"<td>".
									   "<div class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-almacen-editar\" onclick=\"funcionEditar('$nombre', '$direccion')\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </div>".
								"</td>".
								"<td>".
									"<a href='eliminaralmacen.php?nom_alm=\"$nombre\"'>".
										"<div class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> </div>".
									"</a>".
								"</td>".
							"</tr>";
					}
				}
				mysqli_stmt_close($resultado);
			?>
         </tbody>
      </table>
   </div>
</div>

<?php require_once 'modal-almacen-editar.php'; ?>
<script>
   function funcionEditar(nombre, direccion) {
      $("#almacenOriginal").attr("value", nombre);
      $("#nombreEditar").attr("value", nombre);
      $("#direccionEditar").attr("placeholder", direccion);
   }
</script>