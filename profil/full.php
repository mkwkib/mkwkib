<?php
   session_start();
   if ($_SESSION['status']!="login"){
       echo "<script>alert('Silahkan Login Dahulu!');
       document.location.href='index.php'</script>";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Profil</title>
   <link rel="stylesheet" type="text/css" href="css/full.css">
</head>
<body>
   <div class="head"><img src="logo.png" id="logo">
   <a href="logout.php" class="logout">Logout</a>
   </div>
   <div class="data">
   <h2>MISHBACHUL KAWAKIB</h2> 
   <form action="checklogin.php" method="post">
   <img src="foto.jpg" id="foto"> </img>
   <table border=0 width=500>
	<tbody>
	<tr>
	<td> Nama </td>
	<td> 	Mishbachul Kawakib</td>
	</tr>
    <tr>
    <td> KTP </td>
	<td> 	3524231909960001</td>
	</tr>
    <tr>
    <td> Email </td>
	<td> 	kawakib.mishbachul@gmail.com</td>
	</tr>
    <tr>
	<td> TTL</td>
	<td> Lamongan, 19 September 1996 </td>
	</tr>
    <tr>
	<td> Alamat </td>
	<td> Ciputat, Tangerang Selatan </td>
	</tr>
	<tr>
	<td> Agama </td>
	<td> Islam</td>
	</tr>
    <tr>
	<td> Status </td>
	<td> Lajang </td>
	</tr>
	<tr>
	<td> Jenis Kelamin </td>
	<td> Laki-Laki </td>
   </tr>
   <tr>
	<td> Pendidikan </td>
	<td> Universitas Gadjah Mada </td>
   </tr>
   <tr>
	<td> Jurusan </td>
	<td> D3 Ilmu Komputer & Sistem Informasi </td>
	</tr>
    <tr>
	<td>Hobi</td>
	<td>Sepakbola, Voli, Futsal</td>
   </tr>
   <tr>
   <td></td>
	<td><a href="profil.php">Kembali</a></td>
	</tr>
	</table>
   </div>
</body>
</html>
