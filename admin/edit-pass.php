        <?php
        session_start();
        include_once('conn/koneksi.php');
        if (!isset($_SESSION['email'])) {
            header("location:auth/login.php");
        }
        ?>
        <?php
        if (isset($_POST['edit'])) {
            $lama = $_POST['lama'];
            $baru = $_POST['baru'];
            $konfirm = $_POST['confirm'];

            $sql = $koneksi->query("SELECT * FROM admin WHERE password='$lama'");
            $row = $sql->fetch_array();
            if (!$lama) {
                $errors[] = 'password lama tidak boleh kosong';
            }
            if (!$baru) {
                $errors[] = 'password baru tidak boleh kosong';
            }
            if (!$konfirm) {
                $errors[] = 'konfirmasi passwordtidak boleh kosong';
            }

            if (empty($errors)) :
                if (mysqli_num_rows($sql) == 1) {
                    if ($baru == $konfirm) {
                        $simpan = $koneksi->query("UPDATE admin SET password='$_POST[baru]' WHERE id_admin='$row[0]'");
                        if ($simpan) {
                            $sts[] = 'Password Berhasil Dirubah';
                        } else {
                            $sts[] = 'Password Gagal dirubah';
                        }
                    } else {
                        $sts[] = 'Password Baru dan Konfirmasi Anda berbeda';
                    }
                } else {
                    $sts[] = 'Password Lama Anda salah';
                }

            endif;
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
                                    <h4 class="card-title">Edit Password</h4>
                                    <?php if (!empty($errors)) : ?>
                                        <?php foreach ($errors as $err) : ?>
                                            <div style="margin-left: 2px; margin-right: 9px;">
                                                <div class="col-md-6 col-md-3 alert alert-warning"><i class="fas fa-check-circle"></i><a href=""><button type="button" class="close"><span>&times;</span></button></a>&emsp;<?php echo $err; ?></div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                    <?php if (!empty($sts)) : ?>
                                        <?php foreach ($sts as $st) : ?>
                                            <div style="margin-left: 2px; margin-right: 9px;">
                                                <div class="col-md-6 col-md-3 alert alert-info"><i class="fas fa-check-circle"></i><a href=""><button type="button" class="close"><span>&times;</span></button></a>&emsp;<?php echo $st; ?></div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="forms-sample d-inline" action="" method="post">
                                                    <div class="form-group">
                                                        <label for="mail1">Password Lama</label>
                                                        <input type="text" name="lama" class="form-control" id="mail1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mail2">Password Baru</label>
                                                        <input type="password" name="baru" class="form-control" id="mail2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mail3">Confirm Password</label>
                                                        <input type="password" name="confirm" class="form-control" id="mail3">
                                                    </div>
                                                    <input type="submit" name="edit" class="btn btn-primary mr-2" value="Submit">
                                                    <!-- <button name="edit" class="btn btn-primary mr-2">Submit</button> -->
                                                </form>
                                                <a href="user.php"><button class="btn btn-light">Cancel</button></a>

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