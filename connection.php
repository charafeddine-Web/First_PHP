<?php
$servername = "localhost";
$username = "root";
$password = "Charaf2024"; 
$dbname = "youcode"; 

$connect=mysqli_connect($servername,$username, $password, $dbname,3307);

if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
}
