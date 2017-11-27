  
<?php
require_once 'conectar.php';

$codigo=$_POST['codigo'];//
$descripcion=$_POST['descripcion'];//
$departamento=$_POST['departamento'];//
$area=$_POST['area'];//
$costo_compra_unitario=$_POST['costo_compra_unitario'];//
$precio_venta_unitario=$_POST['precio_venta_unitario'];//
$impuesto=$_POST['impuesto'];//
//$unidad_medida=$_POST['unidad_medida'];//
$notas=$_POST['nota'];//
$ant = $_GET['cod_ant'];
$usr = $_SESSION['current_user'];

require_once 'conexion.php';

$sql = "UPDATE articulo SET 
codigo_articulo = AES_ENCRYPT('$codigo', UNHEX('000')), 
descripcion_articulo = AES_ENCRYPT('$descripcion', UNHEX('000')),
precio_costo_articulo = AES_ENCRYPT('$costo_compra_unitario', UNHEX('000')), 
precio_venta_articulo = AES_ENCRYPT('$precio_venta_unitario', UNHEX('000')), 
impuesto_articulo = AES_ENCRYPT('$impuesto', UNHEX('000')), 
notas_articulo = AES_ENCRYPT('$notas', UNHEX('000')) 
WHERE codigo_articulo = AES_ENCRYPT('$ant', UNHEX('000'))";

if ($conn->query($sql) === TRUE) {
    require_once 'cargando.php';
    echo "<script>document.location.href='i-articulo-editar.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
