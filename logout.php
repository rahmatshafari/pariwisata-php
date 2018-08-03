<?php

session_start();
session_destroy();
echo "<script>alert('Terima Kasih, Anda Sudah Berhasil Logout')</script>";

echo"<meta http-equiv='refresh' content='1 url=homeuser.php'>";

?>