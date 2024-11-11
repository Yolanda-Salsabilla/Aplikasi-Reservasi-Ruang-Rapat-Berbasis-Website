<div class="container">
	<a id="background2" class="modal-trigger waves-effect waves-light bg-success text-light btn mt-3 mb-3" href="#modal5">Tambah</a>
	
	<div id="modal5" class="w-50  h-50 modal rounded-top "> 
    	<form method="post" action="admin/usbagian-add.php">
		<div class="modal-content">

			<div class="row">
			<img class="img-fluid col-lg-4 mb-3" src="img/pln.png" alt="">
			<hr>
			<h4>Buat Data User Baru</h4>
				<div class="input-field col s12 m7">
					<i class="material-icons prefix">perm_identity</i>
					<input id="nama" type="text" name="nama" class="validate" required>
					<label for="nama">Nama Lengkap</label>
				</div>
				<div class="input-field col s12 m5">
					<i class="material-icons prefix">phone</i>
					<input id="telephone" type="number" name="no_telp" class="validate" required>
					<label for="telephone">No. Telepon</label>
				</div>
			</div>
            <br>
            <h5>Data untuk Login:</h5>
			<div class="row">
				<div class="input-field col s12 m6">
					<i class="material-icons prefix">account_circle</i>
					<input id="username" type="text" name="username" class="validate" required>
					<label for="username">Username</label>
				</div>
				<div class="input-field col s12 m6">
					<i class="material-icons prefix">vpn_key</i>
					<input id="password" type="password" name="password" class="validate" required>
					<label for="no_telp">Password</label>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn waves-effect waves-light bg-success text-light mt-3 mb-3" type="submit" name="action">Tambah
				<i class="material-icons right">add</i>
			</button>
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Batal</a>
		</div>
		</form>
	</div>
    <table class="table table-bordered highlight responsive-table" id="background">
		<thead>
        	<tr>
            	<th>No.</th>
            	<th>Nama</th>
            	<th>No. Telepon</th>
            	<th>Username</th>
                <th colspan="2" style="text-align:center">Aksi</th>
            </tr>
        </thead>
    	<tbody>
		<?php
			$tampil_karyawan = mysqli_query($koneksi,"SELECT a.id_karyawan,a.id_user,a.nama,a.no_telp,
													b.username
													FROM karyawan a,user b
													WHERE a.id_user=b.id_user");
			$no=1;
			while(list($id_karyawan,$id_user,$nama,$no_telp,$username)=mysqli_fetch_row($tampil_karyawan)):
		?>
        	<tr>
            	<td><?php echo $no;?></td>
            	<td><?php echo $nama;?></td>
            	<td><?php echo $no_telp;?></td>
            	<td><?php echo $username;?></td>
        		<td width="100px">
            		<a class="waves-effect waves-light btn text-light bg-warning" href="home.php?q=usb-edit&id=<?php echo $id_user;?>">
                		Edit
                	</a>
            	</td>
            	<td width="100px">
            		<a class="waves-effect waves-light bg-danger text-light btn" href="home.php?q=usb-delete&id=<?php echo $id_karyawan;?>" onclick="javascript: return confirm('Anda yakin ingin hapus?');">
                		Hapus
                	</a>
            	</td>
            </tr>
		<?php
			$no++;
			endwhile;
		?>
        </tbody>
    </table>
</div>