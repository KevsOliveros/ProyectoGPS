<?php
require_once 'conectar.php';

$nombre=$_GET['nom_proveedor'];

require_once 'conexion.php';

$sql = "DELETE FROM proveedor WHERE nombre_proveedor = $nombre";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: proveedor-lista.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>