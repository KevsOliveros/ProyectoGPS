	
<?php
require_once 'conectar.php';

$nombre=$_POST['nombre_almacen'];
$direccion=$_POST['direccion_almacen'];
$nom_usuario=$_POST['nom_usuario'];
require_once 'conexion.php';

$sql = "INSERT INTO almacen (nombre_almacen, direccion_almacen, nom_usuario)
VALUES ('$nombre', '$direccion', '$nom_usuario')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script>document.location.href='almacen-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>