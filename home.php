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


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


    <!-- Template Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">
    <script src="js/ckeditor/ckeditor.js"></script>
    <title>Reservasi Ruang Rapat</title>
</head>

<body>
    <?php
    session_start();
    include 'config/secure.php';
    include 'config/koneksi.php';
    $username = $_SESSION['sesi_username'];
    $level = $_SESSION['level'];
    $id_user = $_SESSION['sesi_id'];
    ?>

    <!--Area Navigasi-->

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">

        <!-- <a href="#!" class="brand-logo"><div id="text">PIP UPDK KERAMASAN </div> </a> -->
        <a href="#" data-activates="mobile-demo" class="button-collapse">
            <i class="material-icons">menu</i>
        </a>
        <?php
        if ($level == "admin") :
            include 'admin/home-nav.php';
        elseif ($level == "umum") :
            include 'umum/home-nav.php';
        elseif ($level == "konsumsi") :
            include 'konsumsi/home-nav.php';
        elseif ($level == "karyawan") :
            include 'user/home-nav.php';
        endif;
        ?>

    </nav>

    <!-- akhir Area Navigasi-->
    <?php
    error_reporting(0);
    $q = $_GET['q'];

    if ($level == "admin") :
        if ($q == "pm") :
            include 'admin/pemohon.php';
        elseif ($q == "kp") :
            include 'admin/konfirmasipm.php';
        elseif ($q == "usb") :
            include 'admin/usbagian.php';
        elseif ($q == "usb-edit") :
            include 'admin/usbagian-edit.php';
        elseif ($q == "usb-delete") :
            include 'admin/usbagian-delete.php';
        elseif ($q == "lihat-permohonan") :
            include 'admin/lihat-permohonan.php';
        elseif ($q == "permohonan-delete") :
            include 'admin/permohonan-delete.php';
        elseif ($q == "perlengkapan-edit") :
            include 'admin/perlengkapan-edit.php';
        elseif ($q == "lihat-ket") :
            include 'admin/lihatket.php';
        elseif ($q == "jemput") :
            include 'admin/jemput.php';
        elseif ($q == "kons") :
            include 'admin/konsumsi.php';
        elseif ($q == "kons-edit") :
            include 'admin/konsumsi-edit.php';
        elseif ($q == "kons-del") :
            include 'admin/konsumsi-delete.php';
        elseif ($q == "rj") :
            include 'admin/ruangjadwal.php';
        elseif ($q == "rj-del") :
            include 'admin/ruangjadwal-delete.php';
        elseif ($q == "rj-edit") :
            include 'admin/ruangjadwal-edit.php';
        elseif ($q == "rjw-del") :
            include 'admin/ruangjadwal-waktu-delete.php';
        elseif ($q == "ol") :
            include 'admin/oleh2.php';
        elseif ($q == "ol-add") :
            include 'admin/oleh2-add.php';
        elseif ($q == "jj") :
            include 'admin/jjemput.php';
        elseif ($q == "jj-edit") :
            include 'admin/jadwal-edit.php';
        elseif ($q == "jj-del") :
            include 'admin/jadwal-delete.php';
        elseif ($q == "rekap") :
            include 'admin/rekap.php';
        elseif ($q == "p") :
            include 'admin/perlengkapan.php';
        elseif ($q == "lihat-pm") :
            include 'admin/lihat-peminjaman.php';
        elseif ($q == "p-delete") :
            include 'admin/perlengkapan-delete.php';
        elseif ($q == "tamu") :
            include 'admin/lihat-tamu.php';
        elseif ($q == "tamu-del") :
            include 'admin/tamu-delete.php';
        elseif ($q == "menu") :
            include 'admin/menukonsumsi.php';
        elseif ($q == "menukonsumsi-delete") :
            include 'admin/menukonsumsi-delete.php';
        elseif ($q == "permohonan-edit") :
            include 'admin/permohonan-edit.php';
        else :
            include 'admin/home.php';
        endif;

    elseif ($level == "konsumsi") :
        if ($q == "menu") :
            include    'konsumsi/menu.php';
        elseif ($q == "lihat-permohonan") :
            include 'konsumsi/lihat-permohonan.php';
        else :
            include 'konsumsi/home.php';
        endif;

    elseif ($level == "karyawan") :
        if ($q == "prr") :
            include 'user/permohonan.php';
        elseif ($q == "lp") :
            include 'user/lihatpesanan.php';
        elseif ($q == "jemput") :
            include 'user/jemput.php';
        elseif ($q == "jemput-add") :
            include 'user/jemput-add.php';
        elseif ($q == "tamu-add") :
            include 'user/tamu-add.php';
        elseif ($q == "jadwal") :
            include 'user/jadwalrapat.php';
        else :
            include 'user/home.php';
        endif;
    endif;
    ?>

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


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <!-- Skrip lainnya -->
    <script src="js/materialize.min.js"></script>
    <script src="js/javascript.js"></script>
    <script defer>
        $(document).ready(function() {
            $('#tabel-data').DataTable({
                pageLength: 10,
                lengthMenu: [10, 25, 50, 75, 100]
            });
           

            $('#table-data1').DataTable({
    processing: true,
    pageLength: 10,
    responsive: true,
    ajax: {
        url: 'data.php',
        type: 'GET',
        dataType: 'json',
        dataSrc: 'data'
    },
    columns: [
        {
            data: null,
            render: function(data, type, row, meta) {
                return meta.row + 1;
            }
        },
        {
            data: 'Peminta',
            defaultContent: '' // Display empty string if data is null
        },
        {
            data: 'Tgl Acara/Waktu',
            defaultContent: ''
        },
        {
            data: 'Tgl Input',
            defaultContent: ''
        },
        {
            data: 'Jumlah Peserta',
            defaultContent: ''
        },
        {
            data: 'Snack Pagi',
            defaultContent: ''
        },
        {
            data: 'Makan Siang',
            defaultContent: ''
        },
        {
            data: 'Snack Siang',
            defaultContent: ''
        },
        {
            data: 'Makan Malam',
            defaultContent: ''
        },
        {
            data: 'Nama Hotel',
            defaultContent: ''
        },
        {
            data: 'Tgl Datang',
            defaultContent: ''
        },
        {
            data: 'Tgl Pulang',
            defaultContent: ''
        },
        {
            data: 'Ruang Acara',
            defaultContent: ''
        },
        {
            data: 'Keterangan',
            defaultContent: ''
        }
        // Additional columns as needed
    ]
});

        });
    </script>
    <script>
  // Ambil elemen HTML menggunakan ID

</script>
</body>

</html>