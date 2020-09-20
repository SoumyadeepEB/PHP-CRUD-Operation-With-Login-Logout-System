<!DOCTYPE html>
<?php 
    include "config.php";
    $id=$_GET["id"];

    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["update"]))
    {
        $name=$_POST["nm"];
        $sex=$_POST["sex"];
        $email=$_POST["em"];
        $phone=$_POST["phn"];

        $sql="UPDATE info SET name='$name',sex='$sex',email='$email',phone='$phone' WHERE id='$id'";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            header("location:index.php");
        }
        else
        {
            die("Data is not updated".mysqli_error($conn));
        }
    }
?>
<html>
<head>
    <title>Survey Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
    
    $view = "SELECT * FROM info WHERE id='$id'";
    $req = mysqli_query($conn, $view);

    $row=mysqli_fetch_assoc($req);


?>
    <div class="w3-container">
    <div class="w3-center w3-pink w3-padding-small w3-wide"><h1 style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Update Survey Form</h1></div>
    <div class="w3-display-middle">
    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="POST">
    <strong>Please edit the input values and submit to update the record.</strong>
    <hr>
        <p>
            <label class="w3-bar"><b>Name</b></label>
            <input type="text" class="w3-input" name="nm" placeholder="Full Name" value="<?php echo $row['name'] ?>" required>
        </p>
        <p>
            <label class="w3-bar"><b>Sex</b></label>
            <?php 
                $row["sex"];
            ?>
            <input type="radio" name="sex" value="male"> Male
            <input type="radio" name="sex" value="female"> Female
            <input type="radio" name="sex" value="others"> Others
        </p>
        <p>
            <label class="w3-bar"><b>Email</b></label>
            <input type="email" class="w3-input" name="em" placeholder="Email" value="<?php echo $row['email'] ?>" required>
        </p>
        <p>
            <label class="w3-bar"><b>Phone No.</b></label>
            <input type="tel" class="w3-input" name="phn" placeholder="Phone Number" value="<?php echo $row['phone'] ?>" required>
        </p>
        <p>
            <a class="w3-button w3-black" href="index.php">Back</a>
            <button type="submit" class="w3-button w3-blue w3-right" name="update">Update</button>
        </p>
    </form>
    </div>
</body>
</html>