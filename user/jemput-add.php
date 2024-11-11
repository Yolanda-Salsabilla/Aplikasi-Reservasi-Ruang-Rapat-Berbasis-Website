<div class="container" style="background-color:white" id="edit-permintaan">
  <div class="container">
	<div class="row">
		<form method="post" action="user/jemput-simpan.php" class="col s12">
		<input type="hidden" name="id_user" value="<?php echo $id_user;?>">

		<div class="row">
				<div class="input-field col s12">
					<input id="jam_jemput" type="text" class="validate" name="jam_jemput" required>
                    <label for="jam_jemput">Nama User</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m4">
					<input type="date" class="datepicker" name="tgl_jemput">
					<label class="active" id="tgl_jemput">Tanggal Jemput:</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="jam_jemput" type="text" class="validate" name="jam_jemput" required>
                    <label for="jam_jemput">Jam Jemput (jam:menit:detik)</label>
				</div>
			</div>
			<button class="btn waves-effect waves-light bg-success text-light mr-3" type="submit" name="action">
            	Kirim
			</button>
			<a class="btn bg-secondary text-light" href="home.php?q=jemput">Batal</a>
				
			
		</form>
	</div>
  </div>	
</div>


