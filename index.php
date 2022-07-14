<?php $thisPage = "Index"; ?>
<!DOCTYPE html>
<html>

<head>
  <?php include_once('header.php'); ?>
</head>

<body>
  <?php include_once('navbar.php'); ?>
  <?php include_once('button-wa.php'); ?>
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center mb-10">
          <h2 data-aos="fade-up">Private Trip , Booking Hotel & Villa mudah dengan Harga Murah</h2>
          <p data-aos="fade-up" data-aos-delay="100">Galang Travel adalah penyedia layanan pemesanan paket private trip , Booking hotel dan villa secara
            online dengan berfokus di wilayah lombok , nusa tenggara barat. dan Didirikan oleh <a href="https://www.instagram.com/galang_purnm/">Galang Purnama</a>. , hingga aktivitas wisata.</p>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <a href="paket_index.php" class=" btn btn-primary buy-btn">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/bis.png" style="height: 350px; width: 700px; margin-top: 160px;" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <section class="services pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>Daftar Paket</span>
          <h2>Daftar Paket</h2>
        </div>

        <div class="row gy-4">
          <?php include_once('admin/conn/koneksi.php'); ?>
          <?php $ambil = $koneksi->query("SELECT * FROM paket WHERE harga_paket <= 520000"); ?>
          <?php while ($perpaket = $ambil->fetch_assoc()) { ?>
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
        <div class="row mt-3" style="float:right;">
          <div class="col-md-12">
            <a href="paket_index.php" class="btn btn-block btn-primary">View More...</a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include_once('footer.php'); ?>
</body>

</html>