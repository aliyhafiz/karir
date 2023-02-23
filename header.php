	<header class="jobguru-header-area stick-top forsticky">
         <div class="menu-animation">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-2">
                     <div class="site-logo">
                        <a href="#">
                        <img src="images/logo/<?php echo $myData_setting['logo']; ?>" alt="" class="non-stick-logo" />
                        <img src="images/logo/<?php echo $myData_setting['logo']; ?>" alt="" class="stick-logo" />
                        </a>
                     </div>
                     <!-- Responsive Menu Start -->
                     <div class="jobguru-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                  </div>
                  <div class="col-lg-6">
                     <div class="header-menu">
                        <nav id="navigation">
                           <ul id="jobguru_navigation">
                              <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							  <li><a href="lowongan.html">Lowongan</a></li>
							  <li><a href="perusahaan.html">Perusahaan</a></li>
							  <li><a href="pengumuman.html">Pengumuman</a></li>
							  <li><a href="artikel.html">Berita</a></li>
							  <li><a href="kontak.html">Kontak</a></li>
						
                              
                           </ul>
                        </nav>
                     </div>
                  </div>
				  
				
				  <div class="col-lg-4">
                     <div class="header-menu">
                        <nav id="navigation">
                           <ul id="jobguru_navigation">
                              <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							
<?php  
session_start();
if (empty($_SESSION['id_pelamar'] || $_SESSION['id_perusahaan'])){
?>             
                           <li><a href="registerpelamar.html"><i class="fa fa-user"></i> sign up</a></li>
                           
						   <li class="has-children">
                                 <a href="#"><i class="fa fa-lock"></i> login</a>
                                 <ul>
                                    <li><a href="loginpelamar.html">Pelamar</a></li>
									<li><a href="loginemployer.html">Perusahaan</a></li>
                                    
                                 </ul>
                              </li>
						   
<?php }elseif (!empty($_SESSION['id_pelamar'])){ ?>	
                           
                           <li><a href="pelamardashboard.html"><i class="fa fa-user"></i> <?php echo $_SESSION["namapelamar"]; ?></a></li>
						   <li><a href="model/login_out.php"><i class="fa fa-lock"></i> Logout</a></li>
<?php }elseif (!empty($_SESSION['id_perusahaan'])){ ?>	
                           
                           <li><a href="employerdashboard.html"><i class="fa fa-user"></i> <?php echo $_SESSION["nama"]; ?></a></li>
						   <li><a href="model/login_out.php"><i class="fa fa-lock"></i> Logout</a></li>
<?php } ?>
						
                            
                           </ul>
                        </nav>
                     </div>
                  </div>
				
				  
                  
               </div>
            </div>
         </div>
      </header>