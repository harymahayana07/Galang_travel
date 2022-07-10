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
                            <h4 class="card-title">Add Packets</h4>
                            <div class="row mt-2" style="float: right; margin-right: 20px;">
                            </div>
                            <p class="card-description">
                            </p>
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">

                                        <form class="forms-sample d-inline">
                                            <div class="form-group">
                                                <label for="paket">Packets Name</label>
                                                <input type="text" class="form-control" id="paket" placeholder="packets name">
                                            </div>
                                            <!-- select option kategory -->
                                            <div class="form-group">
                                                <label for="kategory">Nama Kategori</label>
                                                <select id="kategory" class="form-control" name="id_kategori">
                                                    <option value="">Pilih Kategori</option>
                                                    <?php foreach ($datakategori as $key => $value) : ?>
                                                        <option value="<?php echo $value["id_kategori"] ?>"><?php echo $value["nama_kategori"] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail3">Harga Paket</label>
                                                <input type="number" class="form-control" id="exampleInputEmail3" placeholder="harga pakets">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail3">Harga Paket</label>
                                                <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Input embed maps on Google">
                                            </div>

                                            <div class="form-group">
                                                <label for="img">Images</label>
                                                <div class="input-group col-xs-12">
                                                    <input id="img" type="file" class="form-control file-upload-info" name="foto[]" placeholder="Upload Image">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Deskripsi</label>
                                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        </form>
                                        <a href="pakets.php"><button class="btn btn-light">Cancel</button></a>
                                    </div>
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