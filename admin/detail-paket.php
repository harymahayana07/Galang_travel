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
                <div class="col-lg-9 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Detail Paket</h4>
                            <p class="card-description">
                            </p>
                            <div class="table-responsive pt-3">
                                <?php
                                $id_paket = $_GET["id"];

                                $ambil = $koneksi->query("SELECT * FROM paket LEFT JOIN kategori ON paket.id_kategori=kategori.id_kategori WHERE id_paket='$id_paket'");
                                $detailpaket = $ambil->fetch_assoc();

                                $fotopaket = array();
                                $ambilfoto = $koneksi->query("SELECT*FROM paket_foto WHERE id_paket='$id_paket'");
                                while ($tiap = $ambilfoto->fetch_assoc()) {
                                    $fotopaket[] = $tiap;
                                }

                                ?>
                                <!--  -->
                                <div class="form-group">
                                    <label for="paket">Packets Name</label>
                                    <input type="text" class="form-control" id="paket" value="<?php echo $detailpaket["nama_paket"] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="paket">Kategori</label>
                                    <input type="text" class="form-control" id="paket" value="<?php echo $detailpaket["nama_kategori"] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="harga1">Harga Paket (Rp)</label>
                                    <input type="number" class="form-control" id="harga1" value="<?php echo $detailpaket["harga_paket"] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="des">Lokasi</label>
                                    <textarea class="form-control" id="des" rows="4" readonly><?php echo $detailpaket["lokasi_maps"]; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label> Album Foto Wisata </label>
                                    <div class="col-md-12" style="background-color: grey;">
                                            <?php foreach ($fotopaket as $key => $value) : ?>
                                                <img src="../foto_paket/<?php echo $value["nama_paket_foto"] ?>" style="width: 200px; height: 200px; border-radius: 5px; margin-top: 10px;margin-bottom: 10px;">
                                            <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="des">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="des" rows="4" readonly><?php echo $detailpaket["deskripsi_wisata"] ?></textarea>
                                </div>
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