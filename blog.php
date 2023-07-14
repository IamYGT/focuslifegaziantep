<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");

 		$sayfa = (isset($q) ? $q : 1);
		$toplam_veri_sayisi = $db->query("SELECT COUNT(*) FROM haberler WHERE dil_id = '{$lang}' ")->fetchColumn();
		$limit = 6; //gösterilecek veri sayısı
		$sonSayfa = ceil($toplam_veri_sayisi/$limit);
		$baslangic = ($sayfa-1)*$limit; 
 ?>
<!DOCTYPE html>
<html lang="tr">
 <title>Blog - Gaziantep Focus Life</title> 
 <?php include("css.php")?>
</head>
<body>
  <div class="loader"></div>
  <div id="wrapper" class="wrapper-container">
      <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->
    <nav id="mobile-advanced" class="mobile-advanced"></nav>
    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
    <header id="header" class="header sticky-header sticky">
	<?php include("ust.php")?>
	</header>     
	<div class="breadcrumbs-wrap">
      <div class="container">
        <h1 class="page-title">Blog</h1>
        <ul class="breadcrumbs">
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
          <li>Blog</li>
         </ul>
      </div>
    </div>

    <div id="content" class="page-content-wrap">

      <div class="container">
        
        <div class="row">
          
          <main id="main" class="col-lg-12 col-md-12">

            <div class="content-element5">
              
              <div class="entry-box">
                <div class="row">
<?php
		$list = $db->query("SELECT * FROM haberler WHERE  dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT $baslangic,$limit"); 
			if ($list->rowCount()){
				foreach($list as $row){ 
?> 
 
                <div class="entry col-lg-6 col-md-6">
                   <div class="thumbnail-attachment">
                    <a href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $row["haber_seo"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $row["haber_resim"]; ?>" alt="<?php echo $row["haber_baslik"]; ?>"></a>
                    <div class="entry-label">Blog</div>
                  </div>
                   <div class="entry-body">
            
                    <h5 class="entry-title"><a href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $row["haber_seo"]; ?>"><?php echo $row["haber_baslik"]; ?> </a></h5>
                    <div class="entry-meta"> 
                      <time class="entry-date" datetime="<?php echo date("d/m/Y", strtotime($row["haber_tarih"])); ?>"><?php echo date("d/m/Y", strtotime($row["haber_tarih"])); ?></time>
                       <a href="#" class="entry-cat">Focus Life</a> 
                    </div>
                    <p><?php echo $row["haber_kisaaciklama"]; ?> </p>
                    <div class="flex-row justify-content-between">
                      <a href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $row["haber_seo"]; ?>" class="btn btn-small btn-style-4">Devamını Oku</a>
                     </div>
                    
                  </div>
            
                </div>
                
                <?php 	
				}
			}else{
				echo 'Listelenecek veri bulunamadı.';
			}
?>


			   </div>
 
              </div>

            </div>

            <div class="align-center">
          <ul class="pagination">
 	<?php if($toplam_veri_sayisi > $limit){ ?>
		 
				<?php 
					$x = 2; 
					if($sayfa > 1){	
						$onceki = $sayfa-1;	
						echo '<li><a href="?q='.$onceki.'" class="prev-page"></a></li>';
					}	
					if($sayfa==1){
						echo '<li><a class="active" >1</a></li>';
					} else {
						echo '<li><a href="?q=1" class="">1</a></li>';
					}
					if($sayfa-$x > 2){
						echo '...'; 
						$i = $sayfa-$x;
					} else { 			
						$i = 2; 		  
					}
					for($i; $i<=$sayfa+$x; $i++) {
						if($i==$sayfa){
							echo '<li><a href="#" class="active">'.$i.'</a></li>';
						} else {
							echo '<li><a href="?q='.$i.'" class=" ">'.$i.'</a></li>';
						}
						if($i==$sonSayfa) break;  
					}		
					if($sayfa < $sonSayfa){	  
						$sonraki = $sayfa+1;   
						echo '<li><a href="?q='.$sonraki.'" class="next-page"></a> </li>';		  
					}	
			?> 
			  </ul>
		  <?php } ?>
		</div>
	 

          </main>
           </div>

      </div>
      
    </div>

   
    </div>
<?php include("alt.php")?>
  </div>
<?php include("js.php")?>
</body>
</html>