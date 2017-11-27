<?php
?>
<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-ver"></span>
		<span>Lista de Departamentos y Áreas</span>
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
   $sql = "SELECT AES_DECRYPT(nombre_depto,UNHEX('000')), 
	AES_DECRYPT(nombre_area,UNHEX('000')) FROM deptoarea WHERE nom_usuario = AES_ENCRYPT('". $_SESSION['current_user']."',UNHEX('000'))";
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
               <th>Departamento</th>
               <th>Área</th>
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
               $resultado, $departamento, $area);
				   // leer resultados
					while(mysqli_stmt_fetch($resultado)) {
						echo
							"<tr>".
								"<td>".
								   $departamento.
								"</td>".
								"<td>".
								   $area.
								"</td>".
								"<td>".
									"<a href='eliminardepto.php?nom_alm=\"$departamento\"'>".
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