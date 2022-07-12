<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Galang Travel</title>
    <link rel="stylesheet" href="../template/vendors/feather/feather.css">
    <link rel="stylesheet" href="../template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../template/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../template/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="../template/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo text-center">
                                <h3><span><img src="../template/images/Galang_travel-removebg-preview.png" style="background-color: aliceblue; border-radius: 100px; height: 40px; width: 40px;" alt=""></span> Galang Travel</h3>
                            </div>
                            <h6 class="font-weight-light">Sign in to continues as Admin.</h6>
                            <form class="pt-3" method="POST">
                                <div class="form-group" for="emailLogin">
                                    <input type="email" name="email" class="form-control form-control-lg" id="emailLogin" placeholder="Masukan Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Masukan Password">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="simpan">SIGN IN</button>
                                </div>
                            </form>
                            <div class="mt-3">
                                <a href="../../index.php">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    session_start();
    include_once('../conn/koneksi.php');
    if (isset($_POST['simpan'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ambil = $koneksi->query("SELECT * FROM admin WHERE email_admin='$email' AND password='$password'");

        if (mysqli_num_rows($ambil) == 0) {
            echo "<script> alert('anda gagal login, cek akun anda');</script>";
            echo "<script> location ='login.php';</script>";
        } else {
            while ($row = mysqli_fetch_array($ambil)) {
                $_SESSION['simpan'] = true;
                $_SESSION['id_admin'] = $row['id_admin'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email_admin'];
                $_SESSION['pw'] = $row['password'];
            }
            echo "<script> alert('anda sukses login');</script>";
            echo "<script> location ='../index.php';</script>";
        }
    }
    ?>
    <script src="../template/vendors/js/vendor.bundle.base.js"></script>
    <script src="../template/js/off-canvas.js"></script>
    <script src="../template/js/hoverable-collapse.js"></script>
    <script src="../template/js/template.js"></script>
    <script src="../template/js/settings.js"></script>
    <script src="../template/js/todolist.js"></script>
</body>

</html>