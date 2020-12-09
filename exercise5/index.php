<?php include('./bmi-handler.php');
     if(isset($_POST["return-btn"])){

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    .background{
        height:100%;
        width: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(health.png);
        background-position:center;
        background-size: cover;
        position: absolute;
    }
    .form-box{
        width:350px;
        height:250px;
        position: relative;
        margin: 10% auto;
        background:#fff;
        opacity: 85%;
        padding: 30px;
    }
    .input-group{
        top: 80px;
        position:absolute;
        width: 280px;
    }
    .input-field{
        width: 100%;
        padding: 10px 0;
        margin: 5px 30px;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
    }
    .submit-btn{
        width: 85%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: 5px 50px;
        border: 0;
        outline: none;
        border-radius: 30px; 
        margin-top: 30px;
        background: linear-gradient(to right, #8000FF, #FF0080);
    }
    </style>
</head>
<body>
    <div class="background">
        <div class="form-box">
        <h1 style="margin-left:130px">BMI</h1>
            <form action="./bmi-handler.php" class="input-group" method="POST">
            <input type="number" name="height" class="input-field" placeholder="Enter Height in centimeter" required><br>
            <input type="number" name="weight" class="input-field" placeholder="Enter Weight in kilogram" required><br>
            <button type="submit" class="submit-btn" name="btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>