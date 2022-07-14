<?php $thisPage = "Paket"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('header.php'); ?>
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
                        <li>Paket</li>
                    </ol>
                </div>
            </nav>
        </div>
        <!-- ======= Service Details Section ======= -->
        <section class="services pt-0">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <span>Daftar Paket</span>
                    <h2>Daftar Paket</h2>
                </div>
                <div class="row gy-4">

                    <?php include_once('admin/conn/koneksi.php'); ?>
                    <?php $ambil2 = $koneksi->query("SELECT * FROM paket"); ?>
                    <?php
                    $datakategori = array();
                    $ambil = $koneksi->query("SELECT * FROM kategori");
                    while ($tiap = $ambil->fetch_assoc()) {
                        $datakategori[] = $tiap;
                    }
                    ?>
                    <form action="pencarian.php" method="get" class="navbar-form navbar-right">
                        <div class="form-group">
                            <div class="input-group col-xs-12">
                                <input type="text" name="keyword" class="form-control file-upload-info" placeholder="Cari Paket atau Harga">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary"><i class="fas fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </form>
                    <form method="get" class="navbar-form navbar-right">
                        <select class="form-control" name="kategori" onchange="document.location.href= this.options[this.selectedIndex].value;">
                            <option value=""> --Pilih Kategori-- </option>
                            <?php foreach ($datakategori as $key => $value) : ?>
                                <option value="kategori.php?id=<?php echo $value["id_kategori"] ?>" value="<?php echo $value["id_kategori"] ?>"><?php echo $value["nama_kategori"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </form>

                    <?php while ($perpaket = $ambil2->fetch_assoc()) { ?>
                        <!-- perulangan -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="foto_paket/<?php echo $perpaket['foto_wisata'] ?>" alt="foto_paket" class="img-fluid">
                                </div>
                                <h3><a href="details.php?id=<?php echo $perpaket['id_paket']; ?>" class="stretched-link"><?php echo $perpaket['nama_paket'] ?></a></h3>
                                <p><?php echo substr($perpaket['deskripsi_wisata'], 0, 85); ?>...</p>
                                <a href="details.php?id=<?php echo $perpaket['id_paket']; ?>" class="btn btn-outline-primary text-dark mb-3" style="margin-left: 20px; margin-right: 20px;"> Detail Paket </a>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end perulangan -->
                </div>
            </div>
        </section>
    </main>
    <?php include_once('footer.php'); ?>
</body>

</html>