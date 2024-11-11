<?php
	$id_jadwal = $_GET['id'];
	
	$hapus_jadwal = mysqli_query($koneksi,"DELETE FROM jadwal WHERE id_jadwal=$id_jadwal");
										
	if($hapus_jadwal):
		echo "<script>alert('Berhasil hapus jadwal'); location.href='home.php?q=rj';</script>";
	else:
		echo "<script>alert('Gagal hapus jadwal'); window.history.go(-1);</script>";
		exit();
	endif;
?>