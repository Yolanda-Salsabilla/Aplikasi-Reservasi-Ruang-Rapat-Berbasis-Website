<?php
	$id_menu = $_GET['id'];
	
	$hapus_menu = mysqli_query($koneksi,"DELETE FROM menu WHERE id_menu=$id_menu");
										
	if($hapus_menu):
		echo "<script>alert('Berhasil hapus'); location.href='home.php?q=menu';</script>";
	else:
		echo "<script>alert('Gagal hapus '); window.history.go(-1);</script>";
		exit();
	endif;
?>