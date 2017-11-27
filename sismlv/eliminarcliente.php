<?php
require_once 'conectar.php';

$nombre=$_GET['nom_cliente'];

require_once 'conexion.php';

$sql = "DELETE FROM cliente WHERE nombre_cliente = $nombre";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-cliente-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>