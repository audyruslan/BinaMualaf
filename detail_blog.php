<?php
require 'functions.php';
require 'tgl_indo.php';

$id = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM tb_blog WHERE id = $id");
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Puskesmas Bahodopi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    </script>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
                <i class="bi bi-phone"></i> +1 5589 55488 55
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid "></a>
            <h1 class="logo me-auto"><a href="index.php">Puseksmas Bahodopi</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="blog_page.php">News</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <?php
            if (!empty($_SESSION["login"])) {
            ?>
            <a href="home.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Dashboard</span></a>
            <a href="logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Logout</span></a>
            <?php } else { ?>
            <a href="login.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Masuk</span></a>
            <?php } ?>


        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog/Berita</h2>
                    <ol>
                        <li><a href="index.php">Beranda</a></li>
                        <li>Blog/Berita</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs Section -->

        <!-- ======= Blog Section ======= -->
        <section class="inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/blog/<?= $row["img_blog"]; ?>" alt="Image Blog">
                            <div class="card-body">
                                <p>Pusopi.com - <?= tgl_indo($row["tgl_blog"]); ?>, </p>
                                <h5 clas s="card-title"><strong><?= $row["judul_blog"]; ?></strong></h5>
                                <div class="card-text">
                                    <?= $row["content"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM tb_blog");
                        while ($blog = mysqli_fetch_assoc($query)) {
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <img style="max-width: 150px;"
                                                src="assets/img/blog/<?= $row["img_blog"]; ?>" alt="Image Blog">
                                        </div>
                                        <div class="col-8">
                                            <p class="card-text"><?= $blog["judul_blog"]; ?></p>
                                            <p class="card-text"><small
                                                    class="text-muted"><?= tgl_indo($blog["tgl_blog"]); ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Puskesmasbahodipi</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
                    Designed by <a href="https://banua-software.com/" target="_blank">BanuaSoftware</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://web.facebook.com/uptpuskesmasbahodopi/?_rdc=1&_rdr" target="_blank" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>