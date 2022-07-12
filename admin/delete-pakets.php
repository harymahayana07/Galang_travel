<?php
include_once('conn/koneksi.php');
$ambil =$koneksi->query("SELECT*FROM paket WHERE id_paket='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotopaket =$pecah['foto_paket'];
if (file_exists("../foto_paket/$fotopaket"))
{
	unlink("../foto_paket/$fotopaket");
} 


$koneksi->query("DELETE FROM paket WHERE id_paket='$_GET[id]'");

echo "<script>alert('paket sudah terhapus');</script>";
echo "<script>location='pakets.php';</script>";
