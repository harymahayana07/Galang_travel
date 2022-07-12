
<?php
include_once('conn/koneksi.php');
$koneksi->query("DELETE FROM kategori WHERE id_kategori='$_GET[id]'");

echo "<script>alert('Kategori sudah terhapus');</script>";
echo "<script>location='kategori.php';</script>";

?>