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
                            <h4 class="card-title">Profil</h4>
                            <div class="col-md-8 col-md-4">
                                <form class="forms-sample d-inline">
                                    <div class="form-group">
                                        <label for="em">Email</label>
                                        <input type="text" class="form-control" id="em" value="<?= $_SESSION['email'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Username</label>
                                        <input type="text" class="form-control" id="usr" value="<?= $_SESSION['username'] ?>" readonly>
                                    </div>
                                </form>
                                <?php $ambil = $koneksi->query("SELECT * FROM admin"); ?>
                                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                    <a href="edit-user.php?id=<?php echo $pecah['id_admin']; ?>" class="btn btn-warning">Ubah Profil</a>
                                <?php } ?>
                                <a href="edit-pass.php" class="btn btn-warning">Ubah Password</a>
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