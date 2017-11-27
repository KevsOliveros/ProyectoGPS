<?php
require_once 'conectar.php';
require_once 'verificarusuario.php';
$areas=unserialize($_GET["areas"]);
$nombre_depto=$_GET["nombre_depto"];
$nom_usuario=$_SESSION['current_user'];

require_once 'conexion.php';
$i=0;
$numero_areas = count($areas);
while ($i < $numero_areas) {
   $sql = "INSERT INTO deptoarea (nombre_depto, nombre_area, nom_usuario) VALUES (
      '$nombre_depto',
      '$areas[$i]',
      '$nom_usuario'
   )";
   if ($conn->query($sql) === TRUE) {
       require_once 'cargando.php';
       echo "<script>document.location.href='i-proveedor-lista.php';</script>";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   $conn->close();
}
?>