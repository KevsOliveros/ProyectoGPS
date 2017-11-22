<?php
session_start();
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","Privada","sismlv");
//$db = mysql_connect('host=localhost dbname=sismlv user=root password=Privada'); 
$query = "SELECT * FROM usuario WHERE nom_usuario ='$usuario'and pass_usuario = '$pass'";
//$result = pg_query($query);
$result=mysqli_query($con,$query);
echo "<script>alert('Resultado' +   )</script>";
if(mysqli_num_rows($result)>0  && mysqli_num_rows($result)<2){
   
    
    $_SESSION['token_Id']=1;
    $_SESSION['current_user'] = $usuario;
   echo "<script>document.location.href='menu.php';</script>";
    
     
}
else{
    
    echo "<script>alert('Usuario o Contrasena incorrectos')</script>";
    echo "<script>history.go(-1)</script>";
}

?>

<?php
/*$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","Privada","sismlv");
require 'conectar.php';
require 'conexion.php';

require 'conn.php';
$query = "SELECT * FROM usuario WHERE nom_usuario ='$usuario'and pass_usuario = '$pass'";
//$result = mysql_query($query);
//$result = mysql_fetch_array("$query");
$result=mysqli_query($con,$query);
echo "<script>alert('Resultado'  )</script>";
if(mysql_num_rows($result)>0  && mysql_num_rows($result)<2){
   
    session_start();
    $_SESSION['token_Id']=1;
    $_SESSION['current_user'] = $usuario;
    header("Location: menu.php");
    
     
}
else{
    
    echo "<script>alert('Usuario o Contrasena incorrectos')</script>";
    echo "<script>history.go(-1)</script>";
}
*/
?>

