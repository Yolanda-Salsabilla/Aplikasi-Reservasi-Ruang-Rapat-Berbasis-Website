<div class="container" style="background-color:white" id="edit-permintaan">
  <div class="container">
	<div class="row">
		<form method="post" action="user/data-tamu-simpan.php" class="col s12">
		<input type="hidden" name="id_user" value="<?php echo $id_user;?>">
			<div class="row">
				<div class="input-field col s8">
					<input id="nama_hotel" type="text" class="validate" name="nama_hotel" required>
                    <label for="nama_hotel">Nama Hotel</label>
				</div>
			</div>			
			
			<div class="row">
				<div class="input-field col s12 m4">
					<input type="date" class="datepicker2" name="tgl_datang">
					<label class="active" id="tgl_datang">Tanggal Datang:</label>
				</div>
				<div class="input-field col s12 m4">
					<input type="date" class="datepicker2" name="tgl_pulang">
					<label class="active" id="tgl_pulang">Tanggal Pulang:</label>
				</div>				
			</div>
			<button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">
            	Kirim
			</button>
		</form>
	</div>
  </div>	
</div>


