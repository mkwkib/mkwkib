<?php
session_start();
session_destroy();
echo "<script>alert('Logout!');
document.location.href='index.php'</script>";
?>