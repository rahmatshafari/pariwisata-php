<?php
include('koneksi.php');
$id=$_GET['id'];
$sql="delete from berita where id='$id'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);

header('location: index.php');
?>