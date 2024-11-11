<?php
	session_start();
	
	unset($_SESSION['sesi_id']);
	unset($_SESSION['sesi_username']);
	unset($_SESSION['level']) ;

	if(empty($_SESSION['sesi_id']) AND empty($_SESSION['sesi_username']) AND empty($_SESSION['level'])):
		echo "<script>location.href='index.php'; </script>";
	else:
		echo "<script>alert('Gagal logout');window.history.go(-1); </script>";
		exit();
	endif;
?>