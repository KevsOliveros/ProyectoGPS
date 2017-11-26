	
<?php
require_once 'conectar.php';
require_once 'verificarusuario.php';
$nombre=$_POST['nombre_del_usuario'];
$usuario=$_POST['nom_usuario'];
$contra=$_POST['pass_usuario'];
require_once 'conexion.php'; 

$sql = "INSERT INTO usuario (nombre_del_usuario, nom_usuario, pass_usuario)
VALUES (AES_ENCRYPT('$nombre',UNHEX('000')), AES_ENCRYPT('$usuario',UNHEX('000')), AES_ENCRYPT('$contra',UNHEX('000')))";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='menuadmin.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>