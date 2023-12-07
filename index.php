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
  <!-- <link rel=”icon” href=”images/kominfo.png”> -->
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
          <a class="navbar-brand" href="index.html">
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
                <a href="index.php">Home</a>
                <!-- <a href="#contact">Contact Us</a> -->
                <div class="btn" style="align-items: center; justify-content: center; background-color: #0A2050; height: 50px; border: 2px solid white;">
                  <a href="login_copy.php" class="btn-1">
                    Daftar
                  </a>
                </div>
                <div class="btn" style="align-items: center; justify-content: center; background-color: #0A2050; height: 50px; border: 2px solid white;">
                  <a href="login_copy.php" class="btn-1">
                    Login
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
    <section id="index" class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol> -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <!-- <h5>
                        01
                      </h5> -->
                    </div>
                    <h1>
                      Magang <br>
                      <span>
                        DISKOMINFO <br>
                        Kota Semarang
                      </span>
                    </h1>
                    <p><strong>Terbuka Untuk Mahasiswa / Siswa.</strong></p>
                    <div class="btn-box">
                      <a href="login_copy.php" class="btn-1">
                        Daftar
                      </a>
                      <a href="login_copy.php" class="btn-1">
                        Login
                      </a>
                      <!-- <a href="" class="btn-2">
                        Contact Us
                      </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/magang1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section id="about" class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container">
          <img src="images/about.png" alt="">
          <h2>
            About Us <br> <br>
          </h2>
        </div>
        <h5>
          <strong>
            Apa arti dari Diskominfo?
          </strong>
        </h5>
        <p>
          Dinas Komunikasi, Informatika, Persandian dan Statistik, atau yang lebih dikenal dengan singkatan DISKOMINFO/DISKOMINFOSANTIK, merupakan pecahan dari Dinas Perhubungan, Komunikasi dan Informatika DISHUBKOMINFO.
        </p>
      </div>
      <div class="detail-box">
        <div class="heading_container">
          <h2>
            <br>
          </h2>
        </div>
        <h5>
          <strong>
            Dinas Kominfo bergerak di bidang apa?
          </strong>
        </h5>
        <p>
          Dinas Komunikasi dan Informatika mempunyai tugas membantu Bupati melaksanakan Urusan Pemerintahan Bidang Komunikasi, Informatika, Persandian dan Statistik yang menjadi kewenangan Daerah dan Tugas Pembantuan yang diberikan kepada Kabupaten.
        </p>
      </div>

    </div>
  </section>

  <!-- end about section -->
  <section id="contact" class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Feedback
              </h2>
              <p>
                Berikan pendapat anda mengenai lembaga dinas kami !
              </p>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  KIRIM
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container" style="height: 725px; border-radius: 100% 0 0 0; overflow: hidden; margin-left: 45px;">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=diskominfo+kota+semarang" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
              <!-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>

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