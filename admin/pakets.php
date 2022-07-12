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
                                        <?php $nomor = 1; ?>
                                        <?php $ambil = $koneksi->query("SELECT * FROM paket LEFT JOIN kategori ON paket.id_kategori=kategori.id_kategori"); ?>
                                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $pecah['nama_paket'] ?></td>
                                                <td><?php echo $pecah['nama_kategori'] ?></td>
                                                <td>Rp.<?php echo $pecah['harga_paket'] ?></td>
                                                <td><?php echo substr($pecah['lokasi_maps'],0,10);  ?>...</td>
                                                <td>
                                                    <img src="../foto_paket/<?php echo $pecah['foto_wisata'] ?>" width="100px">
                                                </td>
                                                <td><?php echo substr($pecah['deskripsi_wisata'],0,10);  ?>...</td>
                                                <td>
                                                    <a href="delete-pakets.php?id=<?php echo $pecah['id_paket']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau di Hapus?')">Hapus</a>
                                                    <a href="edit-pakets.php?id=<?php echo $pecah['id_paket']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                                                    
                                                    
                                                    <a href="detail-paket.php?id=<?php echo $pecah['id_paket']; ?>" class="btn btn-info btn-sm">Detail</a>
                                                </td>
                                            </tr>
                                            <?php $nomor++; ?>
                                        <?php } ?>
                                       
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