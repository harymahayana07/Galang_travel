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
    <?php include_once('header.php'); ?>
</head>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }

    img {
        max-width: 100%;
    }

    .cycle-slideshow {
        width: 100%;
        max-width: 960px;
        display: block;
        position: relative;
        margin: 20px auto;
        overflow: hidden;
    }

    .cycle-prev,
    .cycle-next {
        font-size: 200%;
        color: #DAA520;
        display: block;
        position: absolute;
        top: 50%;
        z-index: 990;
        cursor: pointer;
        margin-top: -16px;
    }

    .cycle-prev {
        left: 42px;
    }

    .cycle-next {
        right: 62px;
    }

    .cycle-pager {
        position: absolute;
        width: 100%;
        height: 10px;
        bottom: 10px;
        z-index: 990;
        text-align: center;
    }

    .cycle-pager span {
        text-indent: 100%;
        top: 100px;
        width: 10px;
        height: 10px;
        display: inline-block;
        border: 1px solid #808080;
        border-radius: 50%;
        margin: 0 10px;
        white-space: nowrap;
        cursor: pointer;
    }

    .cycle-pager-active {
        background-color: #008000;
    }
</style>

<body>
    <?php include_once('button-wa.php'); ?>

    <div class="mt-6"></div>
    <main id="main">
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <!-- <img src="assets/img/287213285_447599374035425_4150043431709401302_n.jpg" style="height: 200; width: 900px" alt="" class="img-fluid services-img" /> -->
                        <!-- start product_slider -->
                        <div class="cycle-slideshow">
                            <span class="cycle-prev">&#9001;</span> <!-- Untuk membuat tanda panah di kiri slider -->
                            <span class="cycle-next">&#9002;</span> <!-- Untuk membuat tanda panah di kanan slider -->
                            <span class="cycle-pager"></span>
                            <?php foreach ($data as $key => $value) : ?>
                                <img src="foto_paket/<?php echo $value["nama_paket_foto"]; ?>" id="myimage">
                            <?php endforeach ?>
                        </div>
                        <script type="text/javascript" src="slider.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                        <script src="admin/bootstrap.min.js"></script>
                        <script src="admin/jquery.min.js"></script>
                        <script src="zoomsl.min.js"></script>
                        <script>
                            $('#myimage').imagezoomsl();
                        </script>
                        <!-- end product_slider -->
                    </div>

                    <div class="col-lg-6">
                        <div class="services-list">
                            <div class="row">
                                <div class="col-md-6" style="float: left">
                                    <h4>Paket Details</h4>
                                </div>
                                <div class="col-md-6" style="float: right">
                                    <h5><strong>Harga : Rp.200.000</strong></h5>
                                </div>
                            </div>
                            <div class="row mt-3" style="text-align: justify;">
                                <p>
                                    &emsp;&emsp;Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facilis maxime, facere laboriosam sit dicta velit obcaecati
                                    consequatur veritatis esse quidem vero corporis voluptate
                                    beatae quasi. Ex quod commodi repellendus a, omnis ut harum
                                    consequatur fugiat ratione voluptatum porro dolorum earum.
                                    consequatur veritatis esse quidem vero corporis voluptate
                                    beatae quasi. Ex quod commodi repellendus a, omnis ut harum
                                    consequatur fugiat ratione voluptatum porro dolorum earum.
                                </p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Aut eum totam accusantium voluptatem.</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Assumenda et porro nisi nihil nesciunt
                                            voluptatibus.</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Ullamco laboris nisi ut aliquip ex ea</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once('footer.php'); ?>
</body>

</html>