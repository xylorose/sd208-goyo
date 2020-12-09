<?php
    include "connect.php";

    if(isset($_POST["submit"])){
        $lName = $_POST["lastname"];
        $fName = $_POST["firstname"];
        $email = $_POST["email"];
        $passWord = $_POST["password"];
        //define the sql query
        $sql = "INSERT INTO `students`(`firstname`,`lastname`,`email`,`password`) VALUES('$fName','$lName','$email','$passWord')";

        if(mysqli_query($conn, $sql)){
            echo "Inserted new row";

            header('location: registeredOutput.php'); 
                  
        }else{
            echo "ERROR: " . mysqli_error($conn);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Registration Form</title>
</head>
<body>
    <div class="container" style="width:18rem">
        <img src="images.png" alt="avatar img" class="card-img-top">
        <form class="card" action="index.php" method="POST" >
            <h5 class="card-title ml-3">Sign Up</h5>
            <input class="card-text mx-2 my-2" type="text" name="lastname" placeholder="Enter LastName" required>
            <input class="card-text mx-2 my-2" type="text" name="firstname" placeholder="Enter FirstName" required>
            <input class="card-text mx-2 my-2" type="email" name="email" placeholder="Enter Email" required>
            <input class="card-text mx-2 my-2" type="password" name="password" placeholder="Enter Password" required>
            <input class="btn btn-success mt-3" type="submit" name="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>