<?php $thisPage = "Paket"; ?>
<?php
include_once('admin/conn/koneksi.php');
//mendapatkan id url
$id_paket = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM paket WHERE id_paket='$id_paket'");
$detail = $ambil->fetch_assoc();
$kategori = $detail["id_kategori"];
?>
<?php
$data = array();
$slider = $koneksi->query("SELECT * FROM paket_foto WHERE id_paket='$id_paket'");
while ($s = $slider->fetch_assoc()) {
    $data[] = $s;
} ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Galang Travel</title>
    <meta content="Galang Travel" name="description">
    <meta content="Galang Travel" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
</head>

<body>
    <?php include_once('navbar.php'); ?>
    <?php include_once('button-wa.php'); ?>
    <main id="main">
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg')">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Galang Travel Paket</h2>
                            <p>
                                Paket paket pada galang travel ini sangat murah dan terjangkau.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a>Beranda</a></li>
                        <li>Paket details</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up">
                <a class="btn btn-lg btn-default" href="index.php" style="margin-bottom: 10px;"> BACK </a>
                <div class="row">
                    <div class="col-lg-6 services-list">
                        <div class="owl-carousel owl-theme" style="justify-content: center;text-align: center;">
                            <?php foreach ($data as $key => $value) : ?>
                                <div class="item" style="margin: auto;">
                                    <img src="foto_paket/<?php echo $value["nama_paket_foto"]; ?>" style="width: 200px;height: 200px;" id="myimage">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="col-lg-6 services-list">
                        <div>
                            <iframe style="border: 0; width: 100%; height: 340px" src="<?php echo $detail["lokasi_maps"] ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="services-list">
                            <div class="row">
                                <div class="col-md-6" style="float: left">
                                    <h4>Detail Paket</h4>
                                </div>
                                <div class="col-md-6" style="float: right">
                                    <h5><strong>Harga Mulai Rp.<?php echo $detail["harga_paket"] ?></strong></h5>
                                </div>
                            </div>
                            <div class="row mt-3" style="text-align: justify;">
                                <p><strong><?php echo $detail["nama_paket"] ?></strong></p>
                                <p>
                                    &emsp;&emsp;<?php echo $detail["deskripsi_wisata"] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
    </main>
    <script src="zoomsl.min.js"></script>
    <script>
        $('#myimage').imagezoomsl();
    </script>

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <h1><span><img src="assets/img/Galang_travel-removebg-preview.png" style="background-color: aliceblue; border-radius: 100px; height: 40px; width: 40px;" alt=""></span> Galang Travel</h1>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                </div>
                <div class="col-lg-5 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak Kami</h4>
                    <p>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>