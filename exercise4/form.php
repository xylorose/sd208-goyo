<?php include('./form-handler.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Validation</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    .background{
        height:100%;
        width: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(moon.png);
        background-position:center;
        background-size: cover;
        position: absolute;
    }
    .form-box{
        width:350px;
        height:350px;
        position: relative;
        margin: 10% auto;
        background:#fff;
        opacity: 85%;
        padding: 15px;
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
        background: linear-gradient(to right, #93da11, #ffad06);
    }
    </style>
</head>
<body>
    <div class="background">
        <div class="form-box"> 
        <form action="./form-handler.php" id="fill" class="input-group" method="POST">
            <input type="text" name="firstName"  class="input-field" placeholder="First Name" ><br>
            <input type="text" name="lastName" class="input-field" placeholder="Last Name" ><br>
            <input type="text" name="email" class="input-field" placeholder="Enter Email" ><br>
            <input type="text" name="address" class="input-field" placeholder="Enter Address" ><br>
            <button type="submit" class="submit-btn" name="fill-btn">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>