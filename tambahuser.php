<?php
include('koneksi.php');

$id=$_POST['id'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$level=$_POST['level'];
$sql="insert into user (id,username,password,level) 
values('$id','$username','$password','$level')";
$query=mysql_query($sql);

header('location: register.php');

?>