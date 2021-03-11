<?php 
    session_start();
    include "authentication.php";
    include "config.php";

    $sql = "SELECT * FROM users";
    $query = mysqli_query($link,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        .fas{
            font-size: 20px;
        }
        .fa-edit:hover{
            color: green;
        }
        .fa-trash:hover{
            color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <p class="navbar-brand">
            <?php if(isset($_SESSION['id'])){ ?>
                Welcome <?php echo $_SESSION['name'] ?>
            <?php } ?>
        </p>
        <p class="float-right">
            <a href="logout.php" class="btn btn-danger"><i class='fas fa-sign-out-alt'></i> Logout</a>
        </p>
    </nav>
    <div class="container">
        <h1 class="text-center">User List</h1>

        <div class="text-right"><a href="create.php" class="btn btn-success mb-2"><i class='fas fa-plus'></i> Add User</a></div>

        <?php if(isset($_SESSION['success'])){ ?>
            <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php } ?>
        <?php if(isset($_SESSION['error'])){ ?>
            <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php } ?>
        <?php if(isset($_SESSION['warning'])){ ?>
            <div class="alert alert-warning"><?php echo $_SESSION['warning']; unset($_SESSION['warning']); ?></div>
        <?php } ?>

        <table class="table table-bordered table-striped table-hover">
            <thead class="bg-dark text-center text-white">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php if(mysqli_num_rows($query) == 0){ ?>
                    <tr><td colspan="7" class="text-center">No record found</td></tr>
                <?php }else{ ?>
                    <?php while($row = mysqli_fetch_assoc($query)){ ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td>
                            <?php if($row['sex'] == 'male'){ ?>
                                <i class='fas fa-male'></i> Male
                            <?php } ?>
                            <?php if($row['sex'] == 'female'){ ?>
                                <i class='fas fa-female'></i> Female
                            <?php } ?>
                        </td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><img src="uploads/<?php echo $row['image'] ?>" width="100" height="125"></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['id'] ?>" class="text-dark"><i class='fas fa-edit'></i></a>&nbsp;&nbsp;
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="text-dark"><i class='fas fa-trash'></i></a>
                        </td>
                    </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
</body>
</html>