 
<?php
require_once 'conectar.php';

$nomusr=$_POST['usuarioeditar'];
$nombre=$_POST['nombreeditar'];
$anterior=$_POST['nom_usr'];

require_once 'conexion.php';

$sql = "UPDATE usuario SET nom_usuario = AES_ENCRYPT('$nomusr', UNHEX('000')), nombre_del_usuario = AES_ENCRYPT('$nombre', UNHEX('000')) WHERE nom_usuario = AES_ENCRYPT('$anterior', UNHEX('000'))";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='menuadmin.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
