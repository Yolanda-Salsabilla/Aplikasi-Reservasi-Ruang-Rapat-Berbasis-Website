<!DOCTYPE html>
      <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="css/materialize-icon.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">

	  <title>Reservasi Ruang Rapat</title>
	  
    </head>
	

	<!-- <style>
	html {

	background-image : url("img/backgroundutama.png");
	}
</style> -->

<?php 
include "config/koneksi.php";
?>
<body>
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="img/pln.png" width="220" height="50"></h2>

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="jadwal.php" class="nav-item nav-link">Jadwal Rapat</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="cara_pemesanan.php" class="dropdown-item">Cara Pemesanan</a>
                    </div>
                </div>
                <a href="kontak.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
<div class="container">
<div class="row" id="coba">
<H3 class="text-center"> Jadwal Reservasi Ruang Rapat</H3>
<table class="table table-bordered responsive-table" id="tabeljadwal">
   <thead class="bg-secondary">
		<tr >
			<th rowspan="2"><div class="text-white text-center">No</div></th>
			<th rowspan="2"><div class="text-white text-center">Nama</div> </th>
            <th colspan="2"><div class="text-white text-center">Tgl Acara</div></th>
			<th colspan="2"><div class="text-white text-center">Waktu Acara</div></th>
            <th rowspan="2"><div class="text-white text-center">Jumlah Peserta</div></th>
			<th rowspan="2"><div class="text-white text-center">Ruang Acara</div></th>
			<th rowspan="2"><div class="text-white text-center">Nama Acara</div></th>	
			<th rowspan="2"><div class="text-white text-center">Tgl Input</div></th>			
		</tr>
		<tr >
			<th><div class="text-white text-center">Tanggal Mulai</div></td>
			<th><div class="text-white text-center">Tanggal Selesai</div></td>
			<th><div class="text-white text-center">Waktu Mulai</div></td>
			<th><div class="text-white text-center">Waktu Selesai</div></td>
		</tr>
	</thead>

    <tbody>
			
		<tr>
	<?php
	$waktuhari = date("y-m-d");
	
			$panggil = mysqli_query($koneksi,"SELECT a.id_pesan,d.username,a.tgl_pesan,a.tgl_selesai,a.waktu,a.waktu_selesai,a.nama_acara,a.jumlah_peserta,a.tgl_input,a.jam_input,b.nama_ruangan
													FROM pesan a,ruangan b,jadwal c,user d
													WHERE a.id_ruangan=b.id_ruangan
														  and c.pukul_jadwal=a.waktu
														  and a.pemesanan=d.id_user
														  and a.tgl_selesai >= '$waktuhari'
														  order by a.tgl_pesan");
			$no=1;
			while(list($id_pesan,$username,$tgl_pesan,$tgl_selesai,$waktu,$waktu_selesai,$nama_acara,$jumlah_peserta,$tgl_input,$jam_input,$nama_ruangan)=mysqli_fetch_row($panggil)):
		?>
			<td><?php echo $no++;?></td>
			<td><?php echo $username;?></td>
            <td><?php echo date("d/F/Y",strtotime($tgl_pesan)); ?> </td>
			<td><?php echo date("d/F/Y",strtotime($tgl_selesai));?></td>
            <td><?php echo $waktu;?></td>
            <td><?php echo $waktu_selesai;?></td>
			<td><?php echo $jumlah_peserta;?>  </td>
			<td><?php echo $nama_ruangan;?></td>
			<td><?php echo $nama_acara;?> </td>
			<td><?php if($tgl_input !="0000-00-00") echo date("d/F/Y",strtotime($tgl_input))." ".$jam_input; ?> </td>
		</tr>
		
			<?php
			endwhile;
			?>
    </tbody>
</table>
</div>	


</body>
  <script type="text/javascript" src="js/jquery-211.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script>
  </body>
  </html>