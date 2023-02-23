<?php
	if($act==lowongan){
		include "view/lowongan/lowongan.php";	
	}else if($act==lowongandetail){
		include "view/lowongan/lowongandetail.php";
	}else if($act==lowongancari){
		include "view/lowongan/lowongancari.php";
	}else if($act==lowonganpage){
		include "view/lowongan/lowonganpage.php";
	}else if($act==lowonganbidang){
		include "view/lowongan/lowonganbidang.php";
	}else if($act==perusahaan){
		include "view/perusahaan/perusahaan.php";
	}else if($act==perusahaandetail){
		include "view/perusahaan/perusahaandetail.php";

	}else if($act==employerdashboard){
		include "view/employer/employerdashboard.php";
	}else if($act==employerprofil){
		include "view/employer/employerprofil.php";
	}else if($act==employerlowongan){
		include "view/employer/employerlowongan.php";
	}else if($act==employerlowonganform){
		include "view/employer/employerlowonganform.php";
	}else if($act==employerlowonganupdate){
		include "view/employer/employerlowonganupdate.php";
	}else if($act==employerpelamar){
		include "view/employer/employerpelamar.php";
	}else if($act==employerpelamarcari){
		include "view/employer/employerpelamarcari.php";
	}else if($act==employerpelamarlampiran){
		include "view/employer/employerpelamarlampiran.php";
	}else if($act==employerpelamardetail){
		include "view/employer/employerpelamardetail.php";
//	}else if($act==employergaleri){
//		include "view/employer/employergaleri.php";
	}else if($act==employergaleriform){
		include "view/employer/employergaleriform.php";		
	}else if($act==employerpassword){
		include "view/employer/employerpassword.php";	
	}else if($act==employerlogo){
		include "view/employer/employerlogo.php";	
	}else if($act==employerpengumuman){
		include "view/employer/employerpengumuman.php";	
	}else if($act==employerpengumumanform){
		include "view/employer/employerpengumumanform.php";
	}else if($act==employerpelamarterima){
		include "view/employer/employerpelamarterima.php";
		
	}else if($act==pelamardashboard){
		include "view/pelamar/pelamardashboard.php";
	}else if($act==pelamardetail){
		include "view/pelamar/pelamardetail.php";
	}else if($act==pelamarprofil){
		include "view/pelamar/pelamarprofil.php";
	}else if($act==pelamarlowongan){
		include "view/pelamar/pelamarlowongan.php";
	}else if($act==pelamarpassword){
		include "view/pelamar/pelamarpassword.php";
	}else if($act==pelamarlampiran){
		include "view/pelamar/pelamarlampiran.php";
	}else if($act==pelamardok){
		include "view/pelamar/pelamardok.php";
	}else if($act==pelamarcv){
		include "view/pelamar/pelamarcv.php";
	}else if($act==pelamarkategori){
		include "view/pelamar/pelamarkategori.php";
	}else if($act==pelamartesti){
		include "view/pelamar/pelamartesti.php";
	}else if($act==pelamarlogo){
		include "view/pelamar/pelamarlogo.php";	
		
		
	}else if($act==artikel){
		include "view/artikel/artikel.php";
	}else if($act==artikelcari){
		include "view/artikel/artikelcari.php";
	}else if($act==artikeldetail){
		include "view/artikel/artikeldetail.php";
	}else if($act==artikelkategori){
		include "view/artikel/artikelkategori.php";
		
	}else if($act==kontak){
		include "view/kontak/kontak.php";
	}else if($act==registerpelamar){
		include "view/register/registerpelamar.php";
	}else if($act==profil){
		include "view/register/profil.php";
	}else if($act==registerdua){
		include "view/register/registerdua.php";
	}else if($act==registerperusahaan){
		include "view/register/registerperusahaan.php";
	}else if($act==loginpelamar){
		include "view/login/loginpelamar.php";
	}else if($act==loginemployer){
		include "view/login/loginemployer.php";
	}else if($act==privasi){
		include "view/privasi/privasi.php";
	}else if($act==faq){
		include "view/faq/faq.php";
	}else if($act==registerp3mi){
		include "view/register/registerpjtki.php";
	}else if($act==loginp3mi){
		include "view/login/loginpjtki.php";
	}else if($act==p3mi){
		include "view/perusahaan/pjtki.php";	
	}else if($act==p3miperusahaan){
		include "view/perusahaan/pjtkiperusahaan.php";	
	}else if($act==p3midetail){
		include "view/perusahaan/pjtkidetail.php";	
	}else if($act==pengumuman){
		include "view/pengumuman/pengumuman.php";	
	}else if($act==pengumumandetail){
		include "view/pengumuman/pengumumandetail.php";
		
	}else if($act==resetemployer){
		include "view/login/resetemployer.php";
	}else if($act==resetpelamar){
		include "view/login/resetpelamar.php";
		
	}else{
		include "../media/404.php";
	}
?>	