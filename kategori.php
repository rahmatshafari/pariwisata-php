<!DOCTYPE HTML>
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
  <title>PhotoArtWork</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/dark.css" rel="stylesheet" type="text/css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>
<form action='logout.php'>
<table align=right style="width:253px;" background="images/memberlogin_bg.gif">
<tr style="color: #e6e600;"><td colspan=3 align=center background="images/member_login.gif" style="height:45px;">Welcome! Anda Sebagai</td></tr>
<tr style="color: #e6e600;"><td><?php echo "<p align=center>$level</p>"; ?></td><td></td>
<tr style="color: #e6e600;"><td><?php echo "<p align=center>$username</p>"; ?></td><td><br><br><br></td>
<tr><td colspan=3 align=left background="images/memberlogin_bot.gif"><button>Logout</button></td></tr>
</table>
</form>
<body>
  <div id="main">

    <!-- begin header -->
    <header>
      <div id="logo"><h1>Wonderfull<a href="#">West</a>SUMATERA</h1></div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="index.php">HOME</a></li>
          
            <li class="selected"><a href="kategori.php">KATEGORI</a>
            <ul>
                <li><a href="wisata_alam.php?b=9">WISATA ALAM</a></li>
                <li><a href="wisata_alam.php"?b=12>WISATA BUDAYA</a></li>
                <li><a href="wisata_alam.php">WISATA KULINER</a></li>
            </ul>
           </li> 
         <li ><a href="portfolio_one.php">FOTO</a>
          </li>
          <li><a href="blog.php">BLOG</a></li>
          <li><a href="about.php">ABOUT ME</a></li>
          
        </ul>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <div id="left_content">
         <?php
include("koneksi.php");

$sql="select * from berita";
$query=mysql_query($sql);
echo"<br><br><br>";
echo "<table border=1 align=center>
<tr><th>id</th><th>Tanggal</th><th>Penulis</th><th>Judul</th>
<th>isi</th><th>Kategori</th><th>Gambar</th><th>Operasi</th></tr>";

while($row=mysql_fetch_array($query)){
$id=$row['id'];
$tanggal=$row['tgl_post'];
$judul=$row['judul'];
$penulis=$row['penulis'];
$isi=$row['isi'];
$kategori=$row['category'];
$nama=$row['gambar'];
 } 
echo "
<tr><td>$id</td><td>$tanggal</td><td>$penulis</td><td>$judul</td>
<td>$isi</td><td>$kategori</td><td>$nama</td><td><a href='proseseditberita.php'>EDIT</a> 
<a href='hapusberita.php>HAPUS</a>
</tr>";

echo "</table>";
echo "<a href='beritabaru.php'>Tambah</a>";

?> 
      </div>
      <div id="right_content">
        
      </div>
    </div>
    <!-- end content -->
<?php include("lihat_kunjungan.php");
$_SERVER['REMOTE_ADDR'];
$hari_ini1=$hari_ini['hari_ini'];
$kemarin1=$kemarin['kemarin'];
$total1=$sql['total'];
echo "<h2>Pengunjung Hari Ini : $hari_ini1</h2>";
?>
    <!-- begin footer -->
    <footer>
      <p>Copyright &copy; 2017 WonderfullWestSumatera. All Rights Reserved. </p>
      <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
    </footer>
    <!-- end footer -->

  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
