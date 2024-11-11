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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



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
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="coba.php" class="nav-item nav-link ">Cetak</a>
                <a href="jadwal.php" class="nav-item nav-link">JadwalRapat</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="index.php" class="dropdown-item">Fitur</a>
                        <a href="404.html" class="dropdown-item">Cara Pemesanan</a>
                    </div>
                </div>
                <a href="kontak.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- contact section -->
    <section class="contact_section layout_padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-10 ">
                    <h2 class="text-center mt-3">
                        Contact Us
                        </h2c>
                </div>
            </div>

            <div class="layout_padding2-top">
                <div class="row">
                    <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                        <form action="mailto:contoh : plnkeramasan@gmail.com" method="post" enctype="text/plain">
                            <div class="contact_form-container">
                                <div>
                                    <div>
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" id="name" required><br>
                                    </div>
                                    <div>
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" id="email" required><br>
                                    </div>
                                    <div>
                                        <label for="number">Number:</label>
                                        <input type="tel" name="number" id="number" required><br>
                                    </div>
                                    <div>
                                        <label for="message">Message:</label>
                                        <br>
                                        <input name="message" id="message" type="text" class="message_input" />
                                    </div>
                                    <div>
                                        <input type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="#" method="post">
                            <div class="contact_form-container mt-3">
                                <input type="submit" value="Clear" onclick="clearForm()">
                            </div>

                        </form>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="map_container">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.236165347641!2d104.7422462244959!3d-3.031186540021914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9e7c3a19a80d%3A0x989d422eed9cf9e8!2sPT.%20PLN%20(Persero)%20Sektor%20Keramasan!5e0!3m2!1sid!2sid!4v1700993135920!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <?php
    error_reporting(0);
    session_start();
    include 'config/koneksi.php';
    $username = $_SESSION['sesi_username'];
    $id_user = $_SESSION['sesi_id'];

    if (($_SESSION['sesi_id']) and ($_SESSION['sesi_username'])) :
        echo "<script>location.href='home.php';</script>";
    endif;
    ?>

    <!------------------SCRIPT--->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script>
        function trimText(element) {
            var words = element.textContent.split(" ");
            var trimmedText = words.slice(0, 10).join(" ");
            element.textContent = trimmedText + "";
        }

        function readMore() {
            var pElements = document.querySelectorAll("p");
            var btnnyo = document.getElementById('btnKu');
            pElements.forEach(function(pElement) {
                var originalText = pElement.getAttribute("data-original-text");
                pElement.textContent = originalText;
                btnnyo.style.display = "none";
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            var pElements = document.querySelectorAll("p");
            pElements.forEach(function(pElement) {
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


    <script type="text/javascript" src="js/jquery-211.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script src="js/main.js"></script>



</body>

</html>