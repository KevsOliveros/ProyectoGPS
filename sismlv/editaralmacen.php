	
<?php
$servername = "localhost";
$username = "root";
$password = "Privada";
$dbname = "sismlv";

$nombre=$_POST['nombre_almacen'];
$direccion=$_POST['direccion_almacen'];
$anterior=$_GET['nom_alm'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE almacen SET nombre_almacen = '$nombre', direccion_almacen = '$direccion'
WHERE nombre_almacen = '$anterior'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: almacen-lista.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>