<?php

if (isset($_REQUEST['Simpan_kecerdasan'])) {

  $sql_truncate = mysqli_query($koneksi, "DELETE FROM pm_sample where id_faktor in(1,2,3,4)");
  $queryloop = "SELECT * FROM peserta";
  $sql_loop = mysqli_query($koneksi, $queryloop);
  if (mysqli_num_rows($sql_loop) > 0) {
    while ($row_loop = mysqli_fetch_array($sql_loop)) {
      $a1 = array(array($row_loop['id_peserta'], 1, $_REQUEST[$row_loop['id_peserta'] . '_A1']));
      $a2 = array(array($row_loop['id_peserta'], 2, $_REQUEST[$row_loop['id_peserta'] . '_A2']));
      $a3 = array(array($row_loop['id_peserta'], 3, $_REQUEST[$row_loop['id_peserta'] . '_A3']));
      $a4 = array(array($row_loop['id_peserta'], 4, $_REQUEST[$row_loop['id_peserta'] . '_A4']));

      $sqla1 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a1[0][0] . "', '" . $a1[0][1] . "', '" . $a1[0][2] . "')");
      $sqla2 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a2[0][0] . "', '" . $a2[0][1] . "', '" . $a2[0][2] . "')");
      $sqla3 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a3[0][0] . "', '" . $a3[0][1] . "', '" . $a3[0][2] . "')");
      $sqla4 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a4[0][0] . "', '" . $a4[0][1] . "', '" . $a4[0][2] . "')");

      echo "<script>alert('Proses Profile Matching Tersimpan');location='home.php?page=profile';</script>";
    }
  }
}

if (isset($_REQUEST['Simpan_wawancara'])) {

  $sql_truncate = mysqli_query($koneksi, "DELETE FROM pm_sample where id_faktor in(5,6,7,8)");
  $queryloop = "SELECT * FROM peserta";
  $sql_loop = mysqli_query($koneksi, $queryloop);
  if (mysqli_num_rows($sql_loop) > 0) {
    while ($row_loop = mysqli_fetch_array($sql_loop)) {
      $a5 = array(array($row_loop['id_peserta'], 5, $_REQUEST[$row_loop['id_peserta'] . '_A5']));
      $a6 = array(array($row_loop['id_peserta'], 6, $_REQUEST[$row_loop['id_peserta'] . '_A6']));
      $a7 = array(array($row_loop['id_peserta'], 7, $_REQUEST[$row_loop['id_peserta'] . '_A7']));
      $a8 = array(array($row_loop['id_peserta'], 8, $_REQUEST[$row_loop['id_peserta'] . '_A8']));

      $sqla1 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a5[0][0] . "', '" . $a5[0][1] . "', '" . $a5[0][2] . "')");
      $sqla2 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a6[0][0] . "', '" . $a6[0][1] . "', '" . $a6[0][2] . "')");
      $sqla3 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a7[0][0] . "', '" . $a7[0][1] . "', '" . $a7[0][2] . "')");
      $sqla4 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a8[0][0] . "', '" . $a8[0][1] . "', '" . $a8[0][2] . "')");
      echo "<script>alert('Proses Profile Matching Tersimpan');location='home.php?page=profile';</script>";
    }
  }
}

