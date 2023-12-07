<?php

if (isset($_REQUEST['page'])) {

  $menu = $_REQUEST['page'];

  switch ($menu) {
    case 'home':
      include "home.php";
      break;
    case 'pelamar':
      include "pelamar.php";
      break;
    case 'edit_pelamar':
      include "edit_pelamar.php";
      break;
    case 'aspek':
      include "aspek.php";
      break;
    case 'tambah_aspek':
      include "tambah_aspek.php";
      break;
    case 'edit_aspek':
      include "edit_aspek.php";
      break;
    case 'kriteria':
      include "kriteria.php";
      break;
    case 'edit_kriteria':
      include "edit_kriteria.php";
      break;
    case 'tambah_kriteria':
      include "tambah_kriteria.php";
      break;
    case 'perhitungan':
      include "perhitungan.php";
      break;
    case 'hasil':
      include "hasil.php";
      break;
    case 'history':
      include "history.php";
      break;
    case 'profile':
      include "profile.php";
      break;
    case 'perhitungan':
      include "perhitungan.php";
      break;
    case 'history':
      include "history.php";
      break;
    case 'gantipassword':
      include "gantipassword.php";
      break;
  }
} else {
?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <body>
    <div class="dash-content">
      <div class="overview">
        <div class="title">
          <i class="uil uil-tachometer-fast-alt"></i>
          <span class="text">Dashboard</span>
        </div>
        <div class="boxes">
          <div class="box box1">
            <i class="uil uil-user"></i>
            <span class="text">Total User</span>
            <?php
            include "koneksi.php";
            $query = "SELECT COUNT(*) as count FROM user";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result);
            $count = $row["count"];
            $formatted_count = number_format($count);
            echo '<span class="number">' . $formatted_count . '</span>';
            ?>
          </div>
          <div class="box box2">
            <i class="uil uil-user"></i>
            <span class="text">Total Pendaftar</span>
            <?php
            include "koneksi.php";
            $query = "SELECT COUNT(*) as count FROM peserta";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result);
            $count = $row["count"];
            $formatted_count = number_format($count);
            echo '<span class="number">' . $formatted_count . '</span>';
            ?>
          </div>
          <div class="box box3">
            <i class="uil uil-user"></i>
            <span class="text">Sedang Magang</span>
            <?php
            include "koneksi.php";
            $query = "SELECT COUNT(*) as count FROM pm_ranking WHERE status = 1";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result);
            $count = $row["count"];
            $formatted_count = number_format($count);
            echo '<span class="number">' . $formatted_count . '</span>';
            ?>
          </div>
          <div style="margin-top: 1.5rem; background-color: #D4E2D4;" class="box box3">
            <i class="uil uil-user"></i>
            <span class="text">Selesai Magang</span>
            <?php
            include "koneksi.php";
            $query = "SELECT COUNT(*) as count FROM pm_ranking WHERE status = 2";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result);
            $count = $row["count"];
            $formatted_count = number_format($count);
            echo '<span class="number">' . $formatted_count . '</span>';
            ?>
          </div>
        </div>
      </div>
      <div class="activity">
        <div class="title">
          <i class="uil uil-clock-three"></i>
          <span class="text">Recent Activity</span>
        </div>
        <table class="table" style="text-align: center;">
          <thead style="position: sticky;top: 0" class="table-dark">
            <tr>
              <td class="header" scope="col">No</td>
              <td class="header" scope="col">Berkas</td>
              <td class="header" scope="col">Nama Peserta</td>
              <td class="header" scope="col">No Handphone</td>
              <td class="header" scope="col">Email</td>
              <td class="header" scope="col">Universitas</td>
              <td class="header" scope="col">Action</td>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $query = "SELECT * FROM peserta ORDER BY id_peserta ASC";
            $master_pelamar = $koneksi->prepare($query);
            $master_pelamar->execute();
            $res1 = $master_pelamar->get_result();


            if ($res1->num_rows > 0) {
              while ($row = $res1->fetch_assoc()) {
                $id = $row['id_peserta'];
                $berkas = $row['berkas'];
                $nama_pelamar = $row['nama_peserta'];
                $no_hp = $row['tlp'];
                $email = $row['email'];
                $univ = $row['universitas'];
            ?>
                <tr>
                  <td class="nomor"><?php echo $no++; ?></td>
                  <td><a href="view-pdf.php?id_peserta=<?php echo $row['id_peserta'] ?>" target="_blank" class="btn btn-primary" tittle="lihat berkas">
                      <img src="images/file.png" width="30px" height="30px"></a></td>
                  <td><?php echo $nama_pelamar; ?></td>
                  <td class="hp"><?php echo $no_hp; ?></td>
                  <td><?php echo $email; ?></td>
                  <td><?php echo $univ; ?></td>
                  <td class="kotak">
                    <!-- base64_encode berguna untuk enkripsi id jadi nanti akan mengubah urlnya menjadi tulisan acak -->
                    <a href="home.php?page=edit_pelamar&aa=<?php echo base64_encode($id) ?>">
                      <button class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> Edit </button>
                    </a>
                    <a href="hapus_pelamar.php?aa=<?php echo base64_encode($id) ?>" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                      <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus </button>
                    </a>
                  </td>
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
    </div>
  </body>

  <script src="js/admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<?php
}
?>