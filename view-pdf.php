<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-size: 12px;
    }
  </style>
</head>

<body>
  <?php
  $id = mysqli_real_escape_string($koneksi, $_GET['id_peserta']);
  $sql = "SELECT * FROM peserta WHERE id_peserta='$id'";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_array($query);
  ?>

  <table>
    <tr>
      <td><strong>Nama : <?php echo $data['nama_peserta']; ?> </strong></td>
    </tr>
    <tr>
      <td><strong>Berkas : <?php echo $data['berkas']; ?> </strong></td>
    </tr>
  </table>
  <hr>
  <embed type="application/pdf" src="file/<?php echo $data['berkas']; ?>" width="100%" height="600"></embed>
</body>

</html>