if (isset($_REQUEST['Simpan_sikapkerja'])) {

  $sql_truncate = mysqli_query($koneksi, "DELETE FROM pm_sample where id_faktor in(9,10,11,12)");
  $queryloop = "SELECT * FROM peserta";
  $sql_loop = mysqli_query($koneksi, $queryloop);
  if (mysqli_num_rows($sql_loop) > 0) {
    while ($row_loop = mysqli_fetch_array($sql_loop)) {
      $a9  = array(array($row_loop['id_peserta'],  9, $_REQUEST[$row_loop['id_peserta'] . '_A9']));
      $a10 = array(array($row_loop['id_peserta'], 10, $_REQUEST[$row_loop['id_peserta'] . '_A10']));
      $a11 = array(array($row_loop['id_peserta'], 11, $_REQUEST[$row_loop['id_peserta'] . '_A11']));
      $a12 = array(array($row_loop['id_peserta'], 12, $_REQUEST[$row_loop['id_peserta'] . '_A12']));

      $sqla1 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a9[0][0] . "', '" . $a9[0][1] . "', '" . $a9[0][2] . "')");
      $sqla2 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a10[0][0] . "', '" . $a10[0][1] . "', '" . $a10[0][2] . "')");
      $sqla3 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a11[0][0] . "', '" . $a11[0][1] . "', '" . $a11[0][2] . "')");
      $sqla4 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_peserta, id_faktor, value) VALUES('', '" . $a12[0][0] . "', '" . $a12[0][1] . "', '" . $a12[0][2] . "')");

      echo "<script>alert('Proses Profile Matching Tersimpan');location='home.php?page=profile';</script>";
    }
  }
}


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<div class="container" style="padding-top: 4rem;">
  <form class="form-kecerdasan" method="post" action="" role="form">
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="font-weight: bold;">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Kecerdasan</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Jurusan</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Domisili</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="hasil-tab" data-bs-toggle="tab" data-bs-target="#hasil-tab-pane" type="button" role="tab" aria-controls="hasil-tab-pane" aria-selected="false">Hasil</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <table class="table table-striped">
          <thead class="table-dark">
            <tr>
              <th>Berkas</th>
              <th>Nama Peserta</th>
              <th>A1 - Coding</th>
              <th>A2 - Kreatif</th>
              <th>A3 - Logika</th>
              <th>A4 - Inovatif</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT mp.id_peserta,mp.nama_peserta,pm.A1,pm.A2,pm.A3,pm.A4 FROM peserta mp left JOIN (SELECT * FROM( select id_peserta,sum( if(id_faktor=1,value,0) ) as 'A1',sum( if(id_faktor=2,value,0) ) as 'A2',sum( if(id_faktor=3,value,0) ) as 'A3',sum( if(id_faktor=4,value,0) ) as 'A4' from pm_sample group by id_peserta)tbl) pm on mp.id_peserta =pm.id_peserta";
            //$query ="select * from master_pelamar";
            $sql = mysqli_query($koneksi, $query);
            if (mysqli_num_rows($sql) > 0) {
              while ($row = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                  <td><a href="view-pdf.php?id_peserta=<?php echo $row['id_peserta'] ?>" target="_blank" class="btn btn-primary" tittle="lihat berkas">
                      <img src="images/file.png" width="30px" height="30px"></a></td>
                  <td><?php echo $row['nama_peserta']; ?></td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A1">
                      <option value="1" <?php echo $row['A1'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A1'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A1'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A1'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>

                  </td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A2">
                      <option value="1" <?php echo $row['A2'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A2'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A2'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A2'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>
                  </td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A3">
                      <option value="1" <?php echo $row['A3'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A3'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A3'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A3'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>
                  </td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A4">
                      <option value="1" <?php echo $row['A4'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A4'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A4'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A4'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
        <button class="btn btn-success" type="submit" id="Simpan_kecerdasan" name="Simpan_kecerdasan">Simpan</button>

      </div>
      <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>Berkas</th>
              <th>Nama Peserta</th>
              <th>A5 - TI</th>
              <th>A6 - SI</th>
              <th>A7 - DKV</th>
              <th>A8 - ILKOM</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT mp.id_peserta,mp.nama_peserta,pm.A5,pm.A6,pm.A7,pm.A8 FROM peserta mp left JOIN (SELECT * FROM( select id_peserta,sum( if(id_faktor=5,value,0) ) as 'A5',sum( if(id_faktor=6,value,0) ) as 'A6',sum( if(id_faktor=7,value,0) ) as 'A7',sum( if(id_faktor=8,value,0) ) as 'A8' from pm_sample group by id_peserta)tbl) pm on mp.id_peserta =pm.id_peserta";
            //$query ="select * from master_pelamar";
            $sql = mysqli_query($koneksi, $query);
            if (mysqli_num_rows($sql) > 0) {
              while ($row = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                  <td><a href="view-pdf.php?id_peserta=<?php echo $row['id_peserta'] ?>" target="_blank" class="btn btn-primary" tittle="lihat berkas">
                      <img src="images/file.png" width="30px" height="30px"></a></td>
                  <td><?php echo $row['nama_peserta']; ?></td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A5">
                      <option value="1" <?php echo $row['A5'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A5'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A5'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A5'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>

                  </td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A6">
                      <option value="1" <?php echo $row['A6'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A6'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A6'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A6'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>
                  </td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A7">
                      <option value="1" <?php echo $row['A7'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A7'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A7'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A7'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>
                  </td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A8">
                      <option value="1" <?php echo $row['A8'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A8'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A8'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A8'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
        <button class="btn btn-success" type="submit" id="Simpan_wawancara" name="Simpan_wawancara">Simpan</button>
      </div>
      <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>Berkas</th>
              <th>Nama Peserta</th>
              <th>A9 - Kota</th>
              <th>A10 - Kabupaten</th>
              <th>A11 - Kecamatan</th>
              <th>A12 - Jarak Tempuh</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT mp.id_peserta,mp.nama_peserta,pm.A9,pm.A10,pm.A11,pm.A12 FROM peserta mp left JOIN (SELECT * FROM( select id_peserta,sum( if(id_faktor=9,value,0) ) as 'A9',sum( if(id_faktor=10,value,0) ) as 'A10',sum( if(id_faktor=11,value,0) ) as 'A11',sum( if(id_faktor=12,value,0) ) as 'A12' from pm_sample group by id_peserta)tbl) pm on mp.id_peserta =pm.id_peserta";
            //$query ="select * from master_pelamar";
            $sql = mysqli_query($koneksi, $query);
            if (mysqli_num_rows($sql) > 0) {
              while ($row = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                  <td><a href="view-pdf.php?id_peserta=<?php echo $row['id_peserta'] ?>" target="_blank" class="btn btn-primary" tittle="lihat berkas">
                      <img src="images/file.png" width="30px" height="30px"></a></td>
                  <td><?php echo $row['nama_peserta']; ?></td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A9">
                      <option value="1" <?php echo $row['A9'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A9'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A9'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A9'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>

                  </td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A10">
                      <option value="1" <?php echo $row['A10'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A10'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A10'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A10'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>
                  </td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A11">
                      <option value="1" <?php echo $row['A11'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A11'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A11'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A11'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>
                  </td>
                  <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_peserta'] ?>_A12">
                      <option value="1" <?php echo $row['A12'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                      <option value="2" <?php echo $row['A12'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                      <option value="3" <?php echo $row['A12'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                      <option value="4" <?php echo $row['A12'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                    </select>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
        <button class="btn btn-success" type="submit" id="Simpan_sikapkerja" name="Simpan_sikapkerja">Simpan</button>

      </div>
      <div class="tab-pane fade" id="hasil-tab-pane" role="tabpanel" aria-labelledby="hasil-tab" tabindex="0">
        <div class="header" style="background-color: black; color: white; text-align: center">
          <strong>
            <h4>Hasil Perankingan</h4>
          </strong>
        </div>
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr style="font-weight: bold; text-align: center;">
                <td></td>
                <td>Persentase</td>
                <td><?php echo cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=1"); ?>%</td>
                <td><?php echo cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=2"); ?>%</td>
                <td><?php echo cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=3"); ?>%</td>
              </tr>
              <tr style="font-weight: bold; color: blue;">
                <th style="text-align: center;">No</th>
                <th>Nama</th>
                <th style="text-align: center;">Kecerdasan</th>
                <th style="text-align: center;">Jurusan</th>
                <th style="text-align: center;">Domisli</th>
                <th style="text-align: center;">Total</th>
                <th style="text-align: center;">Rank</th>
              </tr>
              <?php
              $no = 1;
              $query = "SELECT mp.universitas,mp.id_peserta,mp.nama_peserta,pm.A1,pm.A2,pm.A3,pm.A4,pm.A5,pm.A6,pm.A7,pm.A8,pm.A9,pm.A10,pm.A11,pm.A12 FROM peserta mp left JOIN (SELECT * FROM( select id_peserta,sum( if(id_faktor=1,value,0) ) as 'A1',sum( if(id_faktor=2,value,0) ) as 'A2',sum( if(id_faktor=3,value,0) ) as 'A3',sum( if(id_faktor=4,value,0) ) as 'A4',sum( if(id_faktor=5,value,0) ) as 'A5',sum( if(id_faktor=6,value,0) ) as 'A6',sum( if(id_faktor=7,value,0) ) as 'A7',sum( if(id_faktor=8,value,0) ) as 'A8',sum( if(id_faktor=9,value,0) ) as 'A9',sum( if(id_faktor=10,value,0) ) as 'A10',sum( if(id_faktor=11,value,0) ) as 'A11',sum( if(id_faktor=12,value,0) ) as 'A12' from pm_sample group by id_peserta)tbl) pm on mp.id_peserta =pm.id_peserta";
              $query1 = "SELECT * FROM peserta";
              $sql = mysqli_query($koneksi, $query);
              $value1 = cari_nilai("select target as nilai from pm_faktor where id_faktor=1");
              $value2 = cari_nilai("select target as nilai from pm_faktor where id_faktor=2");
              $value3 = cari_nilai("select target as nilai from pm_faktor where id_faktor=3");
              $value4 = cari_nilai("select target as nilai from pm_faktor where id_faktor=4");
              $value5 = cari_nilai("select target as nilai from pm_faktor where id_faktor=5");
              $value6 = cari_nilai("select target as nilai from pm_faktor where id_faktor=6");
              $value7 = cari_nilai("select target as nilai from pm_faktor where id_faktor=7");
              $value8 = cari_nilai("select target as nilai from pm_faktor where id_faktor=8");
              $value9 = cari_nilai("select target as nilai from pm_faktor where id_faktor=9");
              $value10 = cari_nilai("select target as nilai from pm_faktor where id_faktor=10");
              $value11 = cari_nilai("select target as nilai from pm_faktor where id_faktor=11");
              $value12 = cari_nilai("select target as nilai from pm_faktor where id_faktor=12");
              $persen_1 = cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=1");
              $persen_2 = cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=2");
              $persen_3 = cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=3");


              if (mysqli_num_rows($sql) > 0) {
                while ($row = mysqli_fetch_array($sql)) {

                  $terbobot1 = array();
                  $terbobot2 = array();
                  $terbobot3 = array();
                  $terbobot_total = array();

                  $id = $row['id_peserta'];
                  $nama_pelamar = $row['nama_peserta'];
                  // $status = $row['status'];
                  $status = $row['universitas'];

                  $bobot1 = $row['A1'] - $value1;
                  $query1 = "select * from pm_bobot where selisih = " . $bobot1 . "";
                  $sql1 = mysqli_query($koneksi, $query1);
                  $row1 = mysqli_fetch_array($sql1);

                  $bobot2 = $row['A2'] - $value2;
                  $query2 = "select * from pm_bobot where selisih = " . $bobot2 . "";
                  $sql2 = mysqli_query($koneksi, $query2);
                  $row2 = mysqli_fetch_array($sql2);

                  $bobot3 = $row['A3'] - $value3;
                  $query3 = "select * from pm_bobot where selisih = " . $bobot3 . "";
                  $sql3 = mysqli_query($koneksi, $query3);
                  $row3 = mysqli_fetch_array($sql3);

                  $bobot4 = $row['A4'] - $value4;
                  $query4 = "select * from pm_bobot where selisih = " . $bobot4 . "";
                  $sql4 = mysqli_query($koneksi, $query4);
                  $row4 = mysqli_fetch_array($sql4);

                  $bobot5 = $row['A5'] - $value5;
                  $query5 = "select * from pm_bobot where selisih = " . $bobot5 . "";
                  $sql5 = mysqli_query($koneksi, $query5);
                  $row5 = mysqli_fetch_array($sql5);

                  $bobot6 = $row['A6'] - $value6;
                  $query6 = "select * from pm_bobot where selisih = " . $bobot6 . "";
                  $sql6 = mysqli_query($koneksi, $query6);
                  $row6 = mysqli_fetch_array($sql6);

                  $bobot7 = $row['A7'] - $value7;
                  $query7 = "select * from pm_bobot where selisih = " . $bobot7 . "";
                  $sql7 = mysqli_query($koneksi, $query7);
                  $row7 = mysqli_fetch_array($sql7);


                  $bobot8 = $row['A8'] - $value8;
                  $query8 = "select * from pm_bobot where selisih = " . $bobot8 . "";
                  $sql8 = mysqli_query($koneksi, $query8);
                  $row8 = mysqli_fetch_array($sql8);

                  $bobot9 = $row['A9'] - $value9;
                  $query9 = "select * from pm_bobot where selisih = " . $bobot9 . "";
                  $sql9 = mysqli_query($koneksi, $query9);
                  $row9 = mysqli_fetch_array($sql9);

                  $bobot10 = $row['A10'] - $value10;
                  $query10 = "select * from pm_bobot where selisih = " . $bobot10 . "";
                  $sql10 = mysqli_query($koneksi, $query10);
                  $row10 = mysqli_fetch_array($sql10);

                  $bobot11 = $row['A11'] - $value11;
                  $query11 = "select * from pm_bobot where selisih = " . $bobot11 . "";
                  $sql11 = mysqli_query($koneksi, $query11);
                  $row11 = mysqli_fetch_array($sql11);

                  $bobot12 = $row['A12'] - $value12;
                  $query12 = "select * from pm_bobot where selisih = " . $bobot12 . "";
                  $sql12 = mysqli_query($koneksi, $query12);
                  $row12 = mysqli_fetch_array($sql12);

                  $core_persen_1 = cari_nilai("select bobot_core as nilai from pm_aspek where id_aspek=1");
                  $secondary_persen_1 = cari_nilai("select bobot_secondary as nilai from pm_aspek where id_aspek=1");
                  $core_persen_2 = cari_nilai("select bobot_core as nilai from pm_aspek where id_aspek=2");
                  $secondary_persen_2 = cari_nilai("select bobot_secondary as nilai from pm_aspek where id_aspek=2");
                  $core_persen_3 = cari_nilai("select bobot_core as nilai from pm_aspek where id_aspek=3");
                  $secondary_persen_3 = cari_nilai("select bobot_secondary as nilai from pm_aspek where id_aspek=3");

              ?>

                  <tr>
                    <td style="font-weight: bolder; text-align: center"><?php echo $no++; ?></td>
                    <td><?php echo $row['nama_peserta']; ?></td>
                    <td style="text-align: center;">
                      <?php echo $terbobot1[$row['id_peserta']] = ($core_persen_1 * (($row1['bobot'] + $row3['bobot']) / 2) / 100) + ($secondary_persen_1 * (($row2['bobot'] + $row4['bobot']) / 2) / 100) ?>
                    </td>
                    <td style="text-align: center;">
                      <?php echo $terbobot2[$row['id_peserta']] = ($core_persen_2 * (($row5['bobot'] + $row7['bobot']) / 2) / 100) + ($secondary_persen_2 * (($row6['bobot'] + $row8['bobot']) / 2) / 100) ?>
                    </td>
                    <td style="text-align: center;">
                      <?php echo $terbobot3[$row['id_peserta']] = ($core_persen_3 * (($row9['bobot'] + $row10['bobot']) / 2) / 100) + ($secondary_persen_3 * (($row11['bobot'] + $row12['bobot']) / 2) / 100) ?>
                    </td>
                    <td style="text-align: center;">
                      <?php echo $terbobot_total[$row['id_peserta']] = ($persen_1 * (($core_persen_1 * (($row1['bobot'] + $row3['bobot']) / 2) / 100) + ($secondary_persen_1 * (($row2['bobot'] + $row4['bobot']) / 2) / 100)) / 100) + ($persen_2 * (($core_persen_2 * (($row5['bobot'] + $row7['bobot']) / 2) / 100) + ($secondary_persen_2 * (($row6['bobot'] + $row8['bobot']) / 2) / 100)) / 100) + ($persen_3 * (($core_persen_3 * (($row9['bobot'] + $row10['bobot']) / 2) / 100) + ($secondary_persen_3 * (($row11['bobot'] + $row12['bobot']) / 2) / 100)) / 100) ?>
                    </td>
                    <td class="text-primary" style="text-align: center; font-weight: bolder">
                      <?php
                      echo cari_nilai("select rank as nilai from(SELECT id_peserta, nilai_akhir, @curRank := @curRank + 1 AS rank FROM pm_ranking p, (SELECT @curRank := 0) r ORDER BY nilai_akhir desc) tbl where id_peserta =" . $row['id_peserta'] . "");
                      ?>
                    </td>
                  </tr>

              <?php
                  mysqli_query($koneksi, "DELETE FROM pm_ranking where id_peserta = " . $row['id_peserta'] . "");
                  mysqli_query($koneksi, "INSERT INTO pm_ranking(id_peserta, nama_peserta, universitas, nilai_akhir) VALUES('" . $row['id_peserta'] . "', '" . $row['nama_peserta'] . "', '" . $row['universitas'] . "', '" . $terbobot_total[$row['id_peserta']] . "')");
                  // mysqli_query($koneksi, "INSERT INTO terima(id_peserta, nama_peserta, universitas, nilai_akhir) VALUES('" . $row['id_peserta'] . "', '" . $row['nama_peserta'] . "', '" . $row['universitas'] . "', '" . $terbobot_total[$row['id_peserta']] . "')");

                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>