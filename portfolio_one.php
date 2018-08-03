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
  <link href="css/portfolio_one.css" rel="stylesheet" type="text/css" />
  <link href="css/dark.css" rel="stylesheet" type="text/css" />
  <!-- we only want the thunbnails to display when javascript is disabled -->
  <script type="text/javascript">
    document.write('<style>.noscript { display: none; }</style>');
  </script>
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
          <li class="selected"><a href="portfolio_one.php">FOTO</a>
            
          </li>
          <li><a href="blog.php">BLOG</a></li>
          <li><a href="about.php">ABOUT ME</a></li>
          
        </ul>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <!-- start gallery HTML containers -->
      <div id="gallery" class="content">
        <div class="slideshow-container">
          <div id="loading" class="loader"></div>
          <div id="slideshow" class="slideshow"></div>
        </div>
      </div>
      <div id="thumb-container">
        <div id="thumbs" class="navigation">
          <h1>Portfolio One</h1>
          <ul class="thumbs noscript">
            <li>
              <a class="thumb" href="images/portfolio_one/pagaruyuang.jpg"><img src="images/portfolio_one/pagaruyuang1.jpg" alt="one" /></a>
              <div class="caption">
                <div class="image-title portfolio_one">&quot;Istano Basa Pagaruyuang di Batusangkar, SUMBAR&quot;</div>
              </div>
            </li>
            <li>
              <a class="thumb" href="images/portfolio_one/kelok9.png"><img src="images/portfolio_one/kelok91.png" alt="two" /></a>
              <div class="caption">
                <div class="image-title portfolio_one">&quot;Kelok 9 di Kab. LimaPuluhKota ,Sumbar&quot;</div>
              </div>
            </li>
            <li>
              <a class="thumb" href="images/portfolio_one/jam_gadang.jpg"><img src="images/portfolio_one/jam_gadang1.jpg" alt="three" /></a>
              <div class="caption">
                <div class="image-title portfolio_one">&quot;Jam Gadang di Bukittinggi , Sumbar&quot;</div>
              </div>
            </li>
            <li>
              <a class="thumb" href="images/portfolio_one/mangateh.jpg"><img src="images/portfolio_one/mangateh1.jpg" alt="four" /></a>
              <div class="caption">
                <div class="image-title portfolio_one">&quot;Peternakan Sapi NewZealand nya Indonesia di Kab. LimaPuluhKota, Sumbar&quot;</div>
              </div>
            </li>
            <li>
              <a class="thumb" href="images/portfolio_one/rumah_tenun.jpg"><img src="images/portfolio_one/rumah_tenun1.jpg" alt="five" /></a>
              <div class="caption">
                <div class="image-title portfolio_one">&quot;Rumah Tenun di Pandai Siikek, Sumbar&quot;</div>
              </div>
            </li>
            <li>
               <a class="thumb" href="images/portfolio_one/sumbar.jpg"><img src="images/portfolio_one/sumbar1.jpg" alt="seven" /></a>
              <div class="caption">
                <div class="image-title portfolio_one">&quot;Mesjid Raya SUMATER BARAT nan Megah&quot;</div>
              </div>
            </li>
            <li>
             <a class="thumb" href="images/portfolio_one/sirandah.png"><img src="images/portfolio_one/sirandah1.png" alt="six" /></a>
              <div class="caption">
                <div class="image-title portfolio_one">&quot;Pulau Sirandah Nan eksotis&quot;</div>
              </div>
            </li>
            <li>
              <a class="thumb" href="images/portfolio_one/pasumpahan.jpg"><img src="images/portfolio_one/pasumpahan1.jpg" alt="eight" /></a>
              <div class="caption">
                <div class="image-title portfolio_one">&quot;Pulau pasumpahan di kawasan mandeh pantai padang&quot;</div>
              </div>
            </li>
            <li>
              <a class="thumb" href="images/portfolio_one/pamutusan.jpg"><img src="images/portfolio_one/pamutusan1.jpg" alt="nine" /></a>
              <div class="caption">
                <div class="image-title portfolio_one">&quot;Pulau Pamutusan yang menawan&quot;</div>
              </div>
            </li>
            <li>
              <a class="thumb" href="images/portfolio_one/sikuai.jpg"><img src="images/portfolio_one/sikuai1.jpg" alt="ten" /></a>
              <div class="caption">
                <div class="image-title portfolio_one">&quot;Pulau Sikuai yang indah&quot;</div>
              </div>
            </li>
            
          </ul>
        </div>
        <div id="controls" class="controls portfolio_one"></div>
        <div id="caption" class="caption-container"></div>
        <div style="clear: both;"></div>
        <!-- end gallery HTML containers -->
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
  <script type="text/javascript" src="js/jquery.galleriffic.js"></script>
  <script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      // we only want these styles applied when javascript is enabled
      $('div.navigation').css({'width' : '450px', 'float' : 'left'});
      $('div.content').css('display', 'block');
      // initially set opacity on thumbs and add additional styling for hover effect on thumbs
      var onMouseOutOpacity = 0.67;
      $('#thumbs ul.thumbs li').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  1.0,
        fadeSpeed:         'fast',
        exemptionSelector: '.selected'
      });
      // initialize advanced galleriffic gallery
      var gallery = $('#thumbs').galleriffic({
        delay:                     3500,
        numThumbs:                 10,
        preloadAhead:              10,
        enableTopPager:            false,
        enableBottomPager:         true,
        maxPagesToShow:            7,
        imageContainerSel:         '#slideshow',
        controlsContainerSel:      '#controls',
        captionContainerSel:       '#caption',
        loadingContainerSel:       '#loading',
        renderSSControls:          true,
        renderNavControls:         true,
        playLinkText:              'Play Slideshow',
        pauseLinkText:             'Pause Slideshow',
        prevLinkText:              '&lsaquo; Previous Photo',
        nextLinkText:              'Next Photo &rsaquo;',
        nextPageLinkText:          'Next &rsaquo;',
        prevPageLinkText:          '&lsaquo; Prev',
        enableHistory:             false,
        autoStart:                 false,
        syncTransitions:           true,
        defaultTransitionDuration: 900,
        onSlideChange:             function(prevIndex, nextIndex) {
          // 'this' refers to the gallery, which is an extension of $('#thumbs')
          this.find('ul.thumbs').children()
            .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
            .eq(nextIndex).fadeTo('fast', 1.0);
        }
      });
    });
  </script>
</body>
</html>
