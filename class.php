<?php
function cari_nilai($sql)
{
  $host     = "localhost";
  $username = "root";
  $password = "";
  $database = "web_pm1";
  $koneksi  = mysqli_connect($host, $username, $password, $database);

  $hasil = mysqli_query($koneksi, $sql);
  $r = mysqli_fetch_array($hasil);

  return $r["nilai"];
}
