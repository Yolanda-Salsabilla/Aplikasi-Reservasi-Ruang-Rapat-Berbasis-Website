<style type="text/css">
	.dropdown-content, .select-dropdown{
  		font-size: 12px !important;  
  		
  	} 
  	.select-dropdown li{
  		height: 20px !important;
  		overflow: visible;
  	}
   .dropdown-content li > span {
        font-size: 10px;
		line-height: 0;
    }
    .dropdown-content li{
       min-height: 0;
    }

</style>
<div class="container" style="background-color:white;" id="edit-permintaan">
<br>
	<div class="container">
	 <h4>Data Pesanan </h4><br>
		<div class="row">
			<form class="col s12" action="user/permohonan-kirim.php" method="post"enctype="multipart/form-data">
				<input type="hidden" name="id_user" value="<?php echo $id_user;?>" required>
				<div class="row">
					<div class="input-field col s6">
						<select name="ruangan" required>
							<option value="" disabled selected>Pilih Ruangan:</option>
	<?php
		$panggil_ruangan = mysqli_query($koneksi,"SELECT id_ruangan,nama_ruangan,kapasitas FROM ruangan where status = 1 order by id_ruangan asc");
		while(list($id_ruangan,$nama_ruangan,$kapasitas)=mysqli_fetch_row($panggil_ruangan)):
	?>
							<option value="<?php echo $id_ruangan; ?>"><?php echo $nama_ruangan; ?> (Kapasitas : <?php echo $kapasitas;?>)</option>
	<?php endwhile;?>
							
						</select>
                        <label>Pilih Ruangan:</label>
					</div>
					<div class="input-field col s6">
						<input id="nama_acara" type="text" name="nama_acara" class="validate" required>
						<label for="nama_acara">Nama Acara</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="jumlah_peserta" type="text" name="jumlah_peserta" class="validate" required>
						<label for="jumlah_peserta">Jumlah Peserta</label>
					</div>
					
					<div class="input-field col s3">
						<input type="date" class="datepicker" name="tgl_permohonan">
						<label class="active" id="date" required>Tanggal Mulai Acara:</label>
					</div>
					<div class="input-field col s3">
						<input type="date" class="datepicker" name="tgl_selesai">
						<label class="active" id="date" required>Tanggal Selesai Acara :</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
                        <select name="waktu" required>
                            <option value="" disabled selected>Pilih Waktu Mulai:</option>
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
                            <option value="" disabled selected>Pilih Waktu Selesai:</option>
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
					<input id="pointer" type="text" class="validate" name="pointer">
                    <label for="pointer">Pointer</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="proyektor" type="text" class="validate" name="proyektor">
                    <label for="proyektor">Proyektor</label>
				</div>
			</div>
			</div>
			<br>
			
			<h4>Konsumsi</h4>
			<!---------Menu Konsumsi------>			
			<div class="row">
				<div class="input-field col s6">
					<input id="snack_pagi" type="text" class="validate" name="snack_pagi">
                    <label for="snack_pagi">Snack Pagi</label>
				</div>
				<div class="input-field col s6">
					<input id="makan_siang" type="text" class="validate" name="makan_siang">
                    <label for="makan_siang">Makan Siang</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="snack_siang" type="text" class="validate" name="snack_siang">
                    <label for="snack_siang">Snack Siang</label>
				</div>
				<div class="input-field col s6">
					<input id="makan_malam" type="text" class="validate" name="makan_malam">
                    <label for="makan_malam">Makan Malam</label>
				</div>
			</div>
			<br>

			<h4>Tamu</h4>
			<div class="row">
				<div class="input-field col s12">
					<input id="nama_tamu" type="text" class="validate" name="nama_tamu">
                    <label for="nama_tamu">Nama Tamu</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="nama_hotel" type="text" class="validate" name="nama_hotel">
                    <label for="nama_hotel">Nama Hotel</label>
				</div>			
				<div class="input-field col s6">
					<input id="no_telp" type="text" class="validate" name="no_telp">
                    <label for="no_telp">No Telp</label>
				</div>
			</div>			
			
			<div class="row">
				<div class="input-field col s6">
					<input type="date" class="datepicker" name="tgl_datang">
					<label class="active" id="tgl_datang">Tanggal Datang:</label>
				</div>
				<div class="input-field col s6">
					<input type="date" class="datepicker" name="tgl_pulang">
					<label class="active" id="tgl_pulang">Tanggal Pulang:</label>
				</div>
			</div>

			<h4>Lampiran</h4>
			<div class="row">
				<p> BON / NODIN </p>
				<div class="input-field col s6">
				<input type="file" id="pdf" class="pdf" name="pdf_file">
			</div>
			<br>
			<br>
			<br>

				
				<div class="row">
					<div class="input-field col s12">
						<button class="btn waves-effect white" type="submit" name="action">Kirim
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>
			</form>
			
			
			</div>

		</div>
	</div>
</div>