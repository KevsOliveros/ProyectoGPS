<?php   
   session_start();
    if(!isset($_SESSION['token_Id'])) 
    echo "<script>document.location.href='index.php';</script>";
?>