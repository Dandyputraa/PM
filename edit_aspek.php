<?php
// data difilter terlebih dahulu & base64_decode berguna untuk mendeskripsi id yg sebelumnya di enkripsi/encoding
$id = stripslashes(strip_tags(htmlspecialchars(base64_decode($_GET['aa']), ENT_QUOTES)));

$query = "SELECT * FROM pm_aspek WHERE id_aspek=?";
$aspek_penilaian = $koneksi->prepare($query);
$aspek_penilaian->bind_param("i", $id);
$aspek_penilaian->execute();
$res1 = $aspek_penilaian->get_result();
while ($row = $res1->fetch_assoc()) {
	$id = $row['id_aspek'];
	$aspek = $row['aspek'];
	$prosentase = $row['prosentase'];
	$bobot_core = $row['bobot_core'];
	$bobot_secondary = $row['bobot_secondary'];
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<div class="container" style="padding-top: 4.5rem;">
	<div class="heading" style="text-align: center;">
		<h3><strong>Edit Data Aspek <br><br></strong></h4>
	</div>
	<form method="POST" action="edit_aspek_action.php">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Aspek</label>
					<input style="border: 1px solid black;" type="hidden" name="id_aspek" id="id_aspek" value="<?php echo $id; ?>">
					<input style="border: 1px solid black;" type="text" name="aspek" id="aspek" class="form-control" value="<?php echo $aspek; ?>" required="true">
				</div>
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Persentase</label>
					<input style="border: 1px solid black;" type="text" name="prosentase" id="prosentase" class="form-control" value="<?php echo $prosentase; ?>" required="true">
				</div>
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Core Factor</label>
					<input style="border: 1px solid black;" type="text" name="bobot_core" id="bobot_core" class="form-control" value="<?php echo $bobot_core; ?>" required="true">
				</div>
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Secondary Factor</label>
					<input style="border: 1px solid black;" type="text" name="bobot_secondary" id="bobot_secondary" class="form-control" value="<?php echo $bobot_secondary; ?>" required="true">
				</div>
				<div class="form-group" style="margin-top: 2rem;">
					<button type="submit" name="simpan" id="simpan" class="btn btn-primary">
						<i class="fa fa-save"></i> Simpan
					</button>
					<button type="button" name="simpan" id="simpan" class="btn btn-danger">
						<a href="home.php?page=aspek" style="color:white;text-decoration: none; "></i>Batal</a>
					</button>
				</div>
			</div>
		</div>
	</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>