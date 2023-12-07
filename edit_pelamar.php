<?php
$id = stripslashes(strip_tags(htmlspecialchars(base64_decode($_GET['aa']), ENT_QUOTES)));

$query = "SELECT * FROM peserta WHERE id_peserta=?";
$pelamar = $koneksi->prepare($query);
$pelamar->bind_param("i", $id);
$pelamar->execute();
$res1 = $pelamar->get_result();
while ($row = $res1->fetch_assoc()) {
	$id = $row['id_peserta'];
	$nama_pelamar = $row['nama_peserta'];
	$no_hp = $row['tlp'];
	$email = $row['email'];
	$univ = $row['universitas'];
	$berkas = $row['berkas'];
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="container" style="padding-top: 4.5rem;">
	<div class="heading" style="text-align: center;">
		<h3><strong>Edit Data Peserta <br><br></strong></h4>
	</div>
	<form method="POST" action="edit_pelamar_action.php">
		<div class="col-sm-6 offset-sm-3">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Nama Peserta</label>
				<input style="border: 1px solid black;" type="hidden" name="id_peserta" id="id_peserta" value="<?php echo $id; ?>">
				<input style="border: 1px solid black;" type="text" name="nama_peserta" id="nama_peserta" class="form-control" value="<?php echo $nama_pelamar; ?>" required="true">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Telepon</label>
				<input style="border: 1px solid black;" type="text" name="tlp" id="tlp" class="form-control" value="<?php echo $no_hp; ?>" required="true">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Email</label>
				<input style="border: 1px solid black;" type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>" required="true">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Universitas</label>
				<input style="border: 1px solid black;" type="text" name="univ" id="univ" class="form-control" value="<?php echo $univ; ?>" required="true">
			</div>
			<div class="mb-3 form-check">
				<button type="submit" name="simpan" id="simpan" class="btn btn-primary">Simpan</button>
				<button type="submit" name="batal" id="batal" class="btn btn-danger">Batal</button>
			</div>
	</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>