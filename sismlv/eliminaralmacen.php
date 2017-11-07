	
<?php
require_once 'conectar.php';

$nombre=$_GET['nom_alm'];

require_once 'conexion.php';

$sql = "DELETE FROM almacen WHERE nombre_almacen = '$nombre'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: almacen-lista.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>