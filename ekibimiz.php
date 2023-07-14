<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
 <title>Ekibimiz - Gaziantep Focus Life</title>
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
        <h1 class="page-title">Ekibimiz</h1>
        <ul class="breadcrumbs">
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
          <li>Ekibimiz</li>
        </ul>
      </div>
    </div>
    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <div id="content" class="page-content-wrap">
      <div class="container">
        
        <div class="isotope three-collumn clearfix team-holder" data-isotope-options='{"itemSelector" : ".item","layoutMode" : "fitRows","transitionDuration":"0.7s","fitRows" : {"columnWidth":".item"}}'>
 
    <?php
				$veri_cek = $db->query("SELECT * FROM ekibimiz WHERE ekip_durum = 1 AND dil_id = '{$lang}' ORDER BY ekip_ust_id ASC LIMIT 999");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  <div class="item category_4">
            <div class="team-item">
              <a href="<?php echo $ayarlar["strURL"]; ?>/<?php echo $veri_listele["ekip_description"]; ?>" class="member-photo">
                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/teams/<?php echo $veri_listele["ekip_resim"]; ?>" alt="<?php echo 	$veri_listele["ekip_baslik"]; ?>">
              </a>
              <div class="team-desc">
                <div class="member-info">
                  <h5 class="member-name"><a href="<?php echo $ayarlar["strURL"]; ?>/<?php echo 	$veri_listele["ekip_description"]; ?>"><?php echo 	$veri_listele["ekip_baslik"]; ?></a></h5>
                  <h6 class="member-position"><?php echo 	$veri_listele["ekip_aciklama"]; ?></h6>
                </div>
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