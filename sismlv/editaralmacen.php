
<?php
require_once 'conectar.php';

$nombre=$_POST['nombre_almacen'];
$direccion=$_POST['direccion_almacen'];
$anterior=$_POST['nom_alm'];

require_once 'conexion.php';

$sql = "UPDATE almacen SET nombre_almacen = '$nombre', direccion_almacen = '$direccion'
WHERE nombre_almacen = '$anterior'";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-almacen-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
