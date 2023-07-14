<?php  include("include/baglan.php");  include("include/fonksiyon.php");  ?>
<?php header('Content-type: Application/xml; charset="utf8"', true); ?>
		<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
				xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				xmlns:xhtml="http://www.w3.org/1999/xhtml"
				xsi:schemaLocation="
					http://www.sitemaps.org/schemas/sitemap/0.9
					http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
			
			<url>
				<loc><?php echo $ayarlar["strURL"]; ?></loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
				
			<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/hakkimizda</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
			
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/ekibimiz</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
			
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
			
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/galeriler</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
			
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/blog</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
			
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/iletisim</loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
			 
			
<?php 
		//Markalar
		$list = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 ORDER BY haber_tarih ASC");
		foreach($list as $row){  	 
			$strURL = $ayarlar["strURL"].'/hizmet/'.$row["haber_seo"]; 
?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>
<?php 
			} 
?> 
 
		 
<?php 
		//Markalar
		$list = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 ORDER BY haber_tarih ASC");
		foreach($list as $row){  	 
			$strURL = $ayarlar["strURL"].'/blog/'.$row["haber_seo"]; 
?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>
<?php 
			} 
?> 	 
<?php 
		//Markalar
		$list = $db->query("SELECT * FROM galeriler WHERE galeri_durum = 1 ORDER BY galeri_tarih ASC");
		foreach($list as $row){  	 
			$strURL = $ayarlar["strURL"].'/galeri/'.$row["galeri_seo"]; 
?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>
<?php 
			} 
?> 
 
			  </urlset>