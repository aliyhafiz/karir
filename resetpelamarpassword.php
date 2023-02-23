<?php
session_start();
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
      <?php include "header_home.php"; ?>
      <!-- Header Area End -->

      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_15">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h4><b>RESET PASSWORD</b></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcromb-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box-pagin">
                        <ul>
                           <li><a href="home">Home</a></li>
                           <li><a href="#">Login</a></li>
						   <li class="active-breadcromb"><a href="loginpelamar.html">Pelamar</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Login Area Start -->
      <section class="jobguru-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-box">
                     <div class="login-title">
                        <h3>Reset Password</h3>
                     </div>
					 
<?php
  if(!isset($_GET["reset_pass"])){
    exit("<center>Halaman tidak ditemukan !</center>");
  }
  $code = $_GET["reset_pass"];
  $query = mysqli_query($koneksidb, "SELECT email FROM reset_password WHERE code = '$code' ");
  if(mysqli_num_rows($query)==0){
    exit("<center>Mohon Maaf Link Expired !</center>");
  }
  $row = mysqli_fetch_array($query);
?>
					 
<?php
extract($_POST);
if(isset($_POST["new_pass"])){
    $code  = $_POST["code"];
    $email = $_POST["email"];
    $pass  = $_POST["password"];
    $pengacak   = "AJWKXLAJSCLWLW";
    $modEnkrip  = md5($pengacak . md5($pass) . $pengacak );
    $query = mysqli_query($koneksidb, "UPDATE pelamar SET password = '$modEnkrip' WHERE email = '$email'");
    if($query){
                mysqli_query($koneksidb, "DELETE FROM reset_password WHERE code = '$code'");
    }
	echo "<center><i class='icon fa fa-check-circle'></i>  <b>Sukses</b> Password Berhasil Di Update<br>Silakan Login<center>";
	echo "<meta http-equiv='refresh' content='2; url=loginpelamar.html'>";

	exit();
}
?>

                     <form method="post" action="" enctype="multipart/form-data">
					 	<input name="code" type="hidden" value="<?php echo $code ?>">
						<input type="hidden" value="<?php echo $row["email"]?>" name="email">
                        <div class="single-login-field">
                           <input type="password" id="password" name="password" placeholder="Masukkan Password Baru" required>
                        </div>
                        <div class="single-login-field">
                           <button type="submit" name="new_pass">Send</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	  
      <!-- Footer Area Start -->
      <?php include "footer.php"; ?>
      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
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
      <!--Main js-->
      <script src="assets/js/main.js"></script>
   <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX7sdBRGlBIZ%2bTYaAtEcqlm5UAdaAXIKYyy9nx4Mc0ILAlWqlu%2bAhwWPb32AGginsyajdItRyENOuqu%2b2E01AenXMeSBPLEDp4D%2bCmc8yypCvxw4cIxiNsfotWeKstQhe77OueUAzXmQKpiES%2flHQsQumjrIzRzhiRGFUp6yCjjN4NVr4evmrLe2hAue%2fUA9UcDO8Lg9SaiW6B1Y1R3dT4Iv7GnzbScAkI%2bjkyFBgys1iHAah38jfViuu5BbW9m4EywQCf4u3LCtHl1K0wyfJO3e3LlB2zQL3aBLhhng8Pe4SbZ%2fAgcLOLyByvmJ2UXiB2N306dRI5xU1W9osBH4VLRiQVcqnOYj73nRg5YBwFQeMPXWJIYSw6Tx%2bQ%2fM3TxFtVnmSooN3CznzSBjHfHDxeYDnhW05qep5t" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>


    <script type="text/javascript">
        $(function(){
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
				minDate: new Date()
            });
        });
    </script>

	<script type="text/javascript"  src="assets/js/rupiah.js"></script>