<?php
//memulai session
session_start();

//jika ada session, maka akan diarahkan ke halaman dashboard admin
if (isset($_SESSION['id_user'])) {
  //mengarahkan ke halaman dashboard admin
  header("Location: ./index.php");
  die();
}

//mengincludekan koneksi database
include "koneksi.php";

//memeriksa apakah form registrasi telah disubmit
if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // lakukan validasi input (misalnya cek apakah username atau email sudah ada dalam database)

  // lakukan proses registrasi
  $query = "INSERT INTO user (username, nama, email, password) VALUES (?, ?, ?, ?)";
  $stmt = $koneksi->prepare($query);
  $password = md5($password);
  $stmt->bind_param("ssss", $username, $nama, $email, $password);

  if ($stmt->execute()) {
    // registrasi berhasil
    // echo "<script>alert('Registrasi berhasil! Silakan login.');</script>";
    echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='index.php';</script>";
    exit();
  } else {
    // registrasi gagal
    echo "<script>alert('Registrasi gagal. Mohon coba lagi.');</script>";
  }

  $stmt->close();
  $koneksi->close();
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Profile Matching</title>

  <!-- Bootstrap core JS -->
  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/9f2ac9fd56.js"></script>
  <script src="js/bootstrap-password-toggler.js" type="text/javascript"></script>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
</head>

<body class="text-center">
  <div class="container">
    <form class="form-signin" method="post" action="" role="form">
      <div class="mb-3">
        <header class="header">PROFILE MATCHING</header>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="input" id="username" name="username" class="form-control" placeholder="Username" required autofocus>

        <label for="inputEmail" class="sr-only">Nama lengkap</label>
        <input type="input" id="name" name="nama" class="form-control" placeholder="Masukan nama" required autofocus>

        <label for="inputEmail" class="sr-only">Email</label>
        <input type="input" id="nama" name="email" class="form-control" placeholder="email@example.com" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" data-toggle="password" placeholder="Password" required>

        <div class="checkbox mb-3" style="display:none;">
        </div>
        <button class="button" type="submit" name="register">Daftar</button>
        <p>Sudah Punya Akun? <a href="index.php">Login</a></p>
        <!-- <p class="mt-4 mb-3 text-muted">G.111.19.0039 <br> &copy; 2023 </p> -->
    </form>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(".alert-message").alert().delay(3000).slideUp('slow');
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>