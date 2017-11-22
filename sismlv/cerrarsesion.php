<?php 
    session_start();
    unset($_SESSION['token_Id']);
    session_destroy();
    echo "<script>document.location.href='index.php';</script>";
    
?>