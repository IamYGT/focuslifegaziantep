<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>İletişim - Gaziantep Focus Life</title>
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
        <h1 class="page-title">İletişim</h1>
        <ul class="breadcrumbs">
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
          <li>İletişim</li>
        </ul>
      </div>
    </div>
    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <div id="content">
      <div class="map-section content-element10">
        <div   class="map-container"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5165.112423152682!2d37.323158344276386!3d37.055237435038286!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54fa9fdb72717296!2zRm9jdXMgTGlmZSBBa3RpZiBTYcSfbMSxa2zEsSBZYcWfYW0gTWVya2V6aQ!5e0!3m2!1str!2str!4v1632046608666!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        <div class="container">
          <div class="map-info">
            <div class="row">
              <div class="col-md-4 col-sm-12">
                 <div class="our-info vr-type">
                  <div class="info-item">
                    <i class="licon-map-marker"></i>
                    <span class="post">Adres</span>
                    <h6><?php echo $ayarlar["strAddress"]; ?></h6>
                    <a href="https://www.google.com/search?client=opera-gx&q=focus+life+gaziantep&sourceid=opera&ie=UTF-8&oe=UTF-8#" class="link-text">Harita Adresi</a>
                  </div> 
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                 <div class="our-info vr-type">
                  
                  <div class="info-item">
                    <i class="licon-telephone"></i>
                    <span class="post">Telefon</span>
                   <a href="tel:<?php echo $ayarlar["strPhone"]; ?>">  <h6 content="telephone=no"><?php echo $ayarlar["strPhone"]; ?></h6> </a>
                  </div>
                 
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                 <div class="our-info vr-type">
                  
                  <div class="info-item">
                    <i class="licon-at-sign"></i>
                    <span class="post">Eposta Adresi</span>
                   <a href="mailto:<?php echo $ayarlar["strMail"]; ?>">  <h6  ><?php echo $ayarlar["strMail"]; ?></h6> </a>
                  </div>
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-section parallax-section text-color-light" data-bg="images/1920x1000_bg2.jpg">
        <div class="container">
          <div class="content-element5">
            <div class="section-pre-title">Bir sorunuz mu var?</div>
            <h2 class="section-title">İletişim Formu</h2>
          </div>
		   <?php 
										if(isset($submit)){
											if(!empty($isim) ||  !empty($eposta) || !empty($telefon) || !empty($konu) ||  !empty($mesaj)){  

                                           /*          require 'include/PHPMailer/src/Exception.php';
                                                    require 'include/PHPMailer/src/PHPMailer.php';
                                                    require 'include/PHPMailer/src/SMTP.php'; */
                                                    require_once("include/phpmailer/class.phpmailer.php");
                                                    $mail = new PHPMailer(true); 
                                                    $mail->IsSMTP();
                                                    $mail->SMTPDebug = 0; 
                                                    $mail->SMTPAuth = true;
													$mail->SMTPSecure = "tls";
													$mail->Host = "smtp.yandex.com";
													$mail->Port = 587;
                                                      $mail->IsHTML(true);
                                                    $mail->SetLanguage("tr", "phpmailer/language");
                                                    $mail->CharSet ="utf-8";
                                                    $mail->Username = "info@focuslifegaziantep.com"; //yandex mail adresi
                                                    $mail->Password = "qyxsfptlppkodzrs";
                                                    $mail->SetFrom("info@focuslifegaziantep.com", " İletişim Formundan Gelen Mesaj"); // Mail attığımızda yazacak isim
                                                    $mail->AddAddress("info@focuslifegaziantep.com"); // Maili gondereceğimiz kişi/alıcı
                                                    $mail->Subject = "İletişim Formundan Gelen Mesaj"; // Konu başlığı 
                                                    $mail->Body = '
                                                    <html>
                                                        <body>
                                                            <table class="made-in_text" border="0" cellSpacing="10" cellPadding="4" height="254" width="700">
																<tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Adı :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $isim . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Eposta :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $eposta . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Konu :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $konu . '</font></td>
                                                                </tr>  
																 	 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Telefon :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $telefon . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Mesaj :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $mesaj . '</font></td>
                                                                </tr>  
																  
                                                            </table>
                                                        </body>
                                                    </html>
                                                    '; // Mailin içeriği
                                               
												if($mail->send()){
													$error = array(
														'type'	=>	'success',
														'title'	=>	'Başarılı!',
														'text'	=>	'Başvurunuz başarılı şekilde gönderildi, anasayfaya dönmek için <a class="alert-link" href="/">buraya tıklayın</a>..'
													);
												} else {
													$error = array(
														'type'	=>	'danger',
													'title'	=>	'Hata!',
													'text'	=>	'Boş alan bıraktınız, geri dönmek için <a class="alert-link" onclick="javascript:history.go(-1); return false;" href="#">buraya tıklayın</a>..'
													);
												}
											} else {
												$error = array(
													'type'	=>	'danger',
													'title'	=>	'Hata!',
													'text'	=>	'Boş alan bıraktınız, geri dönmek için <a class="alert-link" onclick="javascript:history.go(-1); return false;" href="#">buraya tıklayın</a>..'
												);
											}
										} 
?>

									
									<?php  
			if(isset($error)) {
?>
					<div class="row">
						<div class="col-lg-12" style="margin-bottom:30px;">
							<div class="alert alert-<?php echo $error["type"]; ?> solid alert-dismissible fade show">
								<strong><?php echo $error["title"]; ?></strong>
								<p><?php echo $error["text"]; ?></p>
							</div>
						</div>
					</div>
<?php
			}
?>

           <form action="#" method="POST"  class="contact-form">
            <div class="contact-item">
              <label>İsminiz</label>
              <input type="text" name="isim" required="">
            </div>
            <div class="contact-item">
              <label>Eposta Adresi</label>
              <input type="email" name="eposta" required="">
            </div>
            <div class="contact-item">
              <label>Konu</label>
              <input type="text" name="konu">
            </div>
            <div class="contact-item">
              <label>Telefon</label>
              <input type="text" name="telefon">
            </div>
            <div class="contact-item">
              <label>Mesajınız</label>
              <textarea rows="4" name="mesaj"></textarea>
            </div>
            <div class="contact-item">
              <button type="submit"   name="submit" class="btn btn-style-3"  >Gönder</button>
            </div>
          </form>
        </div>
      </div>
    </div> 
   <?php include("alt.php")?> 
  </div>
  <?php include("js.php")?>
</body>
</html>