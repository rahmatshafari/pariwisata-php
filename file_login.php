<?php
session_start();
include('koneksi.php');
$username1=$_POST['username'];
$password1=md5($_POST['password']);
$sql = "select * from user where
		username='$username1' and
		password='$password1'";
$query = mysql_query($sql);
setcookie('username');
if(mysql_num_rows($query)==1){
$row=mysql_fetch_array($query);
$_SESSION['username']= $row['username'];
$_SESSION['level']= $row['level'];
$id1 = session_id();
$_SESSION['id1']=$id1;
    if($row['level']=="admin")
    {
		echo"Login Berhasil";
		$id1 = session_id();
		$_SESSION['id1']=$id1;
		header('location: index.php');
	}
	else if($row['level']=="user")
	{
		echo"Login Berhasil";
		header('location: index.php');		
	}	
}
    else
        {
	    echo"Login Gagal";
		header('location: homeuser.php');		
        }
?>