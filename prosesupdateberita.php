<?php
include('koneksi.php');

$id=$_POST['id'];
$tgl_post=$_POST['tgl_post'];
$judul=$_POST['judul'];
$isi=$_POST['isi'];
$penulis=$_POST['penulis'];
$category=$_POST['category'];
$nama=$_POST['nama'];
$sql="update berita set judul='$judul',isi='$isi',penulis='$penulis',category='$category',nama='$nama' where id='$id'";
$query=mysql_query($sql);

header('location: berita.php');

?>