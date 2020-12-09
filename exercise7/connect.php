<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercise_7";

//create connection
$conn = mysqli_connect("localhost","root","","exercise_7");


//check connection
if(!$conn){
    die('Error'. mysqli_connect_error() );
}else{ }