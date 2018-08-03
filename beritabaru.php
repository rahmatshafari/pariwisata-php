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
<tr style="color: #e6e600;"><td colspan=3 align=center background="images/member_login.gif" style="height:45px;">SELAMAT DATANG</td></tr>
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
          
            <li class="selected"><a href="">KATEGORI</a>
            <ul>
                <li><a href="">WISATA ALAM</a></li>
                <li><a href="">WISATA BUDAYA</a></li>
                <li><a href="">WISATA KULINER</a></li>
            </ul>
           </li> 
          <li ><a href="portfolio_one.php">FOTO</a>
          </li>
          <li><a href="blog.php">BLOG</a></li>
          <li ><a href="about.php">ABOUT ME</a></li>
          
        </ul>
      </nav>
    </header>
    <!-- end header -->
<form method='post' action='prosessimpanberita.php'>

<table>
<tr><td>Penulis</td><td>:</td><td><input type=text name=penulis></td></tr>
<tr><td>Judul</td><td>:</td><td><input type=text name=judul></td></tr>
<tr><td>Upload Gambar</td><td>:</td><td><input type=file name=gambar></td></tr>
<tr><td>Kategori</td><td>:</td><td>
<select name=category>
<option>wisata Alam</option>
<option>wisata Budaya</option>
<option>wisata Kuliner</option>
</select>
</td></tr>
<tr><td>Isi</td><td>:</td><td>
<textarea name='isi' rows='15' cols='80' style='width: 80%'>
</textarea>
</td></tr>
<tr><td colspan=3><input type=submit value='Simpan'></td></tr>
</table>

</form>
    <!-- begin content -->
    
      <div id="left_content">
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
