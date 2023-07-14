<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 

?>
<!DOCTYPE html>
<html lang="tr">
<title>Galeri - Gaziantep Focus Life</title>
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
        <h1 class="page-title">Galeri</h1>
        <ul class="breadcrumbs">
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
           <li>Galeri</li>
        </ul>
      </div>
    </div>
    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <div id="content" class="page-content-wrap">
      <div class="container"> 
        <div class="portfolio-holder isotope three-collumn clearfix" data-isotope-options='{"itemSelector" : ".item","layoutMode" : "fitRows","transitionDuration":"0.7s","fitRows" : {"columnWidth":".item"}}'>
          
		  <?php
		  
$veri_cek = $db->query("SELECT * FROM galeriler WHERE galeri_durum = 1 AND dil_id = '{$lang}' ORDER BY galeri_ust_id DESC LIMIT 99");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
		  <div class="item category_3">
            <div class="project">
              <div class="project-image">
                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/gallery/<?php echo $veri_listele["galeri_resim"]; ?>" alt="">
                <a href="<?php echo $ayarlar["strURL"]; ?>/galeri/<?php echo $veri_listele["galeri_seo"]; ?>" class="project-link"></a>
              </div>
              <div class="project-description">
                <h5 class="project-title"><a href="<?php echo $ayarlar["strURL"]; ?>/galeri/<?php echo $veri_listele["galeri_seo"]; ?>"><?php echo $veri_listele["galeri_baslik"]; ?></a></h5>
               </div>
            </div>
          </div>
		<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
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