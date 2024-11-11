<?php
	$id_pesan = $_GET['id'];
	
	$hapus_pesan = mysqli_query($koneksi,"DELETE FROM pesan WHERE id_pesan=$id_pesan");
										
	if($hapus_pesan):
		echo "<script>alert('Berhasil hapus'); location.href='home.php?q=lihat-permohonan';</script>";
	else:
		echo "<script>alert('Gagal hapus '); window.history.go(-1);</script>";
		exit();
	endif;
?>