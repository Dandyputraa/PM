<?php
session_start();

if (empty($_SESSION['id_user'])) {
  //session_destroy();
  $_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
  header('Location: ./login_copy.php');
  die();
} else {
  include "koneksi.php";
  include "class.php";
?>

  <!DOCTYPE html>
  <html>

  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/kominfo.png">
    <title>DISKOMINFO</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css1/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css1/responsive.css" rel="stylesheet" />
  </head>

  <body>
    <div class="hero_area ">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="user.php">
              <img src="images/pemkot.png" alt="">
            </a>
            <div class="" id="">
              <div class="User_option">
              </div>

              <div class="custom_menu-btn">
                <button onclick="openNav()">
                  <span class="s-1">

                  </span>
                  <span class="s-2">

                  </span>
                  <span class="s-3">

                  </span>
                </button>
              </div>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <div class="logo-name">
                    <div class="logo-image">
                      <a href="?page=user_gantipassword"> <br>
                        <img src="images/user1.png" width="100" height="100" alt="">
                    </div>
                  </div>
                  <a aria-current="page" href="user.php">Home</a>
                  <a href="?page=pendaftaran_user">Pendaftaran</a>
                  <a href="?page=pengumuman">Pengumuman</a>
                  <!-- <a href="?page=contact">Contact Us</a> -->
                  <div class="logout">
                    <a href="keluar.php">
                      <img src="images/off.png" width="80" height="80" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
      <!-- slider section -->
      <section>
        <?php
        include "isi_dua_user.php";
        ?>
      </section>
      <!-- end about section -->

      <!-- animal section -->

      <section id="photo" class="animal_section layout_padding">
        <div class="container">
          <div class="animal_container">
            <div class="box b2">
              <div class="img-box">
                <img src="images/smg.jpg" width="400" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  KOTA SEMARANG
                </h5>
              </div>
            </div>
            <div class="box b1">
              <div class="img-box">
                <img src="images/kominfo.jpg" width="500" height="200" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  KOMINFO
                </h5>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- info section -->
      <section class="info_section ">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="info_contact">
                <h5>
                  CONTACT INFO
                </h5>
                <div>
                  <img src="images/home1.png" style="width:20px ; height: 20px ;" alt="" />
                  <p>
                    Alamat : <br>
                    Sekayu, Semarang Tengah, Kota Semarang, Jawa Tengah 50132
                  </p>
                </div>
                <div>
                  <img src="images/call.png" alt="" />
                  <p>
                    Telepon : <br>
                    (024)3549446
                  </p>
                </div>
                <div>
                  <img src="images/mail.png" alt="" />
                  <p>
                    Email : <br>
                    diskominfo@semarangkota.go.id
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="info_social">
                <h5>
                  sosial media
                </h5>
                <div class="social_container">
                  <div>
                    <a href="https://www.facebook.com/pusatinformasipublik/">
                      <img src="images/fb.png" alt="" />
                    </a>
                  </div>
                  <div>
                    <a href="https://twitter.com/kominfokotasmg">
                      <img src="images/twitter.png" alt="" />
                    </a>
                  </div>
                  <div>
                    <a href="https://www.instagram.com/diskominfokotasemarang/">
                      <img src="images/instagram.png" alt="" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="info_form pl-lg-4">
                <h5>
                  Newsletter
                </h5>
                <form action="">
                  <input type="text" placeholder="Enter Your Email" />
                  <button type="submit">
                    Subscribe
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- end info_section -->


      <!-- footer section -->
      <section class="container-fluid footer_section ">
        <p>
          &copy; 2023 All Rights Reserved.
          <!-- Design by
      <a href="https://html.design/">Free Html Templates</a> -->
        </p>
      </section>
      <!-- end  footer section -->


      <script type="text/javascript" src="js1/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="js1/bootstrap.js"></script>
      <script>
        function openNav() {
          document.getElementById("myNav").classList.toggle("menu_width")
          document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
        }
      </script>

  </body>

  </html>

<?php
}
?>