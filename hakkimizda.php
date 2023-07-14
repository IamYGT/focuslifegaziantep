<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<title>Hakkımızda - Gaziantep Focus Life</title>
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
        <h1 class="page-title">Hakkımızda</h1>
        <ul class="breadcrumbs">
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
          <li>Hakkımızda</li>
        </ul>
      </div>
    </div>
    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <div id="content">
      <!-- Page section -->
      <div class="page-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
              <h3 class="section-title">Hakkımızda</h3>
              <div class="content-element3">
                <p><?php echo $ayarlar["hakkimizda_tr"]; ?></p>
              </div>
             </div>
            <div class="col-lg-6 col-md-12">
              <div class="video-holder">
                <a href="#" class="video-btn" data-fancybox="video"></a>
                <img src="images/555x338_img1.jpg" alt="Focus Life Kurumsal">
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="page-section">
        <div class="container">
          <div class="info-boxes flex-row item-col-2">
       
            <div class="info-box">
              <div class="box-img">
                <img src="images/360x234_img2.jpg" alt="Focus Life Misyonumuz">
              </div>
              <h4 class="box-title"><a href="#">Misyonumuz</a></h4>
              <p>İnsan varlığının değerinin bilincinde olarak; Zihin ve beden bir bütündür
mottosuyla hem psikolojik sağlığı hem de beden sağlığını hedef alarak sağlıklı
yaşamın anahtarıyız. </p>
            </div>
            <div class="info-box">
              <div class="box-img">
                <img src="images/360x234_img3.jpg" alt="Focus Life Vizyonumuz">
              </div>
              <h4 class="box-title"><a href="#">Vizyonumuz</a></h4>
              <p>Aktif Sağlıklı Yaşam Merkezi olarak; önceliğimiz insan sağlığını hedef alıp,
multidisipliner çalışarak sağlıkta devrim yaratıp en tanınan marka merkezi
olmak.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Page section -->
      <div class="page-section-bg parallax-section" data-bg="images/1920x990_bg2.jpg">
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
      <div class="page-section">
        <div class="container">
          <div class="content-element5">
            <h3 class="align-center">Galeri</h3>
          </div>
          <div class="carousel-type-2">
            <div class="owl-carousel portfolio-holder" data-max-items="3" data-item-margin="30">
            
		  <?php
		  
$veri_cek = $db->query("SELECT * FROM galeriler WHERE galeri_durum = 1 AND dil_id = '{$lang}' ORDER BY galeri_ust_id DESC LIMIT 99");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
		  
				<div class="project">
                <!-- - - - - - - - - - - - - - Project Image - - - - - - - - - - - - - - - - -->
                <div class="project-image">
                  <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/gallery/<?php echo $veri_listele["galeri_resim"]; ?>" alt="">
                  <a href="<?php echo $ayarlar["strURL"]; ?>/galeri/<?php echo $veri_listele["galeri_seo"]; ?>" class="project-link"  ></a>
                </div>

                <div class="project-description">
                
                  <h5 class="project-title"><a href="<?php echo $ayarlar["strURL"]; ?>/galeri/<?php echo $veri_listele["galeri_seo"]; ?>"><?php echo $veri_listele["galeri_baslik"]; ?></a></h5>

                  <a href="<?php echo $ayarlar["strURL"]; ?>/galeri/<?php echo $veri_listele["galeri_seo"]; ?>" class="project-cats">Focus Life</a>

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
      </div>
    </div>
<?php include("alt.php")?>
  </div>
 <?php include("js.php")?>
</body>
</html>