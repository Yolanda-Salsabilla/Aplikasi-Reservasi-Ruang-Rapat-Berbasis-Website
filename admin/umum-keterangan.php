<div class="container" style="background-color:gold" id="modal1">
<?php
	$id_umum = $_GET['id'];
	$tampil_umum = mysqli_query($koneksi,"SELECT nama,alamat,email,no_telp FROM umum WHERE id_umum=$id_umum");
	list($nama_um,$alamat_um,$email_um,$no_telp)=mysqli_fetch_row($tampil_umum);
?>

	<h4 align="center">Biodata User Umum </h4>
	<hr color="black">
	<table>
            	<tr>
                	<th>Nama</th>
                    <td>:</td>
                    <td><?php echo $nama_um;?></td>
                </tr>
            	<tr>
                	<th>Alamat</th>
                    <td>:</td>
                    <td><?php echo $alamat_um;?></td>
                </tr>
            	<tr>
                	<th>eMail</th>
                    <td>:</td>
                    <td><?php echo $email_um;?></td>
                </tr>
				<tr>
                	<th>No. Telepon</th>
                    <td>:</td>
                    <td><?php echo $no_telp;?></td>
                </tr>
            	<tr>
                	<th>Username</th>
                    <td>:</td>
                    <td><?php echo $username;?></td>
                </tr>
            	<tr> <td> </td></tr>

            	

	</table>
</div>