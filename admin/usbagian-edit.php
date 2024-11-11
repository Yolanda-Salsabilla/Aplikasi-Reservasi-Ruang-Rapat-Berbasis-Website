<?php
	$id_user = $_GET['id'];
	$tampil_karyawan = mysqli_query($koneksi,"SELECT username,password FROM user  
	WHERE id_user=$id_user");
	list($username,$password)=mysqli_fetch_row($tampil_karyawan);
?>

<div class="container" style="background-color:white">
<div class="container">
  	<form action="admin/usb-edit-proses.php" method="post">
      <h4>Sunting User</h4>
      <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" class="validate" name="username" value="<?php echo $username;?>" required>
          <label for="username">Username</label>
        </div>
      </div>
	  <input type="hidden" value="<?php echo $id_user; ?>" name="id_user"> 
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="text" class="validate" name="password" value="">
          <label for="password">Password</label>
        </div>
      </div>	  
	  
      <button class="btn waves-effect waves-light blue darken-3" type="submit" name="action">Simpan</button>
      <a href="home.php?q=usb" class=" modal-action modal-close waves-effect waves-red btn-flat">Batal</a>
    </form>
</div>
</div>