<?php

include "koneksi.php";

$tgl = $_POST['tgl'];

$truncate = mysqli_query($koneksi, "TRUNCATE TABLE countdown");
$query = mysqli_query($koneksi, "INSERT INTO countdown VALUES('$tgl')");

if ($truncate and $query) {
  echo "<script>alert('Berhasil!'); document.location.href = 'home.php?page=pelamar';</script>";
} else {
  echo "<script>alert('Gagal!'); document.location.href = 'home.php?page=pelamar';</script>";
}
