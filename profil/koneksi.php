<?php 
$conn = mysqli_connect('localhost','root','','profil');

if (!$conn){
    die("Connection Failed: "  . mysqli_connect_error());
}
?>