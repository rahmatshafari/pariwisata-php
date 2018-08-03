<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->
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
	<link rel="stylesheet" href="berita2.css">
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
</div>
<div id="page">
<div id="tulisan">
<font>Masukkan Berita</font>
</div>

<div id="kosong">
</div>
<?php
include('koneksi.php');
$id=$_GET['id'];
$sql="select * from berita where id='$id'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$tgl_post=$row['tgl_post'];
$category=$row['category'];
$judul=$row['judul'];
$isi=$row['isi'];
$penulis=$row['penulis'];
$nama=$row['gambar'];
?>
<form method='post' action='prosesupdateberita.php'>
<input type=hidden value=<?php echo "$id"; ?> name=id>

<table>
<tr><td>Penulis</td><td>:</td><td><input type=text value=<?php echo "$penulis"; ?> name=penulis></td></tr>
<tr><td>Judul</td><td>:</td><td><input type=text value=<?php echo "$judul"; ?> name=judul></td></tr>
<tr><td>Upload Gambar</td><td>:</td><td><input type=file name=nama></td></tr>
<tr><td>Kategori</td><td>:</td><td>
<select name=category>
<option>Manga</option>
<option>Mangaka</option>
</select>
</td></tr>
<tr><td>Isi</td><td>:</td><td>
<textarea name='isi' rows='15' cols='80' style='width: 80%'><?php echo "$isi"; ?>
</textarea>
</td></tr>
<tr><td colspan=3><input type=submit value='Simpan'></td></tr>
</table>
</form>
</div>
</div>
</div>

<div id="footer">
<font size="3px"><p align="center"><a href="homeadmin.php">Home | </a><a href="kategori.php">Kategori | </a><a href="daftar_manga.php">Daftar Manga | </a>
<a href="photos.php">Photos | </a><a href="about_us1.html">About US </a></p></font>
<font size="3px"><p align="center">&copy; 2017 Anime Heaven All Right Reserved</font>
</div>
</div>
</body>
</html>