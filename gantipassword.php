<?php
// session_start();
include "koneksi.php";

if (isset($_SESSION['id_user'])) {
    $username =  $_SESSION['username'];
    $nama =  $_SESSION['nama'];
    $email =  $_SESSION['email'];
    $id_user = $_SESSION['id_user'];
} else {
    die("Error. No ID Selected! ");
    // echo "<script>alert('Ganti Password Gagal!');location='home.php?page=gantipassword';</script>";
}

if (isset($_POST['upload'])) {
    $tipe_file = exif_imagetype($_FILES['userImage']['tmp_name']);
    if ($tipe_file == IMAGETYPE_JPEG || $tipe_file == IMAGETYPE_PNG || $tipe_file == IMAGETYPE_GIF) {
        $berkas = $_FILES['userImage']['name'];

        // $query = mysqli_query($koneksi, "SELECT id_user FROM master_user ORDER BY id_user DESC LIMIT 1");
        $query = mysqli_query($koneksi, "SELECT id_user FROM user WHERE id_user = '$id_user' ORDER BY id_user DESC LIMIT 1");
        $data = mysqli_fetch_array($query);

        $generate = date("YmdHis") . rand(1111, 9999);
        $nama_baru = $generate . ".jpg";
        $file_temp = $_FILES['userImage']['tmp_name'];
        $folder = "foto";

        move_uploaded_file($file_temp, "$folder/$nama_baru");

        mysqli_query($koneksi, "UPDATE user SET img = '$nama_baru' WHERE id_user = '$data[id_user]'");

        // $query = mysqli_query($koneksi, "SELECT img FROM master_user WHERE id_user = '$id_user'");
        // $row = mysqli_fetch_assoc($query);


        echo "<script>alert('Data Berhasil Disimpan');location='home.php?page=gantipassword';</script>";
    } else {
        echo "<script>alert('Tipe file tidak valid');window.history.go(-1);</script>";
    }
}


//proses ganti password
if (isset($_POST['Ganti'])) {
    // $nama        = $_POST['nama'];
    $password_lama    = $_POST['password_lama'];
    $password_baru    = $_POST['password_baru'];
    $konf_password    = $_POST['konf_password'];
    //cek old password
    $query = "SELECT * FROM user WHERE id_user='$id_user' AND password=MD5('$password_lama')";
    $sql = mysqli_query($koneksi, $query);
    $hasil = mysqli_num_rows($sql);
    if (!$hasil >= 1) {
?>
        <script language="JavaScript">
            alert('Password lama tidak sesuai!, silahkan ulang kembali!');
            document.location = 'home.php?page=gantipassword.php';
        </script>
<?php
        unset($_SESSION['id_user']);
        unset($_SESSION['nama']);
        session_destroy();
    }
    //validasi data data kosong
    else if (empty($_POST['password_baru']) || empty($_POST['konf_password'])) {
        echo "<h3><font color=red>Ganti Password Gagal! Data Tidak Boleh Kosong.</font></h3>";
    }
    //validasi input konfirm password
    else if (($_POST['password_baru']) != ($_POST['konf_password'])) {
        // echo "<h3><font color=red><center>Ganti Password Gagal! Password dan Konfirm Password Harus Sama.</center></font></h3>";
        echo "<script>alert('Ganti Password Gagal! Password dan Konfirm Password Harus Sama.');location='home.php?page=gantipassword';</script>";
    } else {
        //update data
        $query = "UPDATE user SET password=MD5('$password_baru') WHERE id_user='$id_user'";
        $sql = mysqli_query($koneksi, $query);
        //setelah berhasil update
        if ($sql) {
            // echo "<h3><font color=#8BB2D9><center>Ganti Password Berhasil!</center></font></h3>"
            echo "<script>alert('Ganti Password Berhasil!');location='home.php?page=gantipassword';</script>";
        } else {
            // echo "<h3><font color=red><center>Ganti Password Gagal!</center></font></h3>";
            echo "<script>alert('Ganti Password Gagal!');location='home.php?page=gantipassword';</script>";
        }
    }
}


?>

<!-- <link rel="stylesheet" href="css1/gantipsw.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    .image_upload>input {
        display: none;
    }
</style>

<body>
    <form action="" method="post" name="form-ganti-password" enctype="multipart/form-data" style="margin-top: 6rem;">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex flex-column align-items-center text-center">
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
                            $row = mysqli_fetch_assoc($query);

                            if ($row) {
                                $url_gambar = "foto/" . $row['img'];
                                echo "<img src='$url_gambar' class='rounded-circle mt-5' align='left' height='100px' width='100px'>";
                            }
                            ?>
                            <p class="image_upload">
                                <label for="userImage">
                                    <br><a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span>
                                        <a"><span class='glyphicon glyphicon-paperclip'></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                                            </svg>
                                    </a>
                                    </a>
                                </label>
                                <input type="file" name="userImage" id="userImage" accept="image/*">
                            </p>

                            <span class="font-weight-bold"><?= $nama ?></span>
                            <span class="text-black-50"><?= $email ?></span><br>
                            <button class="btn btn-success profile-button" type="submit" name="upload" id="upload">Simpan</button><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-right">
                    <div class="row mt-2">
                        <div class="d-flex justify-content-between align-items-center experience"><span style="background-color: aqua; width: 100%; height: 30px; text-align: center; font-weight: bold; display: flex; align-items: center; justify-content: center;"> Profile</span></div><br>
                        <div class="col-md-12"><label class="labels"> <br> Nama</label><input type="text" name="up_nama" id="up_nama" class="form-control" placeholder=" <?= $nama ?>" value="" disabled></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Username</label><input type="text" name="up_username" id="up_username" class="form-control disabled" value="" placeholder=" <?= $username ?>" disabled></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email</label><input type="email" name="up_email" id="up_email" class="form-control" placeholder="<?= $email ?>" value="" disabled></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mt-2">
                        <div class="d-flex justify-content-between align-items-center experience"><span style="background-color: aqua; width: 100%; height: 30px; text-align: center; font-weight: bold; display: flex; align-items: center; justify-content: center;"> Ubah Password</span></div>
                        <div class="col-md-12"><label class="labels"> <br> Password Lama</label><input name="password_lama" id="password_lama" type="password" class="form-control" value=""></div> <br>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Password Baru</label><input name="password_baru" id="password_baru" type="password" class="form-control" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Ulangi Password</label><input name="konf_password" id="konf_password" type="password" class="form-control" value=""></div>
                    </div>
                    <div class="mt-5 text-center">
                        <br><button class="btn btn-success profile-button" type="submit" name="Ganti" id="Ganti">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>