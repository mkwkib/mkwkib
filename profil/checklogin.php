<?php
session_start();

include 'koneksi.php';

    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="select * from user where username='$username' and password='$password'";
    $con=mysqli_connect('localhost','root','','profil');
    $run=mysqli_query($con,$query);

    if(mysqli_num_rows($run)>0) {
        echo "<script> alert ('Login Berhasil')
        document.location.href='profil.php'</script>";
        $_SESSION['user']=$username;
        $_SESSION['status']="login";
    } else {
        "<script> alert ('Login Gagal')";
    }

?>