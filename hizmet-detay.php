<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 
	 $tekil_veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html lang="tr">
<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Gaziantep Focus Life</title>
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
    <div class="breadcrumbs-wrap no-title">
      <div class="container">
        <ul class="breadcrumbs">
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a></li>
           <li><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
        </ul>
      </div>
    </div>
    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <div id="content" class="page-content-wrap">
      <div class="container">
        <div class="entry-box single-post">
          <div class="entry">
            <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
            <div class="entry-body align-center">
              <h1 class="entry-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
              <div class="flex-row justify-content-center">
                 
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-12">
                <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                <div class="thumbnail-attachment video-holder">
                  <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>"> </a>
                </div>
                <p><?php echo $tekil_veri_cek["haber_aciklama"]; ?></p>
                <div class="content-element6">
                  <div class="share-wrap">
                    <span class="share-title">Paylaş:</span>
                    <ul class="social-icons var2 share">
                      <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>" class="sh-facebook"><i class="icon-facebook"></i></a></li>
                      <li><a href="https://twitter.com/intent/tweet?url=<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>" class="sh-twitter"><i class="icon-twitter"></i></a></li>
                       <li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>" class="sh-pinterest"><i class="icon-pinterest"></i></a></li>
                      <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>" class="sh-mail"><i class="icon-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div> </div>
              <aside id="sidebar" class="col-lg-4 col-md-12">
              
                <div class="widget">
                  <h6 class="widget-title">Diğer Hizmetlerimiz</h6>
                  <div class="entry-box entry-small style-2">
                    <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                    
    <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 5");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 

					<div class="entry">
                      <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                      <div class="thumbnail-attachment">
                        <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><img style="    width: 100px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"></a>
                      </div>
                      <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                      <div class="entry-body">
                        <h6 class="entry-title"><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h6>
                        <div class="entry-meta">
                          <span>Hizmetlerimiz</span>
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
                
				   <div class="widget">
              <h6 class="widget-title">Son Bloglar</h6>
              <div class="entry-box entry-small style-2">
 

    <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 3");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> <div class="entry">
                  <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                  <div class="thumbnail-attachment">
                    <a href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $veri_listele["haber_seo"]; ?>"><img style="    width: 100px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"></a>
                  </div>
                  <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                  <div class="entry-body">
                    <h6 class="entry-title"><a href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h6>
                    <div class="entry-meta">
                      <time class="entry-date" datetime="<?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?>"><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></time>
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
            <!-- Widget -->
        
            <!-- Widget -->
            <div class="widget">
              <h6 class="widget-title">Sayfamızı Beğenin</h6>
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=480919338591874';
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
              <div class="fb-page" data-href="https://www.facebook.com/Focus-Life-269703774877413" data-width="300" data-height="205" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
            </div>
			
				</aside>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php include("alt.php")?>
  </div>
<?php include("js.php")?>
</body>
</html>