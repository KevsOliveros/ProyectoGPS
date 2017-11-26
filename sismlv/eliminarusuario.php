
<?php
require_once 'conectar.php';

$nombre=$_GET['nom_usr'];
require_once 'conexion.php';

$sql = "DELETE FROM usuario WHERE nom_usuario = AES_ENCRYPT('$nombre', UNHEX('000'))";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='menuadmin.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
