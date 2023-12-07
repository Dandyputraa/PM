<?php
session_start();

if (empty($_SESSION['id_user'])) {
  $_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
  header('Location: ./login_copy.php');
  die();
} else {
  include "koneksi.php";
  include "class.php";

  $email = $_SESSION['username'];
?>

  <!DOCTYPE html>
  <!-- Coding By CodingNepal - codingnepalweb.com -->
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css1/admin.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="images/kominfo.png">
    <title>Admin | Profile Matching</title>
    <style>
      .sidebar-closed {
        left: 73px;
        width: calc(100% - 73px);
      }
    </style>
  </head>

  <body>

    <nav>
      <div class="logo-name">
        <div class="logo-image">
          <!-- <img src="images/user.png" alt=""> -->
        </div>
      </div>
      <div class="menu-items">
        <ul class="nav-links">
          <li><a class="nav-link active" aria-current="menu" href="home.php">
              <i class="uil uil-estate"></i>
              <span class="link-name">Dahsboard</span>
            </a></li>
          <li><a href="?page=pelamar">
              <i class="uil uil-files-landscapes"></i>
              <span class="link-name">Data Peserta</span>
            </a></li>
          <li><a href="?page=aspek">
              <i class="uil uil-files-landscapes"></i>
              <span class="link-name">Aspek</span>
            </a></li>
          <li><a href="?page=kriteria">
              <i class="uil uil-files-landscapes"></i>
              <span class="link-name">kriteria</span>
            </a></li>
          <li><a href="?page=profile">
              <i class="uil uil-calculator"></i>
              <span class="link-name">perhitungan</span>
            </a></li>
          <li><a href="?page=history">
              <i class="uil uil-chart"></i>
              <span class="link-name">Monitoring</span>
            </a></li>
          <li><a href="?page=gantipassword">
              <i class="uil uil-user"></i>
              <span class="link-name"><?php echo $_SESSION['nama']; ?></span>
            </a></li>
        </ul>
        <ul class="logout-mode">
          <li><a href="keluar.php">
              <i class="uil uil-signout"></i>
              <span class="link-name">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="dashboard">
      <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <div class="search-box">
          <i class="uil uil-search"></i>
          <input type="text" placeholder="Search here...">
        </div>

        <!--<img src="images/profile.jpg" alt="">-->
      </div>
      <?php
      include "isi_dua.php";
      ?>
    </section>

    <script>
      document.querySelector('.sidebar-toggle').addEventListener('click', function() {
        document.querySelector('nav').classList.toggle('close');
        document.querySelector('.dashboard').classList.toggle('sidebar-closed');
      });
    </script>


    <!-- <script>
      const sidebarToggle = document.querySelector(".sidebar-toggle");
      const dashboard = document.querySelector(".dashboard");

      sidebarToggle.addEventListener("click", function() {
        dashboard.classList.toggle("sidebar-open");
      });
    </script> -->
    <!-- <script src="js/admin.js"></script> -->
  </body>

  </html>

<?php
}
?>