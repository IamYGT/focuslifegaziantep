<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<title>Anasayfa - Gaziantep Focus Life</title>
<?php include("css.php")?>
</head>
<body>
  <div class="loader"></div>
  <div id="wrapper" class="wrapper-container">
    <nav id="mobile-advanced" class="mobile-advanced"></nav> 
    <header id="header" class="header fixed-header sticky-header">
   <?php include("ust.php")?>
	</header> 
    <div class="rev-slider-wrapper">
      <div id="rev-slider" class="rev-slider tp-simpleresponsive"  data-version="5.0">
        <ul> 
          
         <?php
				$veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1 AND dil_id = '{$lang}' ORDER BY slayt_ust_id ASC LIMIT 999");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
		<li data-transition="fade">
            <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>" class="rev-slidebg" alt="">
            <!-- - - - - - - - - - - - - - Layer 1 - - - - - - - - - - - - - - - - -->
            <div class="tp-caption tp-resizeme scaption-dark-large align-center"
              data-x="['center','center','center','center']" data-hoffset="0"
              data-y="['middle','middle','middle','middle']" data-voffset="-20"
              data-whitespace="nowrap"
              data-frames='[{"delay":150,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-responsive_offset="on"
              data-elementdelay="0.05" ><?php echo 	$veri_listele["slayt_baslik"]; ?>
            </div>
            <!-- - - - - - - - - - - - - - End of Layer 1 - - - - - - - - - - - - - - - - -->
            <!-- - - - - - - - - - - - - - Layer 2 - - - - - - - - - - - - - - - - -->
            <div class="tp-caption tp-resizeme"
              data-x="['center','center','center','center']" data-hoffset="0"
              data-y="['middle','middle','middle','middle']" data-voffset="120"
              data-whitespace="nowrap"
              data-frames='[{"delay":750,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-responsive_offset="on"
              data-elementdelay="0.05" ><a href="<?php echo $ayarlar["strURL"]; ?>/hakkimizda" class="btn btn-big btn-style-3">Kurumsal</a>
              <a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz" class="btn btn-big">Hizmetlerimiz</a>
            </div>
            <!-- - - - - - - - - - - - - - End of Layer 2 - - - - - - - - - - - - - - - - -->
          </li>
		   <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
        </ul>
      </div>
    </div>
    <!-- - - - - - - - - - - - - - End of Slider - - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <div id="content">
      <!-- Info box -->
     
      <div class="page-section" style="    padding-bottom: 10px;">

        <div class="img-bg bg-move" data-bg="images/flower.png"></div>
        
        <div class="container">
          
          <div class="align-center">
            <div class="content-element5">
              
              <h3 class="section-title style-2">Focus Life</h3>
              <div class="icon-divider style-3"><img class="svg" src="svg/divider1.svg" alt=""></div>
            
            </div>
            
             <p class="content-element4"><?php echo $ayarlar["hakkimizda_tr"]; ?></p>

            <a href="<?php echo $ayarlar["strURL"]; ?>/hakkimizda" class="btn btn-style-2">Kurumsal</a>

          </div>

        </div>

      </div>  
      <div class="page-section" >
 <div class="container wide2"  >
          
          <div class="content-element5">
            <div class="align-center">
              <h2>Hizmetlerimiz</h2>
             </div>
          </div>

          <div class="challenges flex-row item-col-3">
            
          <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 9");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
	   <div class="item-col">
            <div class="challenge-item">
              <div class="bg-img" data-bg="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>"></div>
              <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>" class="link"></a>
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
         
       <div class="page-section-bg parallax-section" style="     padding: 60px 0;" data-bg="images/1920x990_bg2.jpg">
        <div class="container">
          <div class="content-element5">
            <h3 class="align-center">Müşteri Yorumları</h3>
          </div>
          <div class="carousel-type-1">
            <div class="owl-carousel testimonial-holder style-2" data-max-items="1" data-autoplay="true">
 

				 <?php
				$veri_cek = $db->query("SELECT * FROM nedenildi WHERE haber_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
				 <div class="item-carousel">
                <!-- Carousel Item -->                  
                <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->
                <div class="testimonial">
                  <blockquote>
                     <p><?php echo 	$veri_listele["haber_aciklama"]; ?></p>
                  </blockquote>
                  <div class="author-box">
                    <span class="author-icon"><i class="svg"></i></span>
                    <div class="author-info">
                      <div class="author"><?php echo 	$veri_listele["haber_baslik"]; ?></div>
                      <a href="#" class="author-position"><?php echo 	$veri_listele["haber_description"]; ?></a>
                    </div>
                  </div>
                </div>
                <!-- /Carousel Item --> 
              </div>
<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>            </div>
          </div>
        </div>
      </div>
      <!-- Page section -->
    
	 <div class="page-section-bg">
        <div class="container wide2">
          <div class="content-element4">
            <div class="section-pre-title">Focus Life</div>
            <h2 class="section-title">Ekibimiz</h2>
          </div>
          <div class="carousel-type-2">
            <div class="team-holder owl-carousel" data-item-margin="30" data-max-items="5">
            
         <?php
				$veri_cek = $db->query("SELECT * FROM ekibimiz WHERE ekip_durum = 1 AND dil_id = '{$lang}' ORDER BY ekip_ust_id ASC LIMIT 99");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  
			 <div class="team-item">
                <a href="<?php echo $ayarlar["strURL"]; ?>/<?php echo $veri_listele["ekip_description"]; ?>" class="member-photo">
                  <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/teams/<?php echo $veri_listele["ekip_resim"]; ?>" alt="<?php echo 	$veri_listele["ekip_baslik"]; ?>">
                </a>
                <div class="team-desc">
                  <div class="member-info">
                    <h5 class="member-name"><a href="<?php echo $ayarlar["strURL"]; ?>/<?php echo $veri_listele["ekip_description"]; ?>"><?php echo 	$veri_listele["ekip_baslik"]; ?></a></h5>
                    <h6 class="member-position"><?php echo 	$veri_listele["ekip_aciklama"]; ?></h6>
                  </div>
                </div>
              </div>
              <!-- team element -->
              <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
			  </div>
          </div>
        </div>
      </div>
	  
      <div class="page-section-bg half-bg-col text-color-light">
        <div class="img-col-left"><div class="col-bg" data-bg="images/960x884_bg2.jpg"></div></div>
        <div class="img-col-right"><div class="col-bg" data-bg="images/960x884_bg1.jpg"></div></div>
        <div class="container wide2">
          <div class="row align-content-center">
            <div class="col-lg-5">
              <div class="content-element4">
                <div class="section-pre-title">Focus Life</div>
                <h2 class="section-title">Blog</h2>
              </div>
              <div class="carousel-type-2">
                <div class="owl-carousel flex-row entry-box style-2" data-max-items="2" data-item-margin="30">
                  <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                      <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 5");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>                                 
                                  
				<div class="entry">
                    <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                    <div class="thumbnail-attachment">
                      <a href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $veri_listele["haber_seo"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo $veri_listele["haber_baslik"]; ?>"></a>
                    </div>
                    <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                    <div class="entry-body">
                      <h6 class="entry-title"><a href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo $veri_listele["haber_baslik"]; ?></a></h6>
                      <div class="our-info vr-type"> 
                      </div>
                      <div class="entry-price">
                         <a href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $veri_listele["haber_seo"]; ?>" class="btn btn-small">Devamını Oku</a>
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
            <div class="col-lg-6 offset-lg-1"></div>
          </div>
        </div>
      </div>
    
	  <div class="page-section" style="    padding: 0px 0;"> 
        <div style="    margin-bottom: -8px;" class="map-container"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5165.112423152682!2d37.323158344276386!3d37.055237435038286!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54fa9fdb72717296!2zRm9jdXMgTGlmZSBBa3RpZiBTYcSfbMSxa2zEsSBZYcWfYW0gTWVya2V6aQ!5e0!3m2!1str!2str!4v1632046608666!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
   
	 </div>
<?php include("alt.php")?>
  </div>
<?php include("js.php")?>
</body>
</html>