<DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
 <!-- Rose Marry Goyo -->
 <?php
    function countWord($str) {
        $msg = (explode(" ", $str));
        print_r(array_count_values($msg));
    }

    countWord("I i love love you very much much.");
?>
</body>
</html>