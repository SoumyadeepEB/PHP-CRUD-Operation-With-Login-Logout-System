<?php 
    session_start();
    include "authentication.php";
    include "config.php";

    $id = $_GET['id'];

    $sql = "SELECT image FROM users WHERE id='$id'";
    $query = mysqli_query($link,$sql);
    $arr = mysqli_fetch_assoc($query);
    //print_r($arr);die;

    $dsql = "DELETE FROM users WHERE id='$id'";
    $dquery = mysqli_query($link,$dsql);
    if($dquery){
        if($arr['image'] != 'avatar.png'){
            $image_path = 'uploads/'.$arr['image'];
            unlink($image_path);
        }
        $_SESSION['warning'] = "One record deleted successfully";
        header('location:index.php');
    }else{
        $_SESSION['error'] = "Something is wrong, Record not deleted";
        header('location:index.php');
    }
?>