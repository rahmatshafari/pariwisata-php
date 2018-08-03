<?php
include("koneksi.php");

$ip_address=$_SERVER['REMOTE_ADDR']."";
$tanggal=date('Y-m-d');
$waktu=date('Y-m-d H:i:s');
$kunjungan=1;

if(!isset($_SESSION['visitor'])){
	$_SESSION['visitor']=$ip_address;
	mysql_query("insert into visitor(tanggal,waktu,ip_address,counter)
	values('$tanggal','$waktu','$ip_address','$kunjungan')");
}
$kemarin=date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
$hari_ini=mysql_fetch_array(mysql_query('select sum(counter)AS hari_ini from visitor
		  where tanggal="'.date("Y-m-d").'"'));
$kemarin=mysql_fetch_array(mysql_query('select sum(counter) as kemarin from visitor
		  where tanggal="$kemarin"'));
$sql=mysql_fetch_array(mysql_query('select sum(counter)as total from visitor'));
?>