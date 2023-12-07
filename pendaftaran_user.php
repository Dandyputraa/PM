  <style>
    .container-dua {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      margin-top: 5%;
    }

    .container-dua h2 {
      font-weight: bolder;
    }

    .container-dua p {
      font-weight: bolder;
    }
  </style>

  <div class="container-dua" id="dibuka">
    <div class="col-md-6 px-0">
      <div style="margin-bottom: 8rem;">
        <div class="map-responsive">
          <h2>MAAF PENDAFTARAN SUDAH DITUTUP</h2>
          <P>Batas waktu pendaftaran sudah habis</P>
          <img src="images/close.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <section id="ditutup" class="contact_section layout_padding-top">
    <div class="row" style="margin-top: -5%;">
      <div class="col-md-5 offset-md-1">
        <div class="form_container">
          <div class="heading_container">
            <h2>
              Pendaftaran
            </h2>
            <h5>Berakhir dalam :</h5>
            <div id="countdown"></div>
          </div class="card">
          <form action="pendaftaran_user_action.php" method="post" enctype="multipart/form-data">
            <div>
              <input type="text" name="nama_peserta" id="nama_peserta" placeholder="Nama Lengkap " required />
            </div>
            <div>
              <input type="text" name="no_tlp" id="no_tlp" placeholder="Nomor Telepon" required />
            </div>
            <div>
              <input type="email" name="email" id="email" placeholder="Email" required />
            </div>
            <div>
              <input type="text" name="univ" id="univ" placeholder="Asal Universitas/Sekolah" required />
            </div>
            <div>
              <label for="berkas">Surat Permohonan & Transkip nilai(.pdf)</label>
              <input type="file" name="berkas" id="berkas" accept="application/pdf" placeholder="Berkas" required />
            </div>

            <div class="d-flex">
              <button type="submit" name="submit" id="submit">
                Kirim
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 px-0">
        <div style="margin-bottom: 8rem;">
          <div class="map-responsive">
            <img src="images/regis.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <br><br><br><br><br><br>

  <script type="text/javascript">
    function countdown() {
      var target = localStorage.getItem("targetTime");
      target = parseInt(target);

      var sekarang = new Date().getTime();
      var sisa = (target - sekarang) / 1000;

      if (sisa <= 0) {
        document.getElementById("countdown").innerHTML = "Pendaftaran sudah ditutup";
      } else {
        var hari = parseInt(sisa / 86400);
        sisa = sisa % 86400;
        var jam = parseInt(sisa / 3600);
        sisa = sisa % 3600;
        var menit = parseInt(sisa / 60);
        var detik = parseInt(sisa % 60);

        document.getElementById("countdown").innerHTML = "<h6 class='d-inline'>" + hari + " hari </h6><h6 class='d-inline'>" + jam + " jam </h6><h6 class='d-inline'>" + menit + " menit </h6><h6 class='d-inline mt-5'>" + detik + " detik</h6>";
      }
    }

    setInterval(countdown, 1000);
  </script>
  <script type="text/javascript">
    // Mendapatkan waktu saat ini
    var sekarang = new Date().getTime();

    // Mendapatkan waktu tutup pendaftaran dari local storage
    var waktuTutup = localStorage.getItem("targetTime");
    waktuTutup = parseInt(waktuTutup);

    // Memeriksa apakah waktu saat ini melebihi waktu tutup pendaftaran
    if (sekarang > waktuTutup) {
      // Jika melebihi, menyembunyikan elemen formulir pendaftaran
      document.getElementById("ditutup").style.display = "none";
    } else {
      document.getElementById("dibuka").remove();

    }
  </script>