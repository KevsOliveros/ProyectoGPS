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
      AES_ENCRYPT('$nombre_depto',UNHEX('000')),
      AES_ENCRYPT('$areas[$i]',UNHEX('000')),
      AES_ENCRYPT('$nom_usuario',UNHEX('000'))
   )";
   if ($conn->query($sql) === TRUE) {
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
   $i++;
   
}
if($i == $numero_areas) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-deptoarea-lista.php';</script>";
}
$conn->close();
?>