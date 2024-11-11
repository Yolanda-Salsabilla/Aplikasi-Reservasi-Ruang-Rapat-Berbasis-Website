<?php
	$id_user = $_POST['id_user'];
	$id_pesan = $_POST['id_pesan'];
	$ruangan = $_POST['ruangan'];
	$nama_acara = $_POST['nama_acara'];
	$jumlah_peserta = $_POST['jumlah_peserta'];
	$tgl_permohonan = $_POST['tgl_permohonan'];
	$tgl_selesai = $_POST['tgl_selesai'];
	$waktu = $_POST['waktu'];
	$waktu_selesai = $_POST['waktu_selesai'];
	$pointer = $_POST ['pointer'];
	$proyektor = $_POST['proyektor'];
	$snack_pagi = $_POST['snack_pagi'];
	$makan_siang = $_POST['makan_siang'];
	$snack_siang = $_POST['snack_siang'];
	$makan_malam = $_POST ['makan_malam'];

	include '../config/koneksi.php';
	
	
	$panggil_waktu = mysqli_query($koneksi,"SELECT pukul_jadwal FROM jadwal where id_jadwal='$waktu'");
	
	list($waktu1)=mysqli_fetch_row($panggil_waktu);
	
	$panggil_waktus = mysqli_query($koneksi,"SELECT pukul_jadwal FROM jadwal where id_jadwal='$waktu_selesai'");
	
	list($waktu2)=mysqli_fetch_row($panggil_waktus);
	$data = mysqli_query($koneksi,"SELECT * FROM pesan WHERE id_ruangan='$ruangan'
																
					and tgl_pesan<='$tgl_selesai'and tgl_selesai>='$tgl_permohonan'
					and waktu<='$waktu2' and waktu_selesai>='$waktu1'");
	$cek = mysqli_num_rows($data);

	if($cek>0){
		echo "<script>alert('Bokingan Penuh');window.history.go(-1);</script>";
			exit();

	}else{
	
	$edit =mysqli_query($koneksi,"UPDATE pesan SET
									id_ruangan='$ruangan',
											nama_acara='$nama_acara',
											waktu='$waktu1',
											waktu_selesai='$waktu2',
											tgl_pesan='$tgl_permohonan',
											tgl_selesai='$tgl_selesai',
											jumlah_peserta='$jumlah_peserta',
											snack_pagi='$snack_pagi',
											makan_siang='$makan_siang',
											snack_siang='$snack_siang',
											makan_malam='$makan_malam',
											pointer='$pointer',
											proyektor='$proyektor'
											WHERE id_pesan=$id_pesan
								 ");
		if($edit)
			:
		echo "<script>alert('Berhasil tambah pesanan');location.href='../home.php?q=lp';</script>";
		else
		:
			echo "<script>alert('Gagal simpan');window.history.go(-1);</script>";
			exit();
			endif;


	}	


				
								 
?>