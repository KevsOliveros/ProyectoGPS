<?php
session_start();
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
require 'conn.php'; 
$query = "SELECT AES_DECRYPT(nom_usuario,UNHEX('000')) AS nom_usuario, AES_DECRYPT(pass_usuario,UNHEX('000')) AS pass_usuario, AES_DECRYPT(nombre_del_usuario,UNHEX('000')) AS nombre_del_usuario FROM usuario WHERE nom_usuario = AES_ENCRYPT('$usuario',UNHEX('000')) and pass_usuario = AES_ENCRYPT('$pass',UNHEX('000'))";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0  && mysqli_num_rows($result)<2){
    
    
    $_SESSION['token_Id']=1;
    $_SESSION['current_user'] = $usuario;
    //$_SESSION['nombre_del_user'] = $row['nombre_del_usuario'];
    $_SESSION['nombre_del_user'] = "pruebadirecta";
    
   echo "<script>document.location.href='menu.php';</script>";
    
     
}
else{
    
    echo "<script>alert('Usuario o Contrasena incorrectos')</script>";
    echo "<script>history.go(-1)</script>";
}

?>

