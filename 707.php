<?php

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
  }
}
