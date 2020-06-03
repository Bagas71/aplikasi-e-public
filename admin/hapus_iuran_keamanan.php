<?php 
session_start();
if(!isset($_SESSION["login"]))
  {
 	header("Location: login.php");
 	exit;
  }
require 'functions.php';


$id = $_GET["id"];


if( hapusKeamanan($id) > 0 ){

		echo "
			<script>
				alert('data berhasil dihapus!')
				document.location.href = 'hasil_input_iuran_keamanan.php';
			</script>
		";
	}else{
			echo "
			<script>
				alert('data gagal dihapus!')
				document.location.href = 'hasil_input_iuran_keamanan.php';
			</script>
			";
		
	}


 ?>