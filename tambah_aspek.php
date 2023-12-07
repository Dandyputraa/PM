<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<div class="container" style="padding-top: 4.5rem;">
	<div class="heading" style="text-align: center;">
		<h3><strong>Tambah Data Aspek <br><br></strong></h4>
	</div>
	<form method="POST" action="tambah_aspek_action.php">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Aspek Penilaian</label>
					<input style="border: 1px solid black;" type="text" name="aspek" id="aspek" class="form-control" required="true">
				</div>
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Persentase</label>
					<input style="border: 1px solid black;" type="text" name="prosentase" id="prosentase" class="form-control" required="true">
				</div>
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Core Factor</label>
					<input style="border: 1px solid black;" type="text" name="bobot_core" id="bobot_core" class="form-control" required="true">
				</div>
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Secondary Factor</label>
					<input style="border: 1px solid black;" type="text" name="bobot_secondary" id="bobot_secondary" class="form-control" required="true">
				</div>

				<div class="form-group" style="margin-top: 2rem;">
					<button type="submit" name="simpan" id="simpan" class="btn btn-primary">
						<i class="fa fa-save"></i> Simpan
					</button>

					<button type="submit" name="simpan" id="simpan" class="btn btn-danger">
						<a href="home.php?page=aspek" style="color:white;text-decoration: none; "></i>Batal</a>
					</button>
				</div>
			</div>
		</div>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<!-- ================================== -->
	<!-- <div class="heading">
		<h2>Tambah Data Aspek</h2>
	</div>
	<form method="POST" action="tambah_aspek_action.php">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Aspek Penilaian</label>
					<input style="border: 1px solid black;" type="text" name="aspek" id="aspek" class="form-control" required="true">
				</div>
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Persentase</label>
					<input style="border: 1px solid black;" type="text" name="prosentase" id="prosentase" class="form-control" required="true">
				</div>
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Core Factor</label>
					<input style="border: 1px solid black;" type="text" name="bobot_core" id="bobot_core" class="form-control" required="true">
				</div>
				<div class="form-group">
					<label style="font-weight: bolder; font-size: 20px;">Secondary Factor</label>
					<input style="border: 1px solid black;" type="text" name="bobot_secondary" id="bobot_secondary" class="form-control" required="true">
				</div>

				<div class="form-group" style="margin-top: 2rem;">
					<button type="submit" name="simpan" id="simpan" class="btn btn-primary">
						<i class="fa fa-save"></i> Simpan
					</button>

					<button type="submit" name="simpan" id="simpan" class="btn btn-danger">
						<a href="home.php?page=aspek" style="color:white;text-decoration: none; "></i>Batal</a>
					</button>
				</div>
			</div>
		</div>
	</form>
</div> -->