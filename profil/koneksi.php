<?php 
$conn = mysqli_connect('localhost','root','','profil');

if (!$conn){
    die("Error 500 : "  . mysqli_connect_error());
}
?>
