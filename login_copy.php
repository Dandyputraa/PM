<?php
session_start();

// //jika ada session, maka akan diarahkan ke halaman
// if (isset($_SESSION['id_user'])) {

//   //mengarahkan ke halaman dashboard admin
//   header("Location: ./index1.php");
//   die();
// }

//mengincludekan koneksi database
include "koneksi.php";
if (isset($_POST['register'])) {
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  // $img = $_POST['img'];

  // ==========> DAFTAR <==========

  // lakukan validasi input (misalnya cek apakah username atau email sudah ada dalam database)

  // lakukan proses registrasi
  $query = "INSERT INTO user (nama, username, email, password) VALUES (?, ?, ?, ?)";
  $stmt = $koneksi->prepare($query);
  $password = md5($password);
  $stmt->bind_param("ssss", $nama, $username, $email, $password);

  if ($stmt->execute()) {
    // registrasi berhasil
    // echo "<script>alert('Registrasi berhasil! Silakan login.');</script>";
    echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='./login_copy.php';</script>";
    exit();
  } else {
    // registrasi gagal
    echo "<script>alert('Registrasi gagal. Mohon coba lagi.'); window.location.href='./login_copy.php';</script>";
  }
}

// ==========> LOGIN <==========
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Query untuk memeriksa apakah kombinasi email dan password valid
  $query = "SELECT id_user,username, nama, email, level, img FROM user WHERE email = ? AND password = MD5(?)";
  $stmt = $koneksi->prepare($query);
  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    // Login berhasil
    $row = $result->fetch_assoc();
    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['level'] = $row['level'];
    $_SESSION['img'] = $row['img'];


    if ($row['level'] == 1) {
      header("Location: home.php");
      exit();
    } elseif ($row['level'] == 0) {
      header("Location: user.php");
      exit();
    }
  } else {
    // Login gagal
    echo "<script>alert('Email atau password salah'); window.location.href='./login_copy.php';</script>";
  }

  $stmt->close();
  $koneksi->close();
} else {
?>


  <!DOCTYPE html>
  <!-- Coding By CodingNepal - codingnepalweb.com -->
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk & Daftar</title>
    <link rel="stylesheet" href="css1/login.css" />
  </head>

  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Daftar</header>
        <form method="post" role="form" action="#">
          <input type="text" id="username" name="username" placeholder="Username" required />
          <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required />
          <input type="text" id="email" name="email" placeholder="Email" required />
          <input type="password" id="password" name="password" placeholder="Password" required />
          <!-- <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div> -->
          <input type="submit" id="register" name="register" value="Daftar" />
        </form>
      </div>

      <div class="form login">
        <header>Login</header>
        <form method="post" role="form" action="#">
          <input type="text" id="email" name="email" placeholder="Email" required />
          <input type="password" id="password" name="password" placeholder="Password" required />
          <!-- <a href="#">Forgot password?</a> -->
          <input type="submit" id="login" name="login" value="Login" />
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>

  <?php
}

  ?>
  </body>

  </html>