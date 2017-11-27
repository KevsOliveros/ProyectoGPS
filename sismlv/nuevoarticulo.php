	
<?php
require_once 'conectar.php';
require_once 'verificarusuario.php';
$nombre=$_POST['nombre_del_usuario'];
$usuario=$_POST['nom_usuario'];
$contra=$_POST['pass_usuario'];
require_once 'conexion.php'; 

$sql = "INSERT INTO usuario (nombre_del_usuario, nom_usuario, pass_usuario)
VALUES (AES_ENCRYPT('$nombre',UNHEX('000')), AES_ENCRYPT('$usuario',UNHEX('000')), AES_ENCRYPT('$contra',UNHEX('000')))";

//INSERT INTO `articulo`(`departamento_articulo`, `area_articulo`, `descripcion_articulo`, `codigo_articulo`, `nombre_proveedor`, `fecha_instalacion_articulo`, `tipo_mantenimiento_articulo`, `fecha_mantenimiento_articulo`, `estatus_articulo`, `precio_costo_articulo`, `precio_venta_articulo`, `impuesto_articulo`, `unidad_medida_articulo`, `vida_util_articulo`, `notas_articulo`, `nom_usuario`) VALUES (AES_ENCRYPT('depto1',UNHEX('000')),AES_ENCRYPT('area1',UNHEX('000')),AES_ENCRYPT('desc1',UNHEX('000')),AES_ENCRYPT('111',UNHEX('000')),AES_ENCRYPT('prov1',UNHEX('000')),AES_ENCRYPT('1/1/1',UNHEX('000')),AES_ENCRYPT('mant1',UNHEX('000')),AES_ENCRYPT('1/1/1',UNHEX('000')),AES_ENCRYPT('chido',UNHEX('000')),AES_ENCRYPT('100.00',UNHEX('000')),AES_ENCRYPT('110.00',UNHEX('000')),AES_ENCRYPT('0.08',UNHEX('000')),AES_ENCRYPT('um1',UNHEX('000')),AES_ENCRYPT('12 meses',UNHEX('000')),AES_ENCRYPT('notas1',UNHEX('000')),AES_ENCRYPT('prueba',UNHEX('000')))

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='menuadmin.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>