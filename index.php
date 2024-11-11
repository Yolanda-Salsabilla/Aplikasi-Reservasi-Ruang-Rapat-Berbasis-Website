<!DOCTYPE html>
  <html lang="en">
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
                        <a href="javascript:void(0);" onclick="scrollToElement('section2')" class=" dropdown-item">Fitur</a>
                        <a href="cara_pemesanan.php" class="dropdown-item">Cara Pemesanan</a>
                    </div>
                </div>
                <a href="kontak.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Start Modal -->
    <div id="modal1" class="modal w-50 h-50 text-dark">
      <div class="modal-content">
        
      <div class="col-lg-12 ">
      <div class="row">
      <div style="text-align:center">
    <img class="col-lg-4" src="img/pln.png" alt="">
    </div>
    <form class="col-lg-12 mt-5" action="config/login.php" method="post">
      <div class="row ">
		<h4> Silakan Login</h4>
        <div class="input-field col s8 mt-3">
        <i class="material-icons prefix">perm_identity</i>
          <input id="username" type="text" class="validate" name="username">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate" name="password" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m5">
      <button class="btn waves-effect waves-light" type="submit" name="login">Login
        <i class="material-icons right">send</i>
      </button>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
         </div>
       </div>
    </form>
  </div>
  </div>
      </div>
    </div>
     <!-- End Modal -->
<!------------Akhir Navigasi--------------------->
          

     <!-- Carousel Start -->
     <section id="section1">
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/slider1.png" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .3);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">PT PLN INDONESIA POWER UPDK KERAMASAN</h5>
                                    <h1 class="display-3 text-white animated slideInDown">Reservasi Ruang Rapat</h1>
                                    <p class="fs-5 text-white mb-4 pb-2">Vision:"To Be the A Leading and Sustainable Power Generation Company in Southeast Asia" Mission: "Providing Reliable, Efficient, Innovative and Beyond Customer Expectation of Energy Solution Business, Towards Affordable Clean Energy" Motto:nergy of Things"</p>
                                    <button id="btnKu" onclick="readMore()" class="btn btn-primary me-3 animated slideInLeft">Read more</button>
                                    <button data-target="modal1" class="btn btn-light animated slideInRight modal-trigger" id="login"><i class="material-icons left">assignment_ind</i> Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/slider_one.png" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .3);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">PT PLN INDONESIA POWER UPDK KERAMASAN</h5>
                                    <h5 class="display-5 text-white animated slideInDown">Indonesia Power is dedicated to provide effective and reliable solution for the fulfilment of electricity power supplies</h5>
                                    <p class="fs-5 text-white mb-4 pb-2">Vision:"To Be the A Leading and Sustainable Power Generation Company in Southeast Asia" Mission: "Providing Reliable, Efficient, Innovative and Beyond Customer Expectation of Energy Solution Business, Towards Affordable Clean Energy" Motto:nergy of Things"</p>
                                    <button id="btnKu" onclick="readMore()" class="btn btn-primary me-3 animated slideInLeft">Read more</button>
                                    <button data-target="modal1" class="btn btn-light animated slideInRight modal-trigger" id="login"><i class="material-icons left">assignment_ind</i> Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

    </section>
    <!-- Carousel End -->

     <!-- Service Start -->
     <section id="section2">
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Service Features</h6>
                <h1 class="mb-5">Reservasi Ruang Rapat</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-business-time text-primary mb-4"></i>  
                            <h5 class="mb-3">Pesan Ruang Rapat</h5>
                            <p>Dilengkapi Fitur Pesan Ruang Rapat Kapan Saja Dan Dimana Saja</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-street-view text-primary mb-4"></i> 
                            <h5 class="mb-3">Penjemputan Tamu</h5>
                            <p>Dilengkapi Fitur Penjemputan Tamu Reservasi Ruang Rapat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-lightbulb text-primary mb-4"></i>
                            <h5 class="mb-3">Informatif Sistem</h5>
                            <p>Dilengkapi Fitur Yang Efisien, Informatif, Mudah, Dan Detail</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-print text-primary mb-4"></i> 
                            <h5 class="mb-3"> Pencetakan Jadwal</h5>
                            <p>Dilengkapi Fitur Pencetakan Jadwal Rapat Yang Dijadwalkan dengan Detail</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-folder-open text-primary mb-4"></i> 
                            <h5 class="mb-3"> Perekapan Data</h5>
                            <p>Dilengkapi Fitur Perekapan Data Yang Efisien Dengan Pencarian Data</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="service-item text-center pt-3"> 
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-envelope text-primary mb-4"></i>
                            <h5 class="mb-3">Kontak Tersedia</h5>
                            <p>Dilengkapi Fitur Interaksi Antara Pengguna Dan Pihak Bersangkutan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
