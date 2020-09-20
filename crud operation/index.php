<!DOCTYPE html>
<?php require_once "config.php"; ?>
<html>
    <head>
        <title>Survey Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="w3-container">
        <div class="w3-center w3-indigo w3-padding-small w3-wide"><h1 style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Survey Details</h1></div>
        <div class="w3-center"><a id="c" href="create.php" class="w3-button w3-green w3-margin-top"><i class="fa fa-plus" aria-hidden="true"></i> Add Data</a></div>
        <?php 
            $sql = "SELECT * FROM info";
            $result = mysqli_query($conn, $sql);

            if ($result)
            {
        ?>
        <br>
        <table border="3" class="w3-table w3-table-all w3-centered">
        <thead>
            <tr class="w3-teal">
                <th>ID</th> <th>NAME</th> <th>SEX</th> <th>EMAIL</th> <th>MOBILE NO.</th> <th>TIMESTAMP</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody style="text-align:center">
        <?php
            if (mysqli_num_rows($result) > 0)
            {
                while ($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr style='text-align:center'>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["sex"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["phone"]."</td>";
                    echo "<td>".$row["time"]."</td>";
                    echo "<td><a class='w3-margin-right' href='update.php?id=". $row['id'] ."'><i class='fa fa-pencil-square-o' style='color:blue;font-size:20px' aria-hidden='true'></i></a>";
                    echo "<a class='w3-margin-left' href='delete.php?id=". $row['id'] ."'><i class='fa fa-trash-o' style='color:red;font-size:20px' aria-hidden='true'></i></a></td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }
            else
            {
                echo "<h4>No Record Found</h4>";
            }
        }
        else
        {
            echo "<h4>Could not able to execute</h4>".mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </div>
    </body>
</html>