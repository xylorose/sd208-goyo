<?php
    session_start();

    if(isset($_GET["add-btn"])){
        $_SESSION['bookmarks'][$_GET['enter_bookmark']] = $_GET['enter_url'];
    }
    if(isset($_GET['del'])){
        unset($_SESSION['bookmarks'][$_GET['delmark']]);
    }
    if(isset($_GET['clear-btn'])){
        $_SESSION['bookmarks']  = [];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmark Activity</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    .background{
        height:100%;
        width: 100%;
        background: linear-gradient(to right, #ff6666, #FF0080);
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
        opacity: 80%;
        padding: 30px;
    }
    .input-field{
        width: 100%;
        padding: 10px 0;
        margin: 5px 5px;
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
        display: inline-block;
        margin: 5px 25px;
        border: 0;
        outline: none;
        border-radius: 40px; 
        margin-top: 5px;
        background: linear-gradient(to right, #8000FF, #FF0080);
    }
    #delete_btn{
        width: 20%;
    }
    .container{
        margin: 5px auto;
        background-color: white;
        width:30%;
        display:flex;
        justify-content: space-between;
    }
    </style>
</head>
<body>
    <div class="background">
    <form action="./web-1.php" method="GET" class="form-box">
    <h2 style="margin-left:75px">Bookmark Name</h2>
    <input type="text" name="enter_bookmark" class="input-field" placeholder="Enter Bookmark Name" required><br><br>
    <h2 style="margin-left:140px">URL</h2>
    <input type="text" name="enter_url" class="input-field" placeholder="Enter URL" required><br>
    <button name="add-btn" class="submit-btn">Add Bookmark</button>
    <button name="clear-btn" class="submit-btn">Clear</button>

    </form>
     <?php if(isset($_SESSION['bookmarks'])){ ?> 
        <?php foreach($_SESSION['bookmarks'] as $key => $value){ ?>
    <div class="container ">
      
        <form action="./web-1.php" method="GET">
            <p><?php echo $value;?></p>
            <input type="hidden" name="delmark" value="<?php echo $key;?>">
            <button type="submit" name="del" class="submit-btn" >X</button>
        </form>
     </div>
     <?php }?>
    <?php }?>
    </div>
    
</body>
</html>