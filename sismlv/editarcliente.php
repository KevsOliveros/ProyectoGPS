<?php
require_once 'conectar.php';

require_once 'verificarusuario.php';
$original=$_POST['clienteOriginal'];
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

$sql = "UPDATE cliente SET
   nombre_cliente = '$nombre_c',
   p_contacto_cliente = '$persona_c',
   n_contacto_cliente = '$nombre_contacto_c',
   dir_facturacion_cliente = '$direccion_facturacion_c',
   ciudad_cliente = '$ciudad_c',
   estado_cliente = '$estado_c',
   codigo_postal_cliente= '$cp_c',
   pais_cliente = '$pais_c',
   tel_personal_cliente = '$telefonop_c',
   tel_alternativo_cliente = '$telefonoa_c',
   fax_cliente = '$fax_c',
   email_cliente = '$correo_c',
   direccion_otros = '$direccion_o',
   ciudad_otros = '$ciudad_o',
   estado_otros = '$estado_o',
   cp_otros = '$cp_o',
   pais_otros = '$pais_o',
   vendedor_otros = '$vendedor_o',
   notas_otros = '$notas_o',
   nom_usuario = '$nom_usuario' WHERE nombre_cliente = '$original';
   ";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-cliente-lista.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>