<?php
	$id_ruangan = $_GET['id'];

	$tampil = mysqli_query($koneksi,"SELECT nama_ruangan,kapasitas FROM ruangan WHERE id_ruangan=$id_ruangan");
	list($nama_ruangan,$kapasitas)=mysqli_fetch_row($tampil);
?>

<div class="container" style="background-color:white">
<div class="container">
  	<form action="admin/ruangjadwal-edit-proses.php" method="post">
    	<input type="hidden" name="id_ruangan" value="<?php echo $id_ruangan;?>">
      <h4>Edit Data Ruangan</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="ruangan" type="text" class="validate" name="nama_ruangan" value="<?php echo $nama_ruangan;?>" required>
          <label for="ruangan">Nama Ruangan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="kapasitas" type="text" class="validate" name="kapasitas" value="<?php echo $kapasitas;?>" required>
          <label for="kapasitas">Kapasitas</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light blue darken-3" type="submit" name="action">Simpan</button>
      <a href="home.php?q=kons" class=" modal-action modal-close waves-effect waves-red btn-flat">Batal</a>
    </form>
</div>
</div>