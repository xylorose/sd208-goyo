
    <?php
       $clickbait_words = array(
        "scientists",
        "doctors", 
        "hate",
        "stupid",
       "wierd",
       "simple",
       "tricked",
       "shocked me",
       "you'll never believe",
       "hack",
       "epic",
       "unbelievable");
       $replacement_words = array(
           "so-called scientists",
           "so-called doctors",
           "aren't threatened by",
           "average",
           "completely normal",
           "ineffective",
           "method",
           "is no different than the others",
           "you won't really be surprised by",
           "slightly improve",
           "boring",
           "normal"
       );
       $inputed;
       if( isset($_POST['inputtedText'])){
            $inputed = strtolower($_POST['inputtedText']);

           for($index = 0;$index < count($clickbait_words);$index++){
                if(strpos($inputed, $clickbait_words[$index])){
                    $inputed = str_replace($clickbait_words[$index],$replacement_words[$index],$inputed);
                }
           }
           
       }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercise #3</title>
</head>
<body>
    <!-- item 1 -->
    <div class="head">
    <center> <h2 style="color:pink;margin-top:80px; margin-bottom:0"> Clickbait Headlines to Honest Headlines</h2></center>
        <div class ="form-box">
            <form action="./start.php" method ="POST">
                <input type="text"  name ="inputtedText" placeholder="Enter Sentence">
                <button type="submit" name ="send">Send</button>
            </form>
            <div style="padding-top:50px; color: white">
                 <h3>Clickbait Headlines</h3><br>
                <?php echo strtolower($_POST['inputtedText']) ?>
             </div>
            <div style="padding-top:50px; color: white">
                <h3>Honest Headlines</h3><br>
                <p> <?php echo (isset($inputed))? ucwords($inputed):""?></p>
            </div>
        </div>
    </div>

</body>
</html>