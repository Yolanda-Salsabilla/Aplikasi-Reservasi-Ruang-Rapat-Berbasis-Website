<div class="container">
	<a id="background2" class="modal-trigger waves-effect waves-light grey darken-4 btn" href="#modal5">Tambah</a>
	
	
	<div id="modal5" class="modal">
    	<form method="post" action="admin/konsumsi-add.php">
		<div class="modal-content">
			<h4>Buat Data User Konsumsi</h4>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">perm_identity</i>
					<input id="nama" type="text" name="nama" class="validate" required>
					<label for="nama">Nama Lengkap</label>
				</div>
				<div class="input-field col s6">
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
			<button class="btn waves-effect waves-light green" type="submit" name="action">Tambah
				<i class="material-icons right">add</i>
			</button>
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Batal</a>
		</div>
		</form>
	</div>
    <table class="highlight responsive-table" id="background">
		<thead>
        	<tr>
            	<th>No.</th>
            	<th>Nama</th>
				<th>Nomor Telepon</th>
            	<th>Username</th>
                <th colspan="3" style="text-align:center">Aksi</th>
            </tr>
        </thead>
    	<tbody>
		<?php
			$tampil_konsumsi = mysqli_query($koneksi,"SELECT a.id_konsumsi,a.nama,a.no_telp,
														   b.username
													FROM konsumsi a,user b
													WHERE a.id_user=b.id_user");
			$no=1;
			while(list($id_konsumsi,$nama,$no_telp,$username)=mysqli_fetch_row($tampil_konsumsi)):
		?>
        	<tr>
            	<td><?php echo $no;?></td>
            	<td><?php echo $nama;?></td>
				<td><?php echo $no_telp ?> </td>
            	<td><?php echo $username;?></td>
        		<td width="100px">
            		<a class="waves-effect waves-light btn blue darken-3" href="home.php?q=kons-edit&id=<?php echo $id_konsumsi;?>">
                		Edit
                	</a>
            	</td>
            	<td width="100px">
            		<a class="waves-effect waves-light red btn" href="home.php?q=kons-del&id=<?php echo $id_konsumsi;?>" onclick="javascript: return confirm('Anda yakin ingin hapus?');">
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