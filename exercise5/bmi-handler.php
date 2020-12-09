
<?php
    if(isset($_POST["btn"])){
        $height = $_POST["height"];
        $weight = $_POST["weight"];


    function bmi($weight, $height){
        $bmi = $weight/($height*$height) * 10000;
        return $bmi;
        }
    $bmi = bmi($weight, $height);

    if($bmi <= 18.5){
        $output = "UNDERWEIGHT ";
    }else if($bmi > 18.5 and $bmi <= 24.9){
        $output = "NORMAL";
    }else if($bmi > 24.9 and $bmi <= 29.9){
        $output= "OVERWEIGHT";
    }else if($bmi > 30.0){
        $output = "OBESE";
    } 
    // echo "You are  " . $bmi . "<br>";
    // echo "$output";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result BMI</title>
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
    .submit-btn{
        width: 85%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: 20px ;
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
        <h1 style="margin-left:120px">Result</h1>
        <h3 style="margin-left:80px;margin-top:50px"> You are <?php echo $output;?> </h3>
        <form action="./index.php">
        <button type="submit" class="submit-btn" name="return-btn">Return to Calculator</button>
        </form>
        </div>
    </div>
</body>
</html>