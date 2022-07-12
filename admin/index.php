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
        <?php include_once('home.php');?>
      </div>
    </div>
  </div>

  <?php include_once('partial/footer.php'); ?>
</body>

</html>