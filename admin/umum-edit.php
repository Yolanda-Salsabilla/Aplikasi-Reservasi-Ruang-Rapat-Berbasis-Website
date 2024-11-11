<?php
	$id_umum = $_GET['id'];
	$tampil_umum = mysqli_query($koneksi,"SELECT nama,alamat,email,no_telp FROM umum WHERE id_umum=$id_umum");
	list($nama_um,$alamat_um,$email_um,$no_telp)=mysqli_fetch_row($tampil_umum);
?>

<div class="container" style="background-color:white">
<div class="container">
  	<form action="admin/um-edit-proses.php" method="post">
    	<input type="hidden" name="id_umum" value="<?php echo $id_umum;?>">
      <h4>Sunting User Umum</h4>
      <div class="row">
        <div class="input-field col s6">
          <input id="umum" type="text" class="validate" name="nama_um" value="<?php echo $nama_um;?>" required>
          <label for="umum">Nama User</label>
        </div>
      </div>
	  
	  <div class="row">
        <div class="input-field col s6">
          <input id="umum" type="text" class="validate" name="alamat_um" value="<?php echo $alamat_um;?>" required>
          <label for="umum">Alamat</label>
        </div>
      </div>
	  
	  <div class="row">
        <div class="input-field col s6">
          <input id="umum" type="text" class="validate" name="email_um" value="<?php echo $email_um;?>" required>
          <label for="umum">Email</label>
        </div>
      </div>
	  
      <div class="row">
        <div class="input-field col s6">
          <input id="no_telp" type="text" class="validate" name="no_telp" value="<?php echo $no_telp;?>" required>
          <label for="no_telp">Nomor Telepon</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light blue darken-3" type="submit" name="action">Simpan</button>
      <a href="home.php?q=um" class=" modal-action modal-close waves-effect waves-red btn-flat">Batal</a>
    </form>
</div>
</div>