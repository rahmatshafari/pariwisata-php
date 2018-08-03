<?php
include('koneksi.php');

$id=$_POST['id'];
$tgl_post=$_POST['tgl_post'];
$judul=$_POST['judul'];
$isi=$_POST['isi'];
$penulis=$_POST['penulis'];
$category=$_POST['category'];
$nama=$_POST['gambar'];
$sql="insert into berita (id,judul,isi,penulis,category,gambar) 
values('$id','$judul','$isi','$penulis','$category','$nama')";
$query=mysql_query($sql);

header('location: kategori.php');

?>