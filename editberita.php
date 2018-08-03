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
<!DOCTYPE html>
<html>
<?php
session_start();
$username=$_SESSION['username'];
$level=$_SESSION['level'];
include('koneksi.php');
if(isset($_GET['b']))
$b=$_GET['b'];	
else
$b="";
if(isset($_GET['be']))
$be=$_GET['be'];	
else
$be="";
?>
<head>
	<link rel="shortcut icon" href="logo.png"/>
	<link rel="stylesheet" href="layout2.css">
	<title>SDM Sports - HOME</title>
<style>
.mySlides {display:none;}
</style>
</head>
<body bgcolor="c6ff00">
<div id="wew">
<form action='logout.php'>
<table align=right style="width:253px;" background="images/memberlogin_bg.gif">
<tr style="color:red;"><td colspan=3 align=center background="images/member_login.gif" style="height:45px;">SELAMAT DATANG</td></tr>
<tr style="color:red;"><td><?php echo "<p align=center>$level</p>"; ?></td><td></td>
<tr style="color:red;"><td><?php echo "<p align=center>$username</p>"; ?></td><td><br><br><br></td>
<tr><td colspan=3 align=left background="images/memberlogin_bot.gif"><button>Logout</button></td></tr>
</table>
</form>
<img src="logo.png">
<b style="font-size:50px; color:red;">SDM MOTORSPORT</b>
</div>
	
<div id="wow">
<ul id="wiw">
  <li><a class="active" href="home_admin.php">Home</a></li>
  
  <li><a href="berita.php">Produk</a>
	  <ul>
			<li><b><a href="klasikadmin.php?b=9">Motor Klasik</a></li>
			<li><b><a href="klasikadmin.php?b=11">Motor Sport</a></li>
	  </ul>
  </li>
  <li><a href="event.php">Activities</a>
	  <ul>
			<li><b><a href="event.php">Event</a></li>
			<li><b><a href="galeri.php">Galeri</a></li>
	  </ul>
  </li>
  <li><a href="aboutadmin.php">About Us</a></li>
</ul>
</div>
<br><br><br><br><br><br><br><br><br><br>
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
$gambar=$row['gambar'];
?>
<form method='post' action='updateberita.php'>
<input type=hidden value=<?php echo "$id"; ?> name=id>

<table>
<tr><td>Penulis</td><td>:</td><td><input type=text value=<?php echo "$penulis"; ?> name=penulis></td></tr>
<tr><td>Judul</td><td>:</td><td><input type=text value=<?php echo "$judul"; ?> name=judul></td></tr>
<tr><td>Upload Gambar</td><td>:</td><td><input type=file name=gambar></td></tr>
<tr><td>Kategori</td><td>:</td><td>
<select name=category>
<option>klasik</option>
<option>sport</option>
</select>
</td></tr>
<tr><td>Isi</td><td>:</td><td>
<textarea name='isi' rows='15' cols='80' style='width: 80%'><?php echo "$isi"; ?>
</textarea>
</td></tr>
<tr><td colspan=3><input type=submit value='Simpan'></td></tr>
</table>
</form>
<div id="footer">
	<br>
	<div style="text-align:center; font-size:25px"><b>Kami juga bekerja sama dengan:</b></div>
	<br>
	<center>
		<img src="logo1.png" width="100px" height="100px">
		<img src="logo2.png" width="100px" height="100px">
		<img src="logo3.png" width="100px" height="100px">
		<img src="logo4.png" width="100px" height="100px">
		<img src="logo5.png" width="100px" height="100px">
		<img src="logo6.png" width="100px" height="100px">
		<img src="logo7.png" width="100px" height="100px">
		<img src="logo8.png" width="100px" height="100px">
	</center>
	<br>
	<center>&copy;2017 SDM Sports&trade;. All rights reserved.</center> 
</div>
</body>
</html>