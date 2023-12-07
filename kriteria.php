<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>
	.header {
		position: sticky;
		top: 0;
	}
</style>
<div class="container" style="padding-top: 4.5rem;">
	<div class="container-kriteria">
		<a href="home.php?page=tambah_kriteria">
			<button style="margin-bottom: 20px;" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data </button>
		</a>

		<table class="table">
			<thead style="position: sticky;top: 0" class="table-dark">
				<tr>
					<td class="header" scope="col">No</td>
					<td class="header" scope="col">Aspek</td>
					<td class="header" scope="col">Kriteria</td>
					<td class="header" scope="col">Target</td>
					<td class="header" scope="col">Type</td>
					<td class="header" scope="col">Action</td>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				$query = "SELECT * FROM pm_faktor a LEFT join pm_aspek b on a.id_aspek = b.id_aspek ORDER BY a.id_aspek ASC";
				$pm_faktor = $koneksi->prepare($query);
				$pm_faktor->execute();
				$res1 = $pm_faktor->get_result();

				if ($res1->num_rows > 0) {
					while ($row = $res1->fetch_assoc()) {
						$id = $row['id_faktor'];
						$aspek = $row['aspek'];
						$faktor = $row['faktor'];
						$target = $row['target'];
						$type = $row['type'];
				?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $aspek; ?></td>
							<td><?php echo $faktor; ?></td>
							<td><?php echo $target; ?></td>
							<td><?php echo $type; ?></td>
							<td>
								<!-- base64_encode berguna untuk enkripsi id jadi nanti akan mengubah urlnya menjadi tulisan acak -->
								<a href="home.php?page=edit_kriteria&aa=<?php echo base64_encode($id) ?>">
									<button class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> Edit </button>
								</a>
								<a href="hapus_kriteria.php?aa=<?php echo base64_encode($id) ?>" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini?')">
									<button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus </button>
								</a>
							</td>
						</tr>
					<?php }
				} else { ?>
					<tr>
						<td colspan='7' style="text-align: center;">Tidak ada data ditemukan</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>