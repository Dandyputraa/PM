<div class="container">
	<style>
		.container {
			width: 100%;
			height: 100vh;
			/* display: flex; */
			/* justify-content: center;
      align-items: center; */
			/* border: 1px solid black; */
		}

		.header {
			position: sticky;
			top: 0;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<div class="container" style="padding-top: 4rem;">
		<!-- start buka/tutup pendaftaran -->
		<div class="text-center">
			<div style="background-color: #198754; color:white;" id="countdown"></div>
			<h4></h4>
			<hr>
			<h4 class="mt-3">Ubah waktu</h4>
			<form action="countdown.php" method="POST" class="col-4 mx-auto">
				<div class="form-group">
					<input type="date" name="tgl" id="tanggal" class="form-control">
				</div>
				<br><button type="submit" name="ubah" class="btn btn-primary btn-block">Ubah</button>
			</form>
		</div>

		<?php
		include "koneksi.php";
		$query = mysqli_query($koneksi, "SELECT * FROM countdown");
		$data = mysqli_fetch_array($query);
		$tgl = $data['tanggal'];
		$tgl = date("Y-m-d", strtotime($tgl));
		?>
		<!-- end buka/tutup pendaftaran-->

		<hr>

		<table class="table" style="text-align: center;">
			<thead style="position: sticky;top: 0" class="table-dark">
				<tr>
					<td class="header" scope="col">No</td>
					<!-- <td class="header" scope="col">Berkas</td> -->
					<td class="header" scope="col">Nama Peserta</td>
					<td class="header" scope="col">Tlp</td>
					<td class="header" scope="col">Email</td>
					<td class="header" scope="col">Universitas/Sekolah</td>
					<td class="header" scope="col">Status</td>
					<td class="header" scope="col">Aksi</td>
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
						$tlp = $row['tlp'];
						$email = $row['email'];
						$univ = $row['universitas'];
						$status = $row['status'];

				?>
						<tr>
							<td class="nomor" style="font-weight: bolder;"><?php echo $no++; ?></td>
							<!-- <td><a href="view-pdf.php?id_peserta=<?php echo $row['id_peserta'] ?>" target="_blank" class="btn btn-primary" tittle="lihat berkas">
									<img src="images/file.png" width="30px" height="30px"></a></td> -->
							<td><?php echo $nama_pelamar; ?></td>
							<td class="hp"><?php echo $tlp; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $univ; ?></td>
							<td class="kotak">
								<?php
								if ($row['status'] == '0') {
									// echo "<div class='alert alert-info' role='alert'>Proses</div>";
									echo "<button class='btn btn-info btn-sm disabled'> <i class='fa fa-edit'></i> Proses </button>";
								} else {
									// echo "<div class='alert alert-warning' role='alert'>Terdaftar</div>";
									echo "<button class='btn btn-warning btn-sm disabled'> <i class='fa fa-edit'></i> Proses </button>";
								}
								?>
							</td>
							<td>
								<a href="home.php?page=edit_pelamar&aa=<?php echo base64_encode($id) ?>">
									<button class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> Edit </button>
								</a>
								<a href="hapus_pelamar.php?aa=<?php echo base64_encode($id) ?>" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini?')">
									<button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus </button>
								</a>
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
	<script type="text/javascript">
		var target = new Date("<?= $tgl ?>").getTime();

		var hari, jam, menit, detik;

		var countdown = document.getElementById("countdown");

		setInterval(function() {
			var sekarang = new Date().getTime();
			var sisa = (target - sekarang) / 1000;

			if (sisa <= 0) {
				countdown.innerHTML = "<h4 style='background-color: #198754; color: white'>Pendaftaran sudah ditutup</h4>";
			} else {
				hari = parseInt(sisa / 86400);
				sisa = sisa % 86400;
				jam = parseInt(sisa / 3600);
				sisa = sisa % 3600;
				menit = parseInt(sisa / 60);
				detik = parseInt(sisa % 60);

				countdown.innerHTML = "<h6 class='d-inline'>" + hari + " hari </h6><h6 class='d-inline'>" + jam + " jam </h6><h6 class='d-inline'>" + menit + " menit </h6><h6 class='d-inline mt-5'>" + detik + " detik</h6>";
			}
		}, 1000);

		var target = new Date("<?= $tgl ?>").getTime();
		localStorage.setItem("targetTime", target);
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</div>