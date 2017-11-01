	
<?php
$servername = "localhost";
$username = "root";
$password = "Privada";
$dbname = "sismlv";

$nombre=$_POST['nombre_almacen'];
$direccion=$_POST['direccion_almacen'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO almacen (nombre_almacen, direccion_almacen)
VALUES ('$nombre', '$direccion')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: almacen-lista.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>