<?php
require_once 'conectar.php';

$nombre=$_GET['nom_proveedor'];

require_once 'conexion.php';

$sql = "DELETE FROM proveedor WHERE nombre_proveedor = $nombre";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-proveedor-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>