
<?php
require_once 'conectar.php';

$nombre=$_GET['cod_art'];
require_once 'conexion.php';

$sql = "DELETE FROM articulo WHERE codigo_articulo = AES_ENCRYPT($nombre,UNHEX('000'))";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-eliminar-articulo.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
