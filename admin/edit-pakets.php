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
                            <h4 class="card-title">Edit Packets</h4>
                            <div class="row mt-2" style="float: right; margin-right: 20px;">
                            </div>
                            <p class="card-description">
                            </p>
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card ">
                                    <div class="card-body">
                                        <?php
                                        $ambil = $koneksi->query("SELECT * FROM paket WHERE id_paket='$_GET[id]'");
                                        $pecah = $ambil->fetch_assoc();
                                        $am = $koneksi->query("SELECT * FROM paket_foto WHERE id_paket='$_GET[id]'");
                                        $pe = $am->fetch_assoc();
                                        ?>
                                        <?php
                                        $datakategori = array();
                                        $ambil = $koneksi->query("SELECT * FROM kategori");
                                        while ($tiap = $ambil->fetch_assoc()) {
                                            $datakategori[] = $tiap;
                                        }
                                        ?>

                                        <form class="forms-sample d-inline" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="paket">Packets Name</label>
                                                <input type="text" name="nama" class="form-control" id="paket" value="<?php echo $pecah['nama_paket']; ?>" required>
                                            </div>
                                            <!-- select option kategory -->
                                            <div class="form-group">
                                                <label for="kategory">Nama Kategori</label>
                                                <select id="kategory" class="form-control" name="id_kategori" required>
                                                    <option value="">Pilih Kategori</option>
                                                    <?php foreach ($datakategori as $key => $value) : ?>

                                                        <option value="<?php echo $value["id_kategori"] ?>" <?php if ($pecah["id_kategori"] == $value["id_kategori"]) {
                                                                                                                echo "selected";
                                                                                                            } ?>><?php echo $value["nama_kategori"] ?></option>

                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="harga1">Harga Paket (Rp)</label>
                                                <input type="number" name="harga" class="form-control" id="harga1" value="<?php echo $pecah['harga_paket']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lokasi1">Lokasi Maps</label>
                                                <input type="text" name="lokasi" class="form-control" id="lokasi1" value="<?php echo $pecah['lokasi_maps']; ?>" required>
                                            </div>
                                            <div class="form-group">

                                                <img src="../foto_paket/<?php echo $pecah['foto_wisata']; ?>" width="200">

                                            </div>
                                            <div class="form-group">
                                                <label for="img">Ganti Foto Baru</label>
                                                <div class="input-group col-xs-12 mb-3">
                                                    <input id="img" type="file" class="form-control file-upload-info" name="foto">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="des">Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi" id="des" rows="4" required><?php echo $pecah['deskripsi_wisata']; ?></textarea>
                                            </div>
                                            <button type="submit" name="edit" class="btn btn-primary mr-2">Update</button>
                                        </form>
                                        <a href="pakets.php"><button class="btn btn-danger">Cancel</button></a>
                                        <?php
                                        if (isset($_POST['edit'])) {

                                            $namafoto = $_FILES['foto']['name'];
                                            $lokasifoto = $_FILES['foto']['tmp_name'];
                                            // $lokasifoto = $foto['tmp_name'];

                                            if (!empty($lokasifoto)) {
                                                move_uploaded_file($lokasifoto, "../foto_paket/$namafoto");

                                                $koneksi->query("UPDATE paket SET nama_paket='$_POST[nama]',id_kategori='$_POST[id_kategori]', harga_paket='$_POST[harga]',lokasi_maps='$_POST[lokasi]',foto_wisata='$namafoto', deskripsi_wisata='$_POST[deskripsi]' WHERE id_paket='$_GET[id]'");
                                            } else {
                                                $koneksi->query("UPDATE paket SET nama_paket='$_POST[nama]', id_kategori='$_POST[id_kategori]',harga_paket='$_POST[harga]',lokasi_maps='$_POST[lokasi]', deskripsi_wisata='$_POST[deskripsi]' WHERE id_paket='$_GET[id]'");
                                            }
                                            echo "<script>alert('data paket telah diubah');</script>";
                                            echo "<script>location='pakets.php';</script>";
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".btn-tambah").on("click", function() {
                $(".letak-input").append("<input type='file' class='form-control' name='foto[]'>");
            })
        })
    </script>
    <?php include_once('partial/footer.php'); ?>
</body>

</html>