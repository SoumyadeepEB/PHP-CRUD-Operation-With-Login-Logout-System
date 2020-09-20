<?php 
    include "config.php"; 
    $id=$_GET["id"];
    echo $id;

    $sql="DELETE FROM info WHERE id='$id'";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
        header("location:index.php");
    }
    else
    {
        die("Data is not deleted".mysqli_error($conn));
    }
    mysqli_close($conn);
?>