<?php
include 'koneksi.php';

if (isset($_POST['batal'])) {
    // tombol batal ditekan, tidak ada data yang diubah
    header("location: home.php?page=pelamar");
    exit;
} elseif (isset($_POST['simpan'])) {
    $id_pelamar = stripslashes(strip_tags(htmlspecialchars($_POST['id_peserta'], ENT_QUOTES)));
    $nama_pelamar = stripslashes(strip_tags(htmlspecialchars($_POST['nama_peserta'], ENT_QUOTES)));
    $no_hp = stripslashes(strip_tags(htmlspecialchars($_POST['tlp'], ENT_QUOTES)));
    $email = stripslashes(strip_tags(htmlspecialchars($_POST['email'], ENT_QUOTES)));
    $univ = stripslashes(strip_tags(htmlspecialchars($_POST['univ'], ENT_QUOTES)));


    $query = "UPDATE peserta SET nama_peserta=?, tlp=?, email=?, universitas=?, WHERE id_peserta=?";
    $pelamar = $koneksi->prepare($query);
    $pelamar->bind_param("sssss", $nama_pelamar, $no_hp, $email, $univ, $id_pelamar);

    if ($pelamar->execute()) {
        echo "<script>alert('Data Berhasil Diubah');location='home.php?page=pelamar';</script>";
    } else {
        echo "<script>alert('error! Data Gagal Diubah');location='home.php?page=pelamar';</script>";
    }
}


$koneksi->close();
