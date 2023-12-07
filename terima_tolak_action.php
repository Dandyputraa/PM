
    <?php

    include 'koneksi.php';

    // Mengambil nilai dari parameter URL
    $id_peserta = $_GET['id_peserta'];

    // Memeriksa apakah tombol terima atau tolak yang diklik
    if (isset($_GET['yes'])) {
        // Jika tombol terima diklik, lakukan pemrosesan
        // Misalnya, mengupdate kolom status menjadi 2
        // Gantikan "nama_tabel" dengan nama tabel yang sesuai
        $query = "UPDATE nama_tabel SET status = 2 WHERE id_peserta = $id_peserta";
        // Eksekusi query untuk mengupdate data
        // Gantikan "koneksi_database" dengan koneksi ke database yang sesuai
        mysqli_query($koneksi_database, $query);

        // Tambahkan pesan alert
        echo "<script>alert('Peserta diterima.');</script>";

        // Redirect ke halaman yang sesuai setelah pemrosesan terima
        header("Location: halaman_terima.php");
        exit();
    } elseif (isset($_GET['no'])) {
        // Jika tombol tolak diklik, lakukan pemrosesan
        // Misalnya, mengupdate kolom status menjadi 3
        // Gantikan "nama_tabel" dengan nama tabel yang sesuai
        $query = "UPDATE nama_tabel SET status = 3 WHERE id_peserta = $id_peserta";
        // Eksekusi query untuk mengupdate data
        // Gantikan "koneksi_database" dengan koneksi ke database yang sesuai
        mysqli_query($koneksi_database, $query);

        // Tambahkan pesan alert
        echo "<script>alert('Peserta ditolak.');</script>";

        // Redirect ke halaman yang sesuai setelah pemrosesan tolak
        header("Location: halaman_tolak.php");
        exit();
    }

    ?>
