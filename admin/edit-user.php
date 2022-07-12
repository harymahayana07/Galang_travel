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
                            <h4 class="card-title">Edit Profile</h4>
                            <div class="row mt-2" style="float: right; margin-right: 20px;">
                            </div>
                            <p class="card-description">
                            </p>
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        $ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
                                        $pecah = $ambil->fetch_assoc();
                                        ?>
                                        <form class="forms-sample d-inline" method="post">
                                            <div class="form-group">
                                                <label for="mail">Email</label>
                                                <input type="email" name="email" class="form-control" id="mail" value=" <?php echo $pecah['email_admin']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="usr">Username</label>
                                                <input type="text" name="username" class="form-control" id="usr" value=" <?php echo $pecah['username']; ?>" required>
                                            </div>
                                            <button type="submit" name="edit" class="btn btn-primary mr-2">Submit</button>
                                        </form>
                                        <a href="user.php"><button class="btn btn-light">Cancel</button></a>
                                        <?php
                                        if (isset($_POST['edit'])) {
                                            $koneksi->query("UPDATE admin SET email_admin='$_POST[email]',username='$_POST[username]' WHERE id_admin='$_GET[id]'");
                                            echo "<script>alert('profile sudah diubah');</script>";
                                            echo "<script>location='user.php';</script>";
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
    <?php include_once('partial/footer.php'); ?>

</body>

</html>