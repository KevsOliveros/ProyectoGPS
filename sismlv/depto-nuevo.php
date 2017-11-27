<<<<<<< HEAD
<?php 
$areas = array();
$nombre_area = "";
$primera = $_GET["primera"];
$indice;
$eliminar=0;
$numero_areas = 0;
if($primera==1) {
   $primera=0;
   $indice = 0;
} else {
   $areas = unserialize($_GET["areas"]);
   $indice = $_GET["indice"];
   $indice++;
   $nombre_area = $_GET["nombre_area"];
   $areas[] = $nombre_area;
   $numero_areas = count($areas);
}
$eliminar = $_GET["eliminar"];
if($eliminar == 1) {

   $nom_area = $_GET["nom_area"];
   $areas = array_diff($areas, array("$nom_area") );
   $areas = array_diff($areas, array("codigochafa") );
   $numero_areas = count($areas);
}
// $areas = array_diff($areas, array("1321") );
// $areas = array_diff($areas, array("4") );
?>
<div class="row" id="ventanaTitulo">
	<div class="col-12">
		<span class="icon-nuevo"></span>
		<span>Nuevo Departamento y Área</span>
	</div>
</div>
<br>
   <div class="col-12">
      <form action="nuevo-depto.php" method="get">
         <div class="form-group">
            <div class="row">
               <div class="col-12 col-lg-4">
                  <label for="nombre_depto">Nombre del departamento:</label>
               </div>
               <div class="col-12 col-lg-8">
                  <input class="form-control" type="text" placeholder="" name="nombre_depto" required="required" >
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
                        <?php
                           if($numero_areas > 0) {
                              $i = 0;
                              while($i < $numero_areas) {
                                 if(!isset($areas[$i]))
                                    $i++;
                                 echo
                                    '<tr class="fila" id='.$i.'>'.
                                       '<td>'.
                                       $areas[$i].
                                       '</td>'.
                                       '<td>'.
                                          '<a href="i-depto-nuevo.php?areas='. htmlentities(serialize($areas)).
                                             '&primera='.$primera.'&indice='.$indice.'&nom_area='.$areas[$i].'&eliminar=1&nombre_area=codigochafa'.'">'.
                                             '<div class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></div>'.
                                          '</a>'.
                                       '</td>'.
                                    '</tr>';
                                 $i++;
                              }
                           }
                        ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-12 col-lg-6 offset-lg-3 btn btn-dark" data-toggle="modal" data-target="#modal-nuevo-depto">Añadir</div>
            </div>
         </div>
         <input type="hidden" name="areas" value="<?php echo htmlentities(serialize($areas)); ?>">
         <input type="submit" class="btn btn-success col-12 col-sm-4 offset-sm-1" value="Aceptar" style="margin-bottom: 1%;">
         <input type="reset" class="btn btn-danger col-12 col-sm-4 offset-sm-1" value="Cancelar" style="margin-bottom: 1%;">
      </form>
   </div>
</div>
=======
<?php   
   session_start();
    if(!isset($_SESSION['token_Id'])) header('Location: index.php');  
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nuevo Departamento y Area</title>
	<?php
		require_once 'libs.php';
	?>
	<!--CSS almacen-nuevo.php-->
	<link rel="stylesheet" href="css/almacen-nuevo.css">
</head>

<body>
	<?php
		require_once 'menu-superior.php';
		require_once 'dashboard.php';
	?>
		<div class="container">
			<div class="row">
				<div class="col-12" id="tituloVentana">
					<div class="row">
						<div class="col-2" id="iconoVentana">
							<img class="align-middle" src="images/iconos/nuevo.png" alt="nuevo">
						</div>
						<div class="col-10" id="nombreVentana">
							<p>Nuevo Departamento y Area</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="main">
			<div class="row" id="f">
				<div class="col-12">
					<form action="" id="formulario">
						<div class="form-group">
							<label for="nombre">Nombre del Departamento:</label>
							<input class="form-control" type="text" placeholder="Introduzca un nombre">
						</div>
						<div class="form-group">
							<label for="nombre">Areas:</label>
							<textarea disabled="true" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							<input class="btn btn-info" type="button" value="Añadir Area">
							<input class="btn btn-warning" type="button" value="Quitar Area">
							<!--
							<input class="btn btn-success" type="button" value="Añadir Area">
							<input class="btn btn-danger" type="button" value="Quitar Area">
							-->
						</div>
						<div class="form-group" id="botones">
							<input class="btn btn-success" type="submit" value="Aceptar">
							<input class="btn btn-danger" type="submit" value="Cancelar">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--Scripts-->
		<?php
		require_once 'scripts.php';
	?>
</body>
>>>>>>> 6e99b9323b9ec2c2741ec54b8d405dd84a6f394f

</html>
