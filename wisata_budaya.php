<!DOCTYPE HTML>
<html>

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
                <li><a href="wisata_alam.php">WISATA ALAM</a></li>
                <li><a href="wisata_budaya.php">WISATA BUDAYA</a></li>
                <li><a href="wisata_kuliner.php">WISATA KULINER</a></li>
            </ul>
           </li> 
          <li><a href="#">FOTO</a>
            <ul>
              <li><a href="portfolio_one.php">portfolio_one</a></li>
              <li><a href="portfolio_two.php">portfolio_two</a></li>
            </ul>
          </li>
          <li><a href="blog.php">BLOG</a></li>
          <li ><a href="about.php">ABOUT ME</a></li>
        
        </ul>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    
      <div id="left_content">
       </div> 
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
