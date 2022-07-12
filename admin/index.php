<?php
session_start();
include_once('conn/koneksi.php');
if (!isset($_SESSION['email'])) {
  header("location:auth/login.php");
}
  $query_data = $koneksi->query("SELECT * FROM paket");
  $jumlah_data = mysqli_num_rows($query_data);
  $query_data1 = $koneksi->query("SELECT * FROM kategori");
  $jumlah_data1 = mysqli_num_rows($query_data1);
  $query_data2 = $koneksi->query("SELECT * FROM admin");
  $jumlah_data2 = mysqli_num_rows($query_data2);
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
        <?php include_once('home.php');?>
      </div>
    </div>
  </div>

  <?php include_once('partial/footer.php'); ?>
</body>

</html>