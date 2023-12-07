<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {
  $tipe_file = $_FILES['berkas']['type'];
  if ($tipe_file == 'application/pdf') {
    $nama_pelamar = $_POST['nama_peserta'];
    $tlp          = $_POST['no_tlp'];
    $email        = $_POST['email'];
    $univ         = $_POST['univ'];
    $berkas       = $_FILES['berkas']['name'];

    $sql = "INSERT into peserta (nama_peserta, tlp, email, universitas, status) VALUES ('$nama_pelamar', '$tlp', '$email', '$univ', '0')";
    mysqli_query($koneksi, $sql);

    $query = mysqli_query($koneksi, "SELECT id_peserta FROM peserta ORDER BY id_peserta DESC LIMIT 1");
    $data = mysqli_fetch_array($query);

    $generate = date("YmdHis") . rand(1111, 9999);
    $nama_baru = $generate . ".pdf";
    $file_temp = $_FILES['berkas']['tmp_name'];
    $folder = "file";

    move_uploaded_file($file_temp, "$folder/$nama_baru");

    mysqli_query($koneksi, "UPDATE peserta SET berkas = '$nama_baru' WHERE id_peserta = '$data[id_peserta]'");

    echo "<script>alert('Pendaftaran Berhasil, Cek halaman pengumuman secara berkala !');location='user.php?page=pendaftaran_user';</script>";
  } else {
    echo "<script>alert('Error');window.history.go(-1);</script>";
  }
}
