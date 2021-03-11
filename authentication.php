<?php 
    if(empty($_SESSION['id'])){
        header('location:login.php');
    }
    if($_SESSION['time'] <= time()){
        session_destroy();
        header('location:login.php');
    }
?>