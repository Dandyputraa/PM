<?php
include "707.php"
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<div class="container" style="padding-top: 4rem;">
  <form class="form-kecerdasan" method="post" action="" role="form">
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="font-weight: bold;">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">proses</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Magang</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="selesai-tab" data-bs-toggle="tab" data-bs-target="#selesai-tab-pane" type="button" role="tab" aria-controls="selesai-tab-pane" aria-selected="false">Selesai</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <table class="table table-striped">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Universitas</th>
              <th>Rank</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $query = "SELECT * FROM pm_ranking WHERE status= 0";
            $master_pelamar = $koneksi->prepare($query);
            $master_pelamar->execute();
            $res1 = $master_pelamar->get_result();


            if ($res1->num_rows > 0) {
              while ($row = $res1->fetch_assoc()) {
                $id = $row['id_peserta'];
                $nama_pelamar = $row['nama_peserta'];
                $univ = $row['universitas'];
                $status = $row['status'];
            ?>
                <tr>
                  <td class="nomor"><?php echo $no++; ?></td>
                  <td><?php echo $nama_pelamar; ?></td>
                  <td><?php echo $univ; ?></td>
                  <td class="text-primary" style=" font-weight : bolder;">
                    <?php
                    echo cari_nilai("select rank as nilai from(SELECT id_peserta, nilai_akhir, @curRank := @curRank + 1 AS rank FROM pm_ranking p, (SELECT @curRank := 0) r ORDER BY nilai_akhir desc) tbl where id_peserta =" . $row['id_peserta'] . "");
                    ?>
                  </td>
                  <td class="kotak" style="width: 20px; height: 10px; align-items: center">
                    <?php
                    if ($row['status'] == '0') {
                      echo "<form method='post'>";
                      echo "<input type='hidden' name='id' value='$id'>";
                      // echo "<input type='hidden' name='nama' value='$nama_pelamar'>";
                      // echo "<input type='hidden' name='univ' value='$univ'>";
                      echo "<button type='submit' name='terima' class='btn btn-success btn-sm'> <i class='fa fa-trash'></i> Terima </button>";
                      echo "<button type='submit' name='tolak' class='btn btn-danger btn-sm'> <i class='fa fa-trash'></i> Tolak </button>";
                      echo "</form>";
                    }

                    ?>
                  </td>
                </tr>
              <?php }
            } else { ?>
              <tr>
                <td style="text-align: center;" colspan='7'>Tidak ada data yang ditemukan</td>
              </tr>
            <?php }
            if (isset($_POST['terima'])) {
              $id = $_POST['id'];

              $query = "UPDATE pm_ranking SET status = 1 WHERE id_peserta = ?";
              // $query = "DELETE FROM pm_ranking WHERE id_peserta = ?";
              $stmt = $koneksi->prepare($query);
              $stmt->bind_param("i", $id);
              $stmt->execute();
              $stmt->close();

              // $query = "UPDATE peserta SET status = 1 WHERE id_peserta = ?";
              $query = "DELETE FROM peserta WHERE id_peserta = ?";
              $stmt = $koneksi->prepare($query);
              $stmt->bind_param("i", $id);
              $stmt->execute();
              $stmt->close();

              echo "<script>alert('Berhasil Diterima!');location='home.php?page=history';</script>";
            } else {
              // echo "<script>alert('Gagal Diterima!');location='home.php?page=history';</script>";
            }

            if (isset($_POST['tolak'])) {
              $id = $_POST['id'];
              // Hapus data berdasarkan ID
              $query = "DELETE FROM pm_ranking WHERE id_peserta = ?";
              $stmt = $koneksi->prepare($query);
              $stmt->bind_param("i", $id);
              $stmt->execute();
              $stmt->close();

              $query1 = "DELETE FROM peserta WHERE id_peserta = ?";
              $stmt = $koneksi->prepare($query1);
              $stmt->bind_param("i", $id);
              $stmt->execute();
              $stmt->close();

              echo "<script>alert('Berhasil Ditolak!');location='home.php?page=history';</script>";
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <table class="table table-striped">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Universitas</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $query = "SELECT * FROM pm_ranking WHERE status= 1";
            $master_pelamar = $koneksi->prepare($query);
            $master_pelamar->execute();
            $res1 = $master_pelamar->get_result();


            if ($res1->num_rows > 0) {
              while ($row = $res1->fetch_assoc()) {
                $id = $row['id_peserta'];
                $nama_pelamar = $row['nama_peserta'];
                $univ = $row['universitas'];
                $status = $row['status'];

            ?>
                <tr>
                  <td class="nomor"><?php echo $no++; ?></td>
                  <td><?php echo $nama_pelamar; ?></td>
                  <td><?php echo $univ; ?></td>
                  <td class="kotak" style="width: 20px; height: 10px; align-items: center">
                    <?php
                    if ($row['status'] == '1') {
                      echo "<form method='post'>";
                      echo "<input type='hidden' name='id' value='$id'>";
                      echo "<button type='submit' name='selesai' class='btn btn-warning btn-sm'> <i class='fa fa-trash'></i> Magang </button>";
                      echo "</form>";
                    }
                    ?>
                  </td>
                </tr>
              <?php }
            } else { ?>
              <tr>
                <td style="text-align: center;" colspan='7'>Tidak ada data yang ditemukan</td>
              </tr>
            <?php }
            if (isset($_POST['selesai'])) {
              $id = $_POST['id'];
              // Lakukan update kolom 'status'
              $query = "UPDATE pm_ranking SET status = 2 WHERE id_peserta = ?";
              $stmt = $koneksi->prepare($query);
              $stmt->bind_param("i", $id);
              $stmt->execute();
              $stmt->close();

              echo "<script>alert('Peserta Sudah Selesai Magang!');location='home.php?page=history';</script>";
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="selesai-tab-pane" role="tabpanel" aria-labelledby="selesai-tab" tabindex="0">
        <table class="table table-striped">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Universitas</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $query = "SELECT * FROM pm_ranking WHERE status= 2";
            $master_pelamar = $koneksi->prepare($query);
            $master_pelamar->execute();
            $res1 = $master_pelamar->get_result();


            if ($res1->num_rows > 0) {
              while ($row = $res1->fetch_assoc()) {
                $id = $row['id_peserta'];
                $nama_pelamar = $row['nama_peserta'];
                $univ = $row['universitas'];
                $status = $row['status'];

            ?>
                <tr>
                  <td class="nomor"><?php echo $no++; ?></td>
                  <td><?php echo $nama_pelamar; ?></td>
                  <td><?php echo $univ; ?></td>
                  <td class="kotak" style="width: 20px; height: 10px; align-items: center">
                    <?php
                    if ($row['status'] == '2') {
                      echo "<button class='btn btn-success btn-sm disabled'> <i class='fa fa-edit'></i> Selesai </button>";
                    } else {
                      echo "<button class='btn btn-warning btn-sm disabled'> <i class='fa fa-edit'></i> Belum Selesai </button>";
                    }
                    ?>
                  </td>
                </tr>
              <?php }
            } else { ?>
              <tr>
                <td style="text-align: center;" colspan='7'>Tidak ada data yang ditemukan</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>