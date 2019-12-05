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
   <link rel="stylesheet" type="text/css" href="css/profil.css">
</head>
<body>
   <div class="head"><img src="logo.png" id="logo"></h1>
   <a href="logout.php" class="logout">Logout</a>
   </div>
   <div class="data">
   <h2>DATA DIRI </h2> 
   <form action="checklogin.php" method="post">
   <img src="foto.jpg" id="foto"> </img>
   </div>
   <div class="profil">
   <table border=0 width=500>
	<tbody>
	<tr>
	<td> 	Mishbachul Kawakib</td>
	</tr>
	<tr>
	<td> Lamongan, 19 September 1996 </td>
	</tr>
	<tr>
	<td> Ciputat, Tangerang Selatan </td>
	<tr>
	<td><a href="full.php">Selengkapnya</a></td>
	</tr>
	</table>
   </div>
</body>
</html>