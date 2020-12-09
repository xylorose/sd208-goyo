<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    echo "<h3>FizzBuzz</h3>";
    foreach(range(1,100) as $num)
    {
        if($num % 3== 0 && $num %5 ==0)
        {
            echo "<h5>FizzBuzz</h5>";
        }
        elseif($num % 3 == 0)
        {
            echo "<h5>Fizz</h5>";
        }
        elseif($num % 5 == 0)
        {
            echo "<h5>Buzz</h5>";
        }
        else
        {
            echo $num,"<br>";
        }
    }

    ?>
</body>
</html>