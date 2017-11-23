
<?php
require_once 'conectar.php';

require_once 'verificarusuario.php';
$original=$_POST['proveedorOriginal'];
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

$sql = "UPDATE proveedor SET
   nombre_proveedor = '$nombre_p',
   contacto_proveedor = '$persona_p',
   nombrecontacto_proveedor = '$nombre_contacto_p',
   direccion_proveedor = '$direccion',
   telefonop_proveedor = '$telefonop_p',
   telefonoa_proveedor = '$telefonoa_p',
   fax_proveedor = '$fax_p',
   email_proveedor = '$correo_p',
   nom_usuario = '$nom_usuario' WHERE nombre_proveedor = '$original';
   ";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-proveedor-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
