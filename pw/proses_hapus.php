<?php
include 'koneksi.php';
$id_buku = $_GET["id"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM buku WHERE id='$id_buku' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }
 ?>