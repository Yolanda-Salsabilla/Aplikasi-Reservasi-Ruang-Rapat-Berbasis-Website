


  <div class="owl-carousel-item position-relative">
  <img class="img-fluid h-100 w-100"  src="img/bg1.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .1);">
                    <div class="container">
                        <div class="row d-flex justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h2 class="h2keren text-uppercase mb-3 animated slideInDown">
                                  <?php                            
		$cek_karyawan = mysqli_query($koneksi,"SELECT nama FROM karyawan WHERE id_user='$id_user'");
		list($nama_karyawan)=mysqli_fetch_row($cek_karyawan);
		echo "Selamat Datang ".$nama_karyawan."" ;
	?></h2>
                                <!-- <h2 class="display-3 text-light animated slideInDown">
    </h2> -->
                            <p class="fs-5 text-white mb-4 pb-2">
                            </p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>	
