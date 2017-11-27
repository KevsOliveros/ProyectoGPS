	
<?php
require_once 'conectar.php';
require_once 'verificarusuario.php';
$nombre_p=$_POST['nombre_proveedor'];
$persona_p=$_POST['persona_contacto'];
$nombre_contacto_p=$_POST['nombre_contacto'];
$direccion=$_POST['direccion_proveedor'];
$telefonop_p=$_POST['telefonop_proveedor'];
$telefonoa_p=$_POST['telefonoa_proveedor'];
$fax_p=$_POST['fax_proveedor'];
$correo_p = $_POST['correo_proveedor'];
$nom_usuario=$_SESSION['current_user'];

require_once 'conexion.php';

$sql = "INSERT INTO proveedor (nombre_proveedor, contacto_proveedor, nombre_contacto_proveedor, telefono_p_proveedor, telefono_a_proveedor, fax_proveedor, email_proveedor, nom_usuario)
VALUES ('$nombre_p', '$persona_p', '$nombre_contacto_p', '$telefonop_p', '$telefonoa_p', '$fax_p', '$correo_p', '$nom_usuario')";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-proveedor-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>