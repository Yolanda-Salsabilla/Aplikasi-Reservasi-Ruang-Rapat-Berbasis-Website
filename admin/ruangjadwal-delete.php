<?php
	$id_ruangan = $_GET['id'];
	
	$hapus_ruangan = mysqli_query($koneksi,"DELETE FROM ruangan WHERE id_ruangan=$id_ruangan");
										
	if($hapus_ruangan):
		echo "<script>alert('Berhasil hapus ruangan'); location.href='home.php?q=rj';</script>";
	else:
		echo "<script>alert('Gagal hapus user konsumsi'); window.history.go(-1);</script>";
		exit();
	endif;
?>