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

<div class="container-dua" id="ditutup">
  <div class="col-md-6 px-0">
    <div style="margin-bottom: 8rem;">
      <div class="map-responsive">
        <h2>PENGUMUMAN</h2>
        <P>Pengumuman Peneriman Peserta Akan Keluar Saat Pendaftaran Ditutup</P>
        <img src="images/ann.png" alt="">
      </div>
    </div>
  </div>
</div>
<section id="dibuka" class="contact_section layout_padding-top">
  <div class="container-fluid">
    <div class="row" style="margin-top: -5%;">
      <div class="col-md-5 offset-md-1">
        <div class="form_container">
          <div class="heading_container">
            <h2>
              Pengumuman
            </h2><br>
            <h5 style="font-weight: bolder;">
              Berikut peserta yang duterima magang !
            </h5>
            <p>
              Semua peserta yang sudah diterima bisa langsung datang ke kantor untuk melaksanakan magang.
            </p>
          </div class="card">
          <form action="">
            <div class="card-body" name="dibuka" style="border: 5px solid salmon; border-radius: 10px; text-align: center;">
              <table class="table" style="text-align: center;">
                <thead style="position: sticky;top: 0" class="table-dark">
                  <tr>
                    <td class="header" scope="col">No</td>
                    <td class="header" scope="col">Nama Peserta</td>
                    <td class="header" scope="col">Universitas</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = "SELECT * FROM pm_ranking WHERE status = 1";
                  $master_pelamar = $koneksi->prepare($query);
                  $master_pelamar->execute();
                  $res1 = $master_pelamar->get_result();


                  if ($res1->num_rows > 0) {
                    while ($row = $res1->fetch_assoc()) {
                      $nama_pelamar = $row['nama_peserta'];
                      $univ = $row['universitas'];
                      $status = $row['status'];

                  ?>
                      <tr>
                        <td class="nomor"><?php echo $no++; ?></td>
                        <td><?php echo $nama_pelamar; ?></td>
                        <td><?php echo $univ; ?></td>
                      </tr>
                    <?php }
                  } else { ?>
                    <tr>
                      <td colspan='7'>Tidak ada data yang ditemukan</td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 px-0">
        <div style="margin-bottom: 8rem;">
          <div class="map-responsive">
            <img src="images/ann1.png" width="650" height="650" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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