<!-- Service End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="javascript:void(0);" onclick="scrollToElement('section1')">Home</a>
                    <a class=" btn btn-link" href="javascript:void(0);" onclick="scrollToElement('section2')">Service Features</a>
                    <a class="btn btn-link" href="kontak.php">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Information</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jln. Abikusno Cokrosuyoso No 24 Kertapati Palembang</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(0711) 510955</p>
                    <div class="d-flex pt-2">
                        <a onclick="BukaTabBaru1()" class="btn btn-outline-light btn-social" ><i class="fab fa-twitter"></i></a>
                        <a onclick="BukaTabBaru2()" class="btn btn-outline-light btn-social" ><i class="fab fa-facebook-f"></i></a>
                        <a onclick="BukaTabBaru3()" class="btn btn-outline-light btn-social" ><i class="fab fa-youtube"></i></a>
                        <a onclick="BukaTabBaru4()" class="btn btn-outline-light btn-social" ><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galerry1.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galerry2.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galerry3.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galerry4.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galerry5.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galerry6.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">PLN UPDK Kersamasan</h4>
                    <p>Sebagai perusahaan dalam kontribusi pengelolaan sumber daya dan lingkungan.</p>
                    <!-- <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#"><b>Politeknik Negeri Sriwijaya </b></a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom"><b>Yolandslla</b></a><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
		  
	<?php
	error_reporting(0);
	session_start();
	include 'config/koneksi.php';
	$username = $_SESSION['sesi_username'];
	$id_user = $_SESSION['sesi_id'];
	
	if(($_SESSION['sesi_id']) AND ($_SESSION['sesi_username'])):
		echo "<script>location.href='home.php';</script>";
	endif;
?>	  
  
  <!------------------SCRIPT--->
  
  <!-- Back to Top -->
  <a href="javascript:void(0);" onclick="scrollToElement('section1')" class=" btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script>
        // Fungsi untuk melakukan scroll ke elemen target
        function scrollToElement(targetId) {
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
<script>
function trimText(element) {
    var words = element.textContent.split(" ");
    var trimmedText = words.slice(0, 10).join(" ");
    element.textContent = trimmedText + "";
}

function readMore() {
    var pElements = document.querySelectorAll("p");
    var btnnyo =document.getElementById('btnKu');
    pElements.forEach(function (pElement) {
        var originalText = pElement.getAttribute("data-original-text");
        pElement.textContent = originalText;
        btnnyo.style.display = "none";
    });
}

document.addEventListener("DOMContentLoaded", function () {
    var pElements = document.querySelectorAll("p");
    pElements.forEach(function (pElement) {
        var originalText = pElement.textContent;
        pElement.setAttribute("data-original-text", originalText); // Simpan teks asli dalam atribut data
        trimText(pElement);
    });             
});
</script>
<script>
    function BukaTabBaru1() {

        var url = "https://twitter.com/exploreskrm?lang=bg";

        window.open(url, "_blank")
    }

    function BukaTabBaru2() {

        var url1 = "https://www.facebook.com/explore.skrm/";

        window.open(url1, "_blank")
    }
    function BukaTabBaru3() {

        var url2 = "https://www.youtube.com/@IndonesiaPowerOfficial";

        window.open(url2, "_blank")
    }
    function BukaTabBaru4() {

        var url3 = "https://www.instagram.com/plnip.updkkeramasan/";

        window.open(url3, "_blank")
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery-211.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>



</body>
  </html>