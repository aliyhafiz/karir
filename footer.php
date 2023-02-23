<footer class="jobguru-footer-area">
         <div class="footer-top section_50">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <div class="single-footer-widget">
                        <div class="footer-logo">
                           <a href="#">
                           <img src="images/logo/logo.png" alt="" />
                           </a>
                        </div>
                        <p>Portal Lowongan Kerja Terpercaya dan Terupdate</p>
                        <ul class="footer-social">
                           <li><a href="http://<?php echo $myData_setting['fb']; ?>" target="_blank" class="fb"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="http://<?php echo $myData_setting['twitter']; ?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                           
                           <li><a href="http://<?php echo $myData_setting['ig']; ?>" target="_blank" class="gp"><i class="fa fa-instagram"></i></a></li>
                       
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="single-footer-widget">
                        <h3>Lowongan</h3>
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
	ASC LIMIT 0,2")
    or die('Query salah : '.mysqli_error($koneksidb));	
	while ($myData = mysqli_fetch_assoc($query)) { 
		$title = preg_replace("/[^a-z0-9]/i","-",$myData['namalowongan']);
		$url_link = "lowongan-".$myData['id_lowongan']."-".$title.".html";
		$sisatgl = $myData['selisih'];
?> 	
                        <div class="latest-post-footer clearfix">
                          
                           <div class="latest-post-footer-right">
                              <h4><a href="<?php echo $url_link ?>"><?php echo $myData['namalowongan']; ?></a></h3></a></h4>
                              <p>Post: <?php echo IndonesiaTgl($myData['tgl_upload']); ?></p>
                           </div>
                        </div>
<?php } ?>                       
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="single-footer-widget">
                        <h3>Link</h3>
                        <ul>
                           <li><a href="lowongan.html"><i class="fa fa-angle-double-right "></i> Info Lowonan</a></li>
                           <li><a href="perusahaan.html"><i class="fa fa-angle-double-right "></i> Perusahaan</a></li>
                           <li><a href="artikel.html"><i class="fa fa-angle-double-right "></i> Berita</a></li>
                           <li><a href="kontak.html"><i class="fa fa-angle-double-right "></i> Kontak</a></li>
                           
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="single-footer-widget footer-contact">
                        <h3>Kontak</h3>
                        <p><i class="fa fa-map-marker"></i> <?php echo $myData_setting['alamat']; ?> </p>
                        <p><i class="fa fa-phone"></i> <?php echo $myData_setting['telp']; ?></p>
						<p><i class="fa fa-whatsapp"></i> <?php echo $myData_setting['wa']; ?></p>
                        <p><i class="fa fa-envelope-o"></i> <?php echo $myData_setting['email']; ?></p>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="copyright-left">
                        <p>Copyright &copy; <?php echo $myData_setting['footer']; ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>