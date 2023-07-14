<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 
 $row_info = $db->query("SELECT * FROM galeriler WHERE galeri_seo = '{$_GET["url"]}' ")->fetch(PDO::FETCH_ASSOC);
$ustid = $row_info["galeri_ust_id"];
?>
<!DOCTYPE html>
<html lang="tr">
<title><?php echo $row_info["galeri_baslik"]; ?> - Gaziantep Focus Life</title>
<?php include("css.php")?>
</head>
<body>
  <div class="loader"></div>
  <div id="wrapper" class="wrapper-container">
    <nav id="mobile-advanced" class="mobile-advanced"></nav>
    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
    <header id="header" class="header sticky-header sticky">
	<?php include("ust.php")?>
	</header>
    <div class="breadcrumbs-wrap">
      <div class="container">
        <h1 class="page-title"><?php echo $row_info["galeri_baslik"]; ?></h1>
        <ul class="breadcrumbs">
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/galeriler">Galeri</a></li>
           <li><?php echo $row_info["galeri_baslik"]; ?></li>
        </ul>
      </div>
    </div>
    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <div id="content" class="page-content-wrap">
      <div class="container">
	    <div class="portfolio-holder isotope fourth-collumn clearfix" data-isotope-options='{"itemSelector" : ".item","layoutMode" : "masonry","transitionDuration":"0.7s","masonry" : {"columnWidth":".item"}}'>
 <?php 
			$list = $db->query("SELECT * FROM files WHERE ustid = {$ustid} AND itable = 1");
				foreach($list as $row){
	  ?>
                   <div class="item category_3">
            <div class="project">
              <div class="project-image">
                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $row["name"]?>" alt="">
                <a href="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $row["name"]?>" class="project-link var2" data-fancybox="gallery"></a>
              </div>
            </div>
          </div>
          <?php 
				} 
				?>
        </div>
      </div>
    </div> 
   <?php include("alt.php")?>
  </div> 
  <?php include("js.php")?>
</body>
</html>