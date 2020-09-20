<!DOCTYPE html>
<?php 
    include "config.php";

    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["reg"]))
    {
        $name=$_POST["nm"];
        $sex=$_POST["sex"];
        $email=$_POST["em"];
        $phone=$_POST["phn"];

        $sql="INSERT INTO info (name,sex,email,phone) VALUES ('$name','$sex','$email','$phone')";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            header("location:index.php");
        }
        else
        {
            die("Data is not inserted".mysqli_error($conn));
        }
    }
    mysqli_close($conn);
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
    <div class="w3-container">
    <div class="w3-center w3-purple w3-padding-small w3-wide"><h1 style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Fill Survey Form</h1></div>
    <div class="w3-display-middle">
    <form name="crt" onsubmit="return validation()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <strong>Please fill this form and submit to add employee record to the database.</strong>
    <hr>
        <p>
            <label class="w3-bar"><b>Name</b></label>
            <input type="text" class="w3-input" name="nm" placeholder="Full Name" required>
        </p>
        <p>
            <label class="w3-bar"><b>Sex</b></label>
            <input type="radio" name="sex" value="male"> Male
            <input type="radio" name="sex" value="female"> Female
            <input type="radio" name="sex" value="others"> Others
        </p>
        <p>
            <label class="w3-bar"><b>Email</b></label>
            <input type="email" class="w3-input" name="em" placeholder="Email" required>
        </p>
        <p>
            <label class="w3-bar"><b>Phone No.</b></label>
            <input type="tel" class="w3-input" name="phn" placeholder="Phone Number" required>
        </p>
        <p>
            <a class="w3-button w3-black" href="index.php">Back</a>
            <button type="submit" class="w3-button w3-blue w3-right" name="reg">Submit</button>
        </p>
    </form>
    </div>
    </div>
</body>
</html>