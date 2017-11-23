	
<?php
require_once 'conectar.php';
require_once 'verificarusuario.php';
$nombre=$_POST['nombre_almacen'];
$direccion=$_POST['direccion_almacen'];
$nom_usuario= $_SESSION['current_user'];
require_once 'conexion.php';

$sql = "INSERT INTO almacen (nombre_almacen, direccion_almacen, nom_usuario)
VALUES ('$nombre', '$direccion', '$nom_usuario')";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-almacen-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>