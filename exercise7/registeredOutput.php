<?php
    include "connect.php";

    if(isset($_POST['update-btn'])){
        header('location: update.php?id='.$_POST['id']);
    }

    if(isset($_POST['delete-btn'])){
        $sql_delete = "DELETE FROM `students` WHERE id =" . $_POST['id'];

        //check the query if it is executed well
    if($conn->query($sql_delete) === TRUE){
        //echo "Deleted Successfully";
    }else{
        echo "ERROR: ". $conn->error;
    }
    }
    $sql = "SELECT * FROM `students`";

    $result = mysqli_query($conn,$sql);

    //button that will lead you back in sign up form
    if(isset($_POST['back'])){
        header('location: index.php');
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
<div class="container mt-5">
<table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(mysqli_num_rows($result) > 0){
                //output data each row
                while($row = $result -> fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["lastname"];?></td>
                        <td><?php echo $row["firstname"];?></td>
                        <td><?php echo $row["email"];?></td>
                        <td>
                            <form action="./registeredOutput.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                            <button class="btn btn-primary" type="submit" name="update-btn">Update</button>
                            <button class="btn btn-danger" type="submit" name="delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
            <?php
                }
            }else{
                echo " 0 results";
            }
            ?>
        </tbody>
   </table>
</div>
<form action="index.php" method="POST">
<button class="btn btn-info float-right my-5 mr-5" type="submit" name="back">Back to the Sign Up Form</button>
</form>
</body>
</html>