<?php
if(isset($_POST["fill-btn"])){
    $firstname = $_POST["firstName"];
    #for firstname
     if(strlen($firstname) < 2 or strlen($firstname) > 25){
        echo("First Name:Error! Input must be greater than 2 or less than 25." . "<br>");
     }else{
         echo ("First Name: " . " " .  $firstname . "<br>");
     }
    $lastname = $_POST["lastName"];
    #for lastname
    if(strlen( $lastname) < 2 or strlen( $lastname) > 25){
        echo("Last Name:Error! Input must be more than 2 or less than 25." . "<br>");
     }else{
         echo( "Last Name :" . " " .  $lastname . "<br>");
     }
    $email= $_POST["email"];
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo("Email: " . " " . $email . "<br>");} 
        else{
            echo("Email invalid." . "<br>");
        }
    $add= $_POST["address"];
    if(strlen($add) == 0) {
        echo(" Address: Error! Address empty.");
    } else{ echo("Address: " . $add);}
 }
?>

