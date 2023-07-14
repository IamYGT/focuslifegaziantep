<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<title>Hizmetlerimiz - Gaziantep Focus Life</title>
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
        <h1 class="page-title">Hizmetlerimiz</h1>
        <ul class="breadcrumbs">
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
          <li>Hizmetlerimiz</li>
        </ul>
      </div>
    </div>
    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <div id="content" class="page-content-wrap">
      <div class="container">
        <div class="challenges flex-row item-col-3">
       

    <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
	   <div class="item-col">
            <div class="challenge-item">
              <div class="bg-img" data-bg="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>"></div>
              <a  style="    text-shadow: 2px 5px 6px #000000;" href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>" class="link"></a>
              <div class="inner">
                <h3 class="item-title"><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h3>
                 
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