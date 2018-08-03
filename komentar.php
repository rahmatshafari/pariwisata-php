<?php
include("koneksi.php");

$komen=$_POST['komen'];
$id_post=$_POST['id_post'];
$nama=$_POST['nama'];
$sql="insert into komentar(id_post,komentar,nama) values('$id_post','$komen','$nama')";
mysql_query($sql);
header("location: manga.php?k=$id_post");
?>