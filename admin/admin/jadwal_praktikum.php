<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Jadwal Praktikum</h4>
		</div>
		<div class="panel-body">

			<br/>
			<br/>

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Nama</th>
					<th width="15%">Opsi</th>
				</tr>

				<?php 
				// koneksi database
				include '../koneksi.php';

				// mengambil data pelanggan dari database
				$data = mysqli_query($koneksi,"select * from praktikum");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['praktikum_nama']; ?></td>
						<td>
							<a href="praktikum_edit.php?id=<?php echo $d['praktikum_id']; ?>" class="btn btn-sm btn-info">Edit</a>
						</td>
					</tr>
					<?php 
				}
				?>

			</table>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>