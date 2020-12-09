<?php
    include "connect.php";


    if(isset($_GET["id"])){
        $sql = "SELECT * FROM `students` WHERE id=".$_GET['id'];
        $result = mysqli_query($conn, $sql);
        $getRow=  mysqli_fetch_assoc($result) ;
    }
    
    if(isset($_POST["submit"])){
        $lname = $_POST["lastname"];
        $fname = $_POST["firstname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        //define the sql query
        $sql_update = "UPDATE `students` SET lastname='".$lname."', firstname='". $fname."',email='".$email."',password='".$password . "' where id=".$_POST["id"];

        //check the query if it is executed well
        if(mysqli_query($conn, $sql_update)){
            //echo "Updated new row";
            header('location:./registeredOutput.php ');
        }else {
            echo "ERROR: ". mysqli_error($conn);  
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
    <div class="container bg-default" style="width:18rem">
        <img src="images.png" alt="avatar img" class="card-img-top">
        <form class="card" action="update.php" method="POST" >
            <h5 class="card-title ml-3">Sign Up</h5>
            <input type="hidden" name="id" value="<?php echo $getRow["id"];?>">
            <input class="card-text mx-2 my-2" type="text" name="lastname" value="<?php echo $getRow["lastname"]?>" placeholder="Enter LastName" required>
            <input class="card-text mx-2 my-2" type="text" name="firstname"  value="<?php echo $getRow["firstname"]?>" placeholder="Enter FirstName" required>
            <input class="card-text mx-2 my-2" type="email" name="email" value="<?php echo $getRow["email"]?>" placeholder="Enter Email" required>
            <input class="card-text mx-2 my-2" type="password" name="password" placeholder="Enter Password" required>
            <input class="btn btn-secondary mt-3" type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>


