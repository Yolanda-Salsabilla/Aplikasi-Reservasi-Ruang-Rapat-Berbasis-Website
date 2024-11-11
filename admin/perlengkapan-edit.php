<?php
	$id_perlengkapan = $_GET['id'];
	$tampil = mysqli_query($koneksi,"SELECT nama_perlengkapan,jumlah FROM perlengkapan WHERE id_perlengkapan=$id_perlengkapan");
	list($nama_perlengkapan,$jumlah)=mysqli_fetch_row($tampil);
?>

<div class="container" style="background-color:white">
<div class="container">
  	<form action="admin/perlengkapan-edit-proses.php" method="post">
    	<input type="hidden" name="id_perlengkapan" value="<?php echo $id_perlengkapan;?>">
      <h4>Edit Perlengkapan</h4>
      <div class="row">
        <div class="input-field col s12">
          <input id="nama_perlengkapan" type="text" class="validate" name="nama_perlengkapan" value="<?php echo $nama_perlengkapan;?>" required>
          <label for="perlengkapan">Nama Perlengkapan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="jumlah" type="text" class="validate" name="jumlah" value="<?php echo $jumlah;?>" required>
          <label for="jumlah">Jumlah</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light blue darken-3" type="submit" name="action">Simpan</button>
      <a href="home.php?q=p" class=" modal-action modal-close waves-effect waves-red btn-flat">Batal</a>
    </form>
</div>
</div>