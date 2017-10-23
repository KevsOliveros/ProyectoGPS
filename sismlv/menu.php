<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Menú Principal</title>

	<!--CSS Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<!--iconos-->
	<link rel="stylesheet" href="libs/iconos/css/font-awesome.css">
	<!--Google fonts: raleway-->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!--CSS dashboard.php-->
	<link rel="stylesheet" href="css/dashboard.css">
	<!--CSS menu-principal-->
	<link rel="stylesheet" href="css/menu-principal-estilos.css">
	<!--CSS menu-superior.php-->
	<link rel="stylesheet" href="css/menu-superior.css">
</head>

<body>
	<header>
		<?php
			require_once 'menu-superior.php';
		?>
	</header>
	<?php
			require_once 'dashboard.php';
	?>
	<div></div>
	<div id="menu">
		<div class="opcionMenu" id="inventario">
			<img class="iconoMenu" src="images/iconos/inventario.png" alt="inventario">
			<p class="tituloOpcionMenu">Inventario</p>
		</div>
		<div class="submenu" id="submenuInventario">
			<div class="subOpcionMenu" id="nuevoArticulo">
				<img class="subIconoMenu" src="images/iconos/nuevo.png" alt="nuevoArticulo">
				<p class="tituloSubOpcionMenu">Nuevo Artículo</p>
			</div>
			<div class="subOpcionMenu" id="editarArticulo">
				<img class="subIconoMenu" src="images/iconos/editar.png" alt="editarArticulo">
				<p class="tituloSubOpcionMenu">Editar Artículo</p>
			</div>
			<div class="subOpcionMenu" id="eliminarArticulo">
				<img class="subIconoMenu" src="images/iconos/eliminar.png" alt="eliminarArticulo">
				<p class="tituloSubOpcionMenu">Eliminar Artículo</p>
			</div>
			<div class="subOpcionMenu" id="buscarArticulo">
				<img class="subIconoMenu" src="images/iconos/buscar.png" alt="buscarArticulo">
				<p class="tituloSubOpcionMenu">Buscar Artículo</p>
			</div>
			<div class="subOpcionMenu" id="abrirListaPedidos">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="abrirListaPedidos">
				<p class="tituloSubOpcionMenu">Abrir Lista de Pedidos</p>
			</div>
			<div class="subOpcionMenu" id="venderStock">
				<img class="subIconoMenu" src="images/iconos/vender.png" alt="venderStock">
				<p class="tituloSubOpcionMenu">Vender Stock</p>
			</div>
			<div class="subOpcionMenu" id="recibirStock">
				<img class="subIconoMenu" src="images/iconos/recibir.png" alt="recibir">
				<p class="tituloSubOpcionMenu">Recibir Stock</p>
			</div>
			<div class="subOpcionMenu" id="pedirStock">
				<img class="subIconoMenu" src="images/iconos/pedir.png" alt="pedirStock">
				<p class="tituloSubOpcionMenu">Pedir Stock</p>
			</div>
			<div class="subOpcionMenu" id="devolverStock">
				<img class="subIconoMenu" src="images/iconos/devolver.png" alt="devolverStock">
				<p class="tituloSubOpcionMenu">Devolver Stock</p>
			</div>
		</div>
		<div class="opcionMenu" id="deptoArea">
			<img class="iconoMenu" src="images/iconos/deptoarea.png" alt="inventario">
			<p class="tituloOpcionMenu">Depto. y Área</p>
		</div>
		<div class="submenu" id="submenuDeptoArea">
			<div class="subOpcionMenu" id="nuevoDepto">
				<img class="subIconoMenu" src="images/iconos/nuevo.png" alt="nuevoDepto">
				<p class="tituloSubOpcionMenu">Nuevo Depto. y Área</p>
			</div>
			<div class="subOpcionMenu" id="abrirDeptos">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="abrirDeptos">
				<p class="tituloSubOpcionMenu">Abrir lista de deptos.</p>
			</div>
		</div>
		<div class="opcionMenu" id="almacen">
			<img class="iconoMenu" src="images/iconos/almacen.png" alt="inventario">
			<p class="tituloOpcionMenu">Almacén</p>
		</div>
		<div class="submenu" id="submenuAlmacen">
			<div class="subOpcionMenu" id="nuevoAlmacen">
				<img class="subIconoMenu" src="images/iconos/nuevo.png" alt="nuevoAlmacen">
				<p class="tituloSubOpcionMenu">Nuevo Almacén</p>
			</div>
			<div class="subOpcionMenu" id="abrirListaAlmacen">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="abrirListaAlmacen">
				<p class="tituloSubOpcionMenu">Abrir Lista</p>
			</div>
		</div>
		<div class="opcionMenu" id="proveedor">
			<img class="iconoMenu" src="images/iconos/proveedor.png" alt="inventario">
			<p class="tituloOpcionMenu">Proveedores</p>
		</div>
		<div class="submenu" id="submenuProveedor">
			<div class="subOpcionMenu" id="nuevoProveedor">
				<img class="subIconoMenu" src="images/iconos/nuevo.png" alt="nuevoProveedor">
				<p class="tituloSubOpcionMenu">Nuevo Proveedor</p>
			</div>
			<div class="subOpcionMenu" id="abrirListaProveedor">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="abrirListaProveedor">
				<p class="tituloSubOpcionMenu">Abrir Lista</p>
			</div>
		</div>
		<div class="opcionMenu" id="cliente">
			<img class="iconoMenu" src="images/iconos/cliente.png" alt="inventario">
			<p class="tituloOpcionMenu">Clientes</p>
		</div>
		<div class="submenu" id="submenuCliente">
			<div class="subOpcionMenu" id="nuevoCliente">
				<img class="subIconoMenu" src="images/iconos/nuevo.png" alt="nuevoCliente">
				<p class="tituloSubOpcionMenu">Nuevo Cliente</p>
			</div>
			<div class="subOpcionMenu" id="abrirListaCliente">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="abrirListaCliente">
				<p class="tituloSubOpcionMenu">Abrir Lista</p>
			</div>
		</div>
		<div class="opcionMenu" id="informes">
			<img class="iconoMenu" src="images/iconos/informe.png" alt="inventario">
			<p class="tituloOpcionMenu">Informes</p>
		</div>
		<div class="submenu" id="submenuInforme">
			<div class="subOpcionMenu" id="verInforme">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="verInforme">
				<p class="tituloSubOpcionMenu">Informes</p>
			</div>
			<div class="subOpcionMenu" id="verInformeAyD">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="verInformeAyD">
				<p class="tituloSubOpcionMenu">Informe por Almacén y Categoría</p>
			</div>
			<div class="subOpcionMenu" id="verInformePP">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="verInformePP">
				<p class="tituloSubOpcionMenu">Informe por Proveedor Predeterminado</p>
			</div>
			<div class="subOpcionMenu" id="verInformePedP">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="verInformePedP">
				<p class="tituloSubOpcionMenu">Informe de Pedido Pendiente</p>
			</div>
			<div class="subOpcionMenu" id="verInformeV">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="verInformeV">
				<p class="tituloSubOpcionMenu">Informe de Ventas</p>
			</div>
		</div>
		<div class="opcionMenu" id="graficas">
			<img class="iconoMenu" src="images/iconos/graficas.png" alt="inventario">
			<p class="tituloOpcionMenu">Gráficas</p>
		</div>
		<div class="submenu" id="submenuGrafica">
			<div class="subOpcionMenu" id="verGrafica">
				<img class="subIconoMenu" src="images/iconos/nuevo.png" alt="verGrafica">
				<p class="tituloSubOpcionMenu">Ver Grafica por Filtro</p>
			</div>
			<div class="subOpcionMenu" id="verCronograma">
				<img class="subIconoMenu" src="images/iconos/ver.png" alt="verCronograma">
				<p class="tituloSubOpcionMenu">Cronograma de Mantenimientos</p>
			</div>
		</div>
		<div class="opcionMenu">
			<img class="iconoMenu" src="images/iconos/auditoria.png" alt="inventario">
			<p class="tituloOpcionMenu">Auditorías</p>
		</div>
		<div class="opcionMenu">
			<img class="iconoMenu" src="images/iconos/bitacora.png" alt="inventario">
			<p class="tituloOpcionMenu">Bitácora</p>
		</div>
	</div>
	<!--Scripts-->
	<!--jquery-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<!--jquery-ui-->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!--menu-principal-->
	<script src="js/menu-principal.js"></script>
	<!-- dashboard -->
	<script src="js/dashboard.js"></script>
	<!--pooper-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<!--bootstrap-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
