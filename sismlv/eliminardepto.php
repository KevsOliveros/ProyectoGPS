
<?php
require_once 'conectar.php';

$nombre=$_GET['nom_alm'];
$area=$_GET['nom_area'];
require_once 'conexion.php';

$sql = "DELETE FROM deptoarea WHERE nombre_depto = AES_ENCRYPT($nombre,UNHEX('000')) AND nombre_area = AES_ENCRYPT($area,UNHEX('000'))";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-deptoarea-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>