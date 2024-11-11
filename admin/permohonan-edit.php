<?php
	$id_pesan = $_GET['id'];

	$tampil_pesan = mysqli_query($koneksi,"SELECT b.id_ruangan,a.id_pesan,b.nama_ruangan,a.nama_acara,a.jumlah_peserta,a.tgl_pesan,a.tgl_selesai,a.waktu,a.waktu_selesai,a.pointer,a.proyektor,a.snack_pagi,a.makan_siang,a.snack_siang,a.makan_malam 
	FROM pesan a, ruangan b
	WHERE a.id_pesan=$id_pesan
	and a.id_ruangan=b.id_ruangan

	
	");
	list($id_ruangan,$id_pesan,$nama_ruangan,$nama_acara,$jumlah_peserta,$tgl_pesan,$tgl_selesai,$waktu,$waktu_selesai,$pointer,$proyektor,$snack_pagi,$makan_siang,$snack_siang,$makan_malam)=mysqli_fetch_row($tampil_pesan);
?>

<div class="container" style="background-color:white;" id="edit-permintaan">
<br>
	<div class="container">
	 <h4>Edit Data Pesanan </h4><br>
		<div class="row">
			<form class="col s12" action="admin/permohonan-edit-proses.php" method="post">
				<input type="hidden" name="id_user" value="<?php echo $id_user;?>" required>
				<input type="hidden" value="<?php echo $id_pesan; ?>" name="id_pesan">
				
				<div class="row">
					<div class="input-field col s6">
						<select name="ruangan" required>
							<option value="<?php echo $id_ruangan?>"><?php echo $nama_ruangan?></option>
	<?php
		$panggil_ruangan = mysqli_query($koneksi,"SELECT id_ruangan,nama_ruangan,kapasitas FROM ruangan");
		while(list($id_ruangan,$nama_ruangan,$kapasitas)=mysqli_fetch_row($panggil_ruangan)):
	?>
							<option value="<?php echo $id_ruangan; ?>"><?php echo $nama_ruangan; ?> (Kapasitas : <?php echo $kapasitas;?>)</option>
	<?php endwhile;?>
							
						</select>
                        <label>Pilih 	Ruangan:</label>
					</div>
					<div class="input-field col s6">
						<input id="nama_acara" type="text" name="nama_acara" value="<?php echo $nama_acara;?>"class="validate" required>
						<label for="nama_acara">Nama Acara</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="jumlah_peserta" type="text" name="jumlah_peserta" value="<?php echo $jumlah_peserta;?>"class="validate" required>
						<label for="jumlah_peserta">Jumlah Peserta</label>
					</div>
					
					<div class="input-field col s3">
						<input type="date" class="datepicker2" name="tgl_permohonan" 
						value="<?php echo $tgl_pesan;?>"> 
						<label class="active" id="date"required>Tanggal Mulai Acara:</label>
					</div>
					<div class="input-field col s3">
						<input type="date" class="datepicker2" name="tgl_selesai"
						value="<?php echo $tgl_selesai;?>">
						<label class="active" id="date" required>Tanggal Selesai Acara :</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
                        <select name="waktu" required>
                            <option value="" disabled selected> Pilih Waktu</option>
	<?php
		$panggil_jadwal = mysqli_query($koneksi,"SELECT id_jadwal,pukul_jadwal FROM jadwal");
		while(list($id_jadwal,$pukul_jadwal)=mysqli_fetch_row($panggil_jadwal)):
	?>
							<option value="<?php echo $id_jadwal; ?>"><?php echo $pukul_jadwal; ?></option>
	<?php endwhile;?>
						</select>
						<label>Waktu Mulai Acara:</label>
					</div>	
				
				
					<div class="input-field col s6">
                        <select name="waktu_selesai" required>
                            <option value="" disabled selected> Pilih Waktu</option>
		<?php
			$panggil_jadwal = mysqli_query($koneksi,"SELECT id_jadwal,pukul_jadwal FROM jadwal");
			while(list($id_jadwal,$pukul_jadwal)=mysqli_fetch_row($panggil_jadwal)):
		?>
							<option value="<?php echo $id_jadwal; ?>"><?php echo $pukul_jadwal; ?></option>
		<?php endwhile;?>
						</select>
						<label>Waktu Acara Selesai:</label>
					</div>				
					 
				</div>
			<br>
			<br>
			<h4> Perlengkapan</h4>
			<div class="row">
				<div class="input-field col s6">
					<input id="pointer" type="text" class="validate" name="pointer" value="<?php echo $pointer;?>">
                    <label for="pointer">Pointer</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="proyektor" type="text" class="validate" name="proyektor" value="<?php echo $proyektor;?>">
                    <label for="proyektor">Proyektor</label>
				</div>
			</div>
			</div>
			<hr>
			<h4>Konsumsi</h4>
			<!---------Menu Konsumsi------>			
			<div class="row">
				<div class="input-field col s6">
					<input id="snack_pagi" type="text" class="validate" name="snack_pagi" 
					value="<?php echo $snack_pagi;?>">
                    <label for="snack_pagi">Snack Pagi</label>
				</div>
				<div class="input-field col s6">
					<input id="makan_siang" type="text" class="validate" name="makan_siang"
					value="<?php echo $makan_siang;?>">
                    <label for="makan_siang">Makan Siang</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="snack_siang" type="text" class="validate" name="snack_siang"
					value="<?php echo $snack_siang;?>">
                    <label for="snack_siang">Snack Siang</label>
				</div>
				<div class="input-field col s6">
					<input id="makan_malam" type="text" class="validate" name="makan_malam"
					value="<?php echo $makan_malam;?>">
                    <label for="makan_malam">Makan Malam</label>
				</div>
			</div>				
				<div class="row">
					<div class="input-field col s12">
						<button class="btn waves-effect black" type="submit" name="action">Kirim
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>