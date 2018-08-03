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
          
          <h4 class="select"><a href="blog.php">Istano Pagaruyuang </a></h4>
          
          
          <h4><a href="blog_2510.php">Ajang berselfi Kelok 9 akan dijadikan tempat wisata</a></h4>
          
        </div>
      </div>
      <div id="right_content">
        <div id="blog_text">
          <h1>istano pagaruyuang</h1>
          <img src="images/pagaruyuang.jpg" width="400px" heigth="400px"/>
          <p>pada tanggal 31 Oktober 2013 lalu, Presiden SBY meresmikan Istana pagaruyung ini dan bersamaan dengan itu pula Istana Pagaruyung kembali dibuka untuk umum. Lokasi Istana Pagaruyung ini berada di Nagari Pagaruyung, Kecamatan Tanjung Emas, Kabupaten Tanah Datar, Sumatera Barat, dan untuk tiba di lokasi, kita bisa menggunakan berbagai macam jenis kendaraan, baik kendaraan umum maupun kendaraan pribadi. Tiket masuk cukup terjangkau, dibedakan untuk wisatawan domestik dan wisatawan mancanegara. Untuk wisatawan domestik Dewasa Rp7.000,- sedangkan anak-anak Rp5.000,- dan wisatawan mancanegara dewasa Rp12.000,- anak-anak Rp5.000,-.</p>
          <p> Halaman Istana ini cukup luas, didalamnya kita bisa menunggang kuda berkeliling dan ada badut yang siap menemani untuk berfoto. Bagi yang tidak membawa kamera tetapi ingin mengabadikan momen di Istana Pagaruyung, jangan khawatir karena banyak tukang jepret yang siap "membekukan" pose narsis pengunjung. Bila kita pengen yang lebih spesial, maka bisa masuk ke dalam Istana dan menyewa baju adat Minangkabau untuk berfoto didalam istana. O ya, sebelum masuk istana jangan lupa untuk melepas alas kaki untuk menjaga kebersihan.
.</p>
          <p>Istano Basa Pagaruyung yang megah dan sehari-hari menjadi museum ini ludes terbakar akibat sambaran petir di ujung atapnya pada 2007. 
            Istana Kerajaan Pagaruyung yang berdiri pada abad ke-13 ini akhirnya direkonstruksi kembali selama 5 tahun dan menghabiskan biaya Rp 19,7 miliar.
            Pembangunan kembali Istano Basa Pagaruyung menghabiskan 800 kubik kayu surian dan meranti, 260 ton ijuk untuk atap dengan konstruksi atap baja ringan, 
            serta sebagian dinding dengan beton yang dilapisi kayu ukiran. Bangunan berlantai tiga itu kini dibangun sama seperti bangunan yang dulu terbakar, 
            hanya letaknya dimundurkan 40 meter ke belakang sehingga halamannya lebih luas. Akibat kebakaran tersebut sekitar 35% dokumen dan benda-benda bersejarah koleksi Istana Pagaruyung tidak bisa diselamatkan. 
            Sedangkan 65% benda dan dokumen sejarah koleksi istana bisa diselamatkan, saat api belum menghanguskan seluruh bangunan..</p>
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
