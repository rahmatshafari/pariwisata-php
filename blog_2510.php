<!DOCTYPE HTML>
<html>
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
          
            <li><a href="kategori.php">KATEGORI</a>
            <ul>
                <li><a href="wisata_alam.php">WISATA ALAM</a></li>
                <li><a href="wisata_budaya.php">WISATA BUDAYA</a></li>
                <li><a href="wisata_kuliner.php">WISATA KULINER</a></li>
            </ul>
           </li> 
          <li ><a href="portfolio_one.php">FOTO</a>
          </li>
          <li class="selected"><a href="blog.php">BLOG</a></li>
          <li><a href="about.php">ABOUT ME</a></li>
          
        </ul>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <div id="left_content">
        <div id="blog_container">
    
          <h4><a href="blog.php">Istano Pagaruyuang</a></h4>
          
          <h4 class="select"><a href="blog_2510.php">Ajang berselfi Kelok 9 akan dijadikan tempat wisata</a></h4>
         
        </div>
      </div>
      <div id="right_content">
        <div id="blog_text">
          <h1>Kelok 9</h1>
          <img src="images/kelok9.png" width="400px" heigth="400px"/>
          <p>Karena kerap dijadikan sebagai ajang wisata termasuk ber-swa foto (selfie), Pemerintah Provinsi Sumatera Barat merencanakan mengambangkan kawasan jembata layang Kelok Sembilan, Kabupaten Limapuluh Kota, sebagai tujuan wisata. 
            Tentu saja obyek keriaan itu tidak persis di jembatan penghubung, namun di area hutan tak jauh dari tempat itu."Izin penggunaan hutan untuk wisata telah keluar dari Kementerian Kehutanan pada Agustus 2016. Ini kita manfaatkan untuk mengembangkan potensi wisata yang ada," kata Wakil Gubernur Sumbar Nasrul Abit di Padang, Selasa.Abit menjelaskan saat ini banyak orang berhenti saat melintas di fly over Kelok Sembilan. Mereka parkir di sana untuk berwisata. “Padahal itu sebenarnya tidak boleh,” kata dia.
Karena banyak yang berhenti, akhirnya banyak pedagang kaki lima menggelar dagangan. Ini tentu membahayakan tidak hanya nyawa mereka, tetapi juga pengguna jalan."Positifnya, titik itu memiliki potensi wisata untuk dikembangkan, tinggal menatanya. Ini yang sedang kita rencanakan bersama seluruh pemangku kepentingan," kata dia.Ia menjelaskan berdasarkan desain pengembangan milik Balai Besar Pelaksanaan Jalan Nasional II Sumatera Barat, semula di lokasi itu akan dibangun menara setinggi 40 meter dilengkapi kereta gantung untuk wisata. Namun, rencana tersebut direvisi sedikit dengan menghilangkan kereta gantung dan menambah tinggi menara menjadi sekitar 60 meter.
"Menara itu nanti akan dilengkapi dengan elevator agar masyarakat mudah mengaksesnya," ujar dia.
Lalu disamping menara juga akan dilengkapi gedung penyangga yang juga menyediakan lokasi parkir dan sarana prasarana untuk pedagang kaki lima. "Sekarang BKSDA sedang melakukan pengkajian untuk membuat blok tapak untuk pengembangan tersebut. Mei 2017 selesai," kata Abit.Fly Over Kelok Sembilan resmi beroperasi pada Oktober 2013 untuk mendukung hubungan antara Sumbar dan Provinsi Riau.</p>
        </div>
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
