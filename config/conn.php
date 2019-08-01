<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	session_start();
	mysql_connect("localhost", "root", "");
	mysql_select_db("buku_db");
	// settings
	$url = "http://localhost/website_projek_tugas_4matkul_wiwin/";
	// $title = "Website Pemesanan Katering";
	$no = 1;
	
	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
?>