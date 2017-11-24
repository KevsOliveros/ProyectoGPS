
<?php
require_once 'conectar.php';

$nombre=$_GET['nom_alm'];
require_once 'conexion.php';

$sql = "DELETE FROM almacen WHERE nombre_almacen = $nombre";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-almacen-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
