	
<?php
require_once 'conectar.php';
require_once 'verificarusuario.php';
$codigo=$_POST['codigo'];//
$descripcion=$_POST['descripcion'];//
$departamento=$_POST['departamento'];//
$area=$_POST['area'];//
$costo_compra_unitario=$_POST['costo_compra_unitario'];//
$precio_venta_unitario=$_POST['precio_venta_unitario'];//
$impuesto=$_POST['impuesto'];//
//$unidad_medida=$_POST['unidad_medida'];//
$nota=$_POST['nota'];//
$usr = $_SESSION['current_user'];
require_once 'conexion.php'; 

//$sql = "INSERT INTO usuario (nombre_del_usuario, nom_usuario, pass_usuario) VALUES (AES_ENCRYPT('$nombre',UNHEX('000')), AES_ENCRYPT('$usuario',UNHEX('000')), AES_ENCRYPT('$contra',UNHEX('000')))";
 
$sql = "INSERT INTO `articulo`
(`departamento_articulo`, `area_articulo`, `descripcion_articulo`, `codigo_articulo`, `nombre_proveedor`, `fecha_instalacion_articulo`, `tipo_mantenimiento_articulo`, `fecha_mantenimiento_articulo`, `estatus_articulo`, `precio_costo_articulo`, `precio_venta_articulo`, `impuesto_articulo`, `unidad_medida_articulo`, `vida_util_articulo`, `notas_articulo`, `nom_usuario`) 
VALUES 
(AES_ENCRYPT('$departamento',UNHEX('000')),
AES_ENCRYPT('$area',UNHEX('000')),
AES_ENCRYPT('$descripcion',UNHEX('000')),
AES_ENCRYPT('$codigo',UNHEX('000')),
AES_ENCRYPT('prov1',UNHEX('000')),
AES_ENCRYPT('1/1/1',UNHEX('000')),
AES_ENCRYPT('mant1',UNHEX('000')),
AES_ENCRYPT('1/1/1',UNHEX('000')),
AES_ENCRYPT('chido',UNHEX('000')),
AES_ENCRYPT('$costo_compra_unitario',UNHEX('000')),
AES_ENCRYPT('$precio_venta_unitario',UNHEX('000')),
AES_ENCRYPT('$impuesto',UNHEX('000')),
AES_ENCRYPT('pieza',UNHEX('000')),
AES_ENCRYPT('12 meses',UNHEX('000')),
AES_ENCRYPT('$nota',UNHEX('000')),
AES_ENCRYPT('$usr',UNHEX('000')))";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-articulo-editar.php';</script>";
} else {
    echo "<script>alert('Ocurrio algun error. puede que haya ingresado valores erroneos o codigos repetidos')</script>";
    echo "<script>history.go(-1)</script>";
}

$conn->close();
?>