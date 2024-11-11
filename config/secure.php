<?php

	if(empty($_SESSION['sesi_id']) AND empty($_SESSION['sesi_username']))
	:
		echo "<script>alert('Anda harus login');window.history.go(-1); </script>";
		exit();
	endif;	


?>