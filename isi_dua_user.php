<?php
if (isset($_REQUEST['page'])) {

  $page = $_REQUEST['page'];

  switch ($page) {
    case 'user_gantipassword':
      include "user_gantipassword.php";
      break;
    case 'pendaftaran_user':
      include "pendaftaran_user.php";
      break;
    case 'pengumuman':
      include "pengumuman.php";
      break;
    case 'contact':
      include "contact.php";
      break;
  }
} else {
?>
  <section id="index" class="slider_section" style="margin-top: 6%;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5 offset-md-1">
                <div class="detail-box">
                  <div class="number">
                  </div>
                  <h1>
                    Magang <br>
                    <span>
                      DISKOMINFO <br>
                      Kota Semarang
                    </span>
                  </h1>
                  <div class="btn-box">
                    <span class="logo_name">
                      <h4><strong>Selamat Datang, <?php echo $_SESSION['nama']; ?> 😎 </strong></h4>
                    </span>
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


<?php
}
?>