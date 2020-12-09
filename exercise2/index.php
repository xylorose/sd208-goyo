<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title> Log In Form</title>
    <?php 
        if(isset($_POST['login'])){
            header('location: ./homepage.php');
        }
    ?>
</head>
<body>
    <div class="head">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="register()"> Register</button>
                <button type="button" class="toggle-btn" onclick="login()"> Log in</button>
                
            </div>
            <form id="login" class="input-group" actions="./index.php" method="POST">
                <input type="text" class="input-field" placeholder="Email Address" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name="login"> Log In</button>
            </form>
            <form id="register" class="input-group" actions="./index.php" method="GET">
                <input type="text" class="input-field" placeholder="First Name" required>
                <input type="text" class="input-field" placeholder="Last Name" required>
                <input type="text" class="input-field" placeholder="Address" required>
                <input type="email" class="input-field" placeholder="Email Address" required>
                <input type="email" class="input-field" placeholder="Confirm Email Address" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="text" class="input-field" placeholder="Confirm Password" required>
                <input type="checkbox" class="check-box"><span>I agree to the Terms & Conditions.</span>
                <button type="submit" class="submit-btn"> Register</button>
            </form>
            
           
        </div>
    </div>
    <script>
        var x= document.getElementById("login")
        var y= document.getElementById("register")
        var z= document.getElementById("btn")

        function register(){
            x.style.left = "-400px"
            y.style.left = "50px"
            z.style.left = "0"
        }
        function login(){
            x.style.left = "50px"
            y.style.left = "450px"
            
            z.style.left = "110px"
            
        }
        $(document).ready(function(){

            $("#register").on('submit',function(e){
                e.preventDefault();
                login()
            })
        })
    </script>
</body>
</html>