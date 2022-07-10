<?php
session_start();
include_once('conn/koneksi.php');
if (!isset($_SESSION['email'])) {
    header("location:auth/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('partial/header.php'); ?>

<body>
    <div class="container-scroller">
        <?php include_once('partial/navbar.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include_once('partial/sidebar.php'); ?>
            <div class="main-panel">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pengelolaan Paket</h4>
                            <div class="row mt-2" style="float: right; margin-right: 20px;">
                                <a href="add-pakets.php"><button type="button" class="btn btn-primary">Tambah Paket</button></a>&emsp;
                                <button type="button" class="btn btn-danger">Reset</button>
                            </div>
                            <p class="card-description">
                            </p>
                            <div class="table-responsive pt-3">

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Paket</th>
                                            <th>Kategori</th>
                                            <th>Harga Paket</th>
                                            <th>Lokasi</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--  -->
                                        <?php $nomor = 1; ?>
                                        <?php $ambil = $koneksi->query("SELECT * FROM paket LEFT JOIN kategori ON paket.id_kategori=kategori.id_kategori"); ?>
                                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $pecah['nama_paket'] ?></td>
                                                <td><?php echo $pecah['nama_kategori'] ?></td>
                                                <td><?php echo $pecah['harga_paket'] ?></td>
                                                <td><?php echo $pecah['lokasi_maps'] ?></td>
                                                <td>
                                                    <img src="../foto_produk/<?php echo $pecah['foto_wisata'] ?>" width="100px">
                                                </td>
                                                <td><?php echo $pecah['deskripsi_wisata'] ?></td>
                                                <td>
                                                    <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_paket']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau di Hapus?')"><i class="lyphicon glyphicon-trash"></i>Hapus</a>
                                                    <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_paket']; ?>" class="btn btn-warning btn-sm"><i class="lyphicon glyphicon-edit"></i>Ubah</a>
                                                    <a href="index.php?halaman=detailproduk&id=<?php echo $pecah['id_paket']; ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-eye">Detail</a>
                                                </td>
                                            </tr>
                                            <?php $nomor++; ?>
                                        <?php } ?>
                                        <!--  -->
                                        <!-- <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Trip Tiu kelep
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                Lokasi Wisata ini terletak di daerah Senaru , Kabupaten Lombok Utara
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('partial/footer.php'); ?>

</body>

</html>