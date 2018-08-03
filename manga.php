<html>
<?php
session_start();
$username=$_SESSION['username'];
$level=$_SESSION['level'];
include('koneksi.php');
if(isset($_GET['k']))
$k=$_GET['k'];	
else
$k="";
if(isset($_GET['ko']))
$ko=$_GET['ko'];	
else
$ko="";
?>
<head>
	<title>Manga</title>
	<link rel="stylesheet" href="manga1.css">
</head>
<body background="images/770113faa47ef24c9a3fc723c9c498d0.jpeg">
<div id="contain">
<div id="header">
<div id="wew"><img src="images/770113faa47ef24c9a3fc723c9c498d0.jpeg" width="130px"></div>
<div id="waw"><b><font size="500px" color="white">TEAMWORK</font></div>
</div>

<div id="navbar">
<ul id="kuda">
	<li><b><a href="homeadmin.php">HOME</a></li>
	<li><b><a href="kategori.php">KATEGORI</a>
		<ul>
			<li><b><a href="manga.php?k=27">Manga</a></li>
			<li><b><a href="manga.php?k=31">Mangaka</a></li>
		</ul>
	</li>
	<li><b><a href="daftar_manga.php">DAFTAR MANGA</a>
		<ul>
	<?php if($level=="admin"){ ?>
	<li><b><a href="tambahmanga.php">Tambah Manga</a></li>
	<?php } ?>
		</ul>
	</li>
	<li><b><a href="photos.php">PHOTOS</a>
		<ul>
			<li><b><a href="anime.php">Anime</a></li>
			<li><b><a href="pencipta.php">Pencipta Anime</a></li>
		</ul>	
	</li>
	<?php if($level=="admin"){ ?>
	<li><b><a href="berita.php">LIST BERITA</a></li>
	<?php } ?>
	<li><b><a href="about_us1.php">ABOUT US</a></li>
</ul>
<div id="table">
<form action='logout.php'>
<table align=center style="width:253px;" background="images/memberlogin_bg.gif">
<tr style="color:red;"><td colspan=3 align=center background="images/member_login.gif" style="height:45px;">SELAMAT DATANG</td></tr>
<tr style="color:red;"><td><?php echo "<p align=center>$level</p>"; ?></td><td></td>
<tr style="color:red;"><td><?php echo "<p align=center>$username</p>"; ?></td><td><br><br><br></td>
<tr><td colspan=3 align=left background="images/memberlogin_bot.gif"><button>Logout</button></td></tr>
</table>
</form>
</div>
</div>
<?php include("lihat_kunjungan.php");
$_SERVER['REMOTE_ADDR'];
$hari_ini1=$hari_ini['hari_ini'];
$kemarin1=$kemarin['kemarin'];
$total1=$sql['total'];
echo "<h2>Pengunjung Hari Ini : $hari_ini1</h2>";
?>
<div id="page1">
<div id="latepost">
<div id="kosong1">
<font color=white>Latepost</font>
</div>
<form>
<textarea rows=20 cols=34>
post terbaru
<?php
$sql1 = "select * from berita";
$query1=mysql_query($sql1);
	
while($row1=mysql_fetch_array($query1)){
	$id_post=$row1['id'];
	$tanggal=$row1['tgl_post'];
	$judul=$row1['judul'];
	$penulis=$row1['penulis'];
	$isi= $row1['isi'];
	$nama=  $row1['nama'];
	$potong=substr($isi,0,50);
?>
<?php 
echo"
Post By : $penulis $tanggal";	
echo"
Judul : $judul
";
?>
<?php
	}
?></textarea>
</form>
</div>
<div id="comment">
<div id="kosong1">
<font color=white>Comment</font>
</div>
<form>
<textarea name="comment" rows=20 cols=34>
<?php if($ko!=27 and $ko!=31){   ?>
<?php
$sql="SELECT * FROM komentar";
$query=mysql_query($sql);
echo "Komentar Yang masuk :";
while($row=mysql_fetch_array($query)){
$komentar=$row['komentar'];
$tglkomen=$row['tgl_komentar'];
echo "

$tglkomen";
echo "
$komentar";
}					
?>
<?php } ?>
</textarea>
</form>
</div>
</div>
<div id="page">
<div id="tulisan">
<font>Kategori</font>
</div>
<?php if($ko!=27 and $ko!=31){   ?>
<div id="kosong">
</div>
<?php
if($k != 27 and $k != 31 );
switch($k)
{
case 31: $kategori="Mangaka";break;
case 27 :$kategori="Manga";break;
}
$sql1="SELECT * FROM berita where `category`='$kategori'";
$query1=mysql_query($sql1);
	
while($row1=mysql_fetch_array($query1)){
	$id_post=$row1['id'];
	$tanggal=$row1['tgl_post'];
	$judul=$row1['judul'];
	$penulis=$row1['penulis'];
	$isi= $row1['isi'];
	$nama=  $row1['nama'];
	$potong=substr($isi,0,50);
?>

<div id="luffy">
<?php
echo"Post By $penulis";
?>
<div id="tu"  style="text-align:center;"><img src="images/<?php echo"$nama";?>" width="200px"></div>
<div id="tulis">
<?php 
echo"<h1 class='title' align=center>$judul</h1>";
echo"$isi";
?>
<div id="kosong2">
</div>
<?php
	}
}
?>
</div>

</div>
</div>
<?php if($ko!=27 and $ko!=31){   ?>
			<div class="contentbg">				
				<div class="post">
					
					<p>
					<?php $jlhkomentar=mysql_fetch_array(mysql_query("select count(komentar)as jlhkomentar from komentar where id_post='$id_post'"));  ?>
						&nbsp;&bull;&nbsp; <a href="#" class="comments"><?php $jlhkomentar1=$jlhkomentar['jlhkomentar'];echo "Komentar($jlhkomentar1)";?></a> 
						&nbsp;&bull;&nbsp; 
					<div class="entry">
					Silahkan Masukkan Komentar Anda :<br>
					<form action='komentar.php' method='post'>
					<table>
					<tr><td><b>Nama Anda</td><td><b>:</td><td><input type=text name=nama></td></tr>
					<tr><td><b>Komentar Anda</td><td><b>:</td><td><textarea name='komen'></textarea>
					<input value=<?php echo $id_post; ?> name='id_post' type=hidden></td></tr>
					<tr><td><input type='submit' value='Simpan Komentar'></td></tr>
					</table>
					</form>
					<?php
					$sql="SELECT * FROM komentar where id_post='$id_post'";
					$query=mysql_query($sql);
					echo "<p>Komentar Yang masuk :</p>";
					while($row=mysql_fetch_array($query)){
					$komentar=$row['komentar'];
					$tglkomen=$row['tgl_komentar'];
					$nama1=$row['nama'];
					echo"<div id='komentar'>
					From : $nama1
					<br>Tanggal :$tglkomen
					<P>$komentar</p>
					</div>";
					}
					
					?>
					</div>
				</div>								
			</div>
<?php } ?>

<div id="footer">
<font size="3px"><p align="center"><a href="homeadmin.php">Home | </a><a href="kategori.php">Kategori | </a><a href="daftar_manga.php">Daftar Manga | </a>
<a href="photos.php">Photos | </a><a href="about_us1.php">About US </a></p></font>
<font size="3px"><p align="center">&copy; 2017 TEAMWORK All Right Reserved</font>
</div>
</div>
</body>
</html>