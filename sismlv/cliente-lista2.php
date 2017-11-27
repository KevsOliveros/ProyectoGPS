<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-ver"></span>
		<span>Lista de clientes</span>
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
   $sql = "SELECT nombre_cliente, 
   p_contacto_cliente,  
   n_contacto_cliente, 
   dir_facturacion_cliente, 
   ciudad_cliente, 
   estado_cliente, 
   codigo_postal_cliente, 
   pais_cliente, 
   tel_personal_cliente, 
   tel_alternativo_cliente, 
   fax_cliente, 
   email_cliente,
   direccion_otros,
   ciudad_otros,
   estado_otros,
   cp_otros,
   pais_otros,
   vendedor_otros,
   notas_otros
   FROM cliente";
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
               <th>Cliente</th>
               <th>Notas</th>
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
				   $estatus = mysqli_stmt_bind_result($resultado, $nombre_c, $persona_c, $nombre_contacto_c, $direccion_facturacion_c, $ciudad_c, $estado_c, $cp_c, $pais_c, $telefonop_c, $telefonoa_c, $fax_c, $correo_c, $direccion_o, $ciudad_o, $estado_o, $cp_o, $pais_o, $vendedor_o, $notas_o);
				   // leer resultados
					while(mysqli_stmt_fetch($resultado)) {
						echo
							"<tr>".
								"<td>".
								   $nombre_c.
								"</td>".
								"<td>".
								   $notas_o.
                                "</td>".
								"<td>".
									   "<div class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal-cliente-editar\" onclick=\"funcionEditar('$nombre_c', '$persona_c', '$nombre_contacto_c', '$direccion_facturacion_c', '$ciudad_c', '$estado_c', '$cp_c', '$pais_c', '$telefonop_c', '$telefonoa_c', '$fax_c', '$correo_c', '$direccion_o', '$ciudad_o', '$estado_o', '$cp_o', '$pais_o', '$vendedor_o', '$notas_o')\">
                                       <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </div>".
								"</td>".
								"<td>".
									"<a href='eliminarcliente.php?nom_cliente=\"$nombre_c\"'>".
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

<?php require_once 'modal-cliente-editar.php'; ?>
<script>
   function funcionEditar(nombre, contacto, nombrecontacto, direccion, ciudad, estado, cp, pais, telefonop, telefonoa, fax, email, direccionotros, ciudadotros, estadootros, cpotros, paisotros, vendedorotros, notasotros) {
      $("#clienteOriginal").attr("value", nombre);
      $("#nombreEditar").attr("value", nombre);
      $("#contactoEditar").attr("value", contacto);
      $("#nombrecontactoEditar").attr("value", nombrecontacto);
      $("#dirfacturacionEditar").attr("value", direccion);
      $("#ciudadEditar").attr("value", ciudad);
      $("#estadoEditar").attr("value", estado);
      $("#cpEditar").attr("value", cp);
      $("#paisEditar").attr("value", pais);
      $("#telefonopEditar").attr("value", telefonop);
      $("#telefonoaEditar").attr("value", telefonoa);
      $("#faxEditar").attr("value", fax);
      $("#emailEditar").attr("value", email);
      $("#dir_otrosEditar").attr("value", direccionotros);
      $("#ciudad_otrosEditar").attr("value", ciudadotros);
      $("#estado_otrosEditar").attr("value", estadootros);
      $("#cp_otrosEditar").attr("value", cpotros);
      $("#pais_otrosEditar").attr("value", paisotros);
      $("#vendedor_otrosEditar").attr("value", vendedorotros);
      $("#notas_otrosEditar").attr("value", notasotros);
   }
</script>