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
                            <h4 class="card-title">Pengelolaan Kategori</h4>
                            <div class="row mt-2" style="float: right; margin-right: 20px;">
                                <a href="add-kategori.php"><button type="button" class="btn btn-primary">Tambah kategori</button></a>&emsp;
                            </div>
                            <p class="card-description">
                            </p>
                            <div class="table-responsive pt-3">

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $nomor = 1; ?>

                                        <?php $ambil = $koneksi->query("SELECT * FROM kategori"); ?>
                                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $nomor ?></td>
                                                <td><?php echo $pecah["nama_kategori"] ?></td>
                                                <td>
                                                    <a href="delete-kategori.php?id=<?php echo $pecah['id_kategori']; ?>" class="btn btn-warning btn-sm">Hapus</a>
                                                    <a href="edit-kategori.php?id=<?php echo $pecah['id_kategori']; ?>" class="btn btn-danger btn-sm">Ubah</a>
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