<?php
require_once 'conectar.php';
require_once 'verificarusuario.php';
$nombre_c=$_POST['nombre_cliente'];
$persona_c=$_POST['persona_contacto'];
$nombre_contacto_c=$_POST['nombre_contacto'];
$direccion_facturacion_c=$_POST['direccion_facturacion'];
$ciudad_c=$_POST['ciudad_cliente'];
$estado_c=$_POST['estado_cliente'];
$cp_c=$_POST['cp_cliente'];
$pais_c=$_POST['pais_cliente'];
$telefonop_c=$_POST['telefonop_cliente'];
$telefonoa_c=$_POST['telefonoa_cliente'];
$fax_c=$_POST['fax_cliente'];
$correo_c = $_POST['correo_cliente'];
$direccion_o=$_POST['direccion_otros'];
$ciudad_o=$_POST['ciudad_otros'];
$estado_o=$_POST['estado_otros'];
$cp_o=$_POST['cp_otros'];
$pais_o=$_POST['pais_otros'];
$vendedor_o=$_POST['vendedor_otros'];
$notas_o=$_POST['notas_otros'];
$nom_usuario=$_SESSION['current_user'];

require_once 'conexion.php';

$sql = "INSERT INTO cliente (nombre_cliente, p_contacto_cliente, n_contacto_cliente, dir_facturacion_cliente, ciudad_cliente, estado_cliente, codigo_postal_cliente, pais_cliente, tel_personal_cliente, tel_alternativo_cliente, fax_cliente, email_cliente, direccion_otros, ciudad_otros, estado_otros, cp_otros, pais_otros, vendedor_otros, notas_otros, nom_usuario)
VALUES ('$nombre_c', '$persona_c', '$nombre_contacto_c', '$direccion_facturacion_c', '$ciudad_c', '$estado_c', '$cp_c', '$pais_c', '$telefonop_c', '$telefonoa_c', '$fax_c', '$correo_c', '$direccion_o', '$ciudad_o', '$estado_o', '$cp_o', '$pais_o', '$vendedor_o', '$notas_o', '$nom_usuario')";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-cliente-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>