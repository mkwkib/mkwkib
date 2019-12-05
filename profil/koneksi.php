<?php
$host = "localhost";
$db_name = "profil";
$username = "root";
$password = "";
 
$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn){
    die("Connection Failed: "  . mysqli_connect_error());
}
?>