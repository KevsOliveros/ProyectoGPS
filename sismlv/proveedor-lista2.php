<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-ver"></span>
		<span>Lista de proveedores</span>
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
   $sql = "SELECT nombre_proveedor,
         contacto_proveedor,
         nombrecontacto_proveedor,
         direccion_proveedor,
         telefonop_proveedor,
         telefonoa_proveedor,
         fax_proveedor,
         email_proveedor
         FROM proveedor";
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
               <th>Proveedor</th>
               <th>Dirección</th>
               <th>Teléfono</th>
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
				   $estatus = mysqli_stmt_bind_result($resultado, $nombre_proveedor, $contacto_proveedor, $nombrecontacto_proveedor,  $direccion_proveedor, $telefonop_proveedor, $telefonoa_proveedor, $fax_proveedor, $email_proveedor);
				   // leer resultados
					while(mysqli_stmt_fetch($resultado)) {
						echo
							"<tr>".
								"<td>".
								   $nombre_proveedor.
								"</td>".
								"<td>".
								   $direccion_proveedor.
                                                "</td>".
                                                "<td>".
                                                $telefonop_proveedor.
                                                "</td>".
								"<td>".
									   "<div class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-proveedor-editar\" onclick=\"funcionEditar('$nombre_proveedor', '$contacto_proveedor', '$nombrecontacto_proveedor', '$direccion_proveedor', '$telefonop_proveedor', '$telefonoa_proveedor', '$fax_proveedor', '$email_proveedor')\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </div>".
								"</td>".
								"<td>".
									"<a href='eliminarproveedor.php?nom_proveedor=\"$nombre_proveedor\"'>".
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

<?php require_once 'modal-proveedor-editar.php'; ?>
<script>
   function funcionEditar(nombre, contacto, nombrecontacto, direccion, telefonop, telefonoa, fax, email) {
      $("#proveedorOriginal").attr("value", nombre);
      $("#nombreEditar").attr("value", nombre);
      $("#contactoEditar").attr("value", contacto);
      $("#nombrecontactoEditar").attr("value", nombrecontacto);
      $("#direccionEditar").attr("placeholder", direccion);
      $("#telefonopEditar").attr("value", telefonop);
      $("#telefonoaEditar").attr("value", telefonoa);
      $("#faxEditar").attr("value", fax);
      $("#emailEditar").attr("value", email);
   }
</script>