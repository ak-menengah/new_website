<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Software</h4>
		</div>
		<div class="panel-body">

			<br/>
			<br/>

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Nama</th>
					<th>Keterangan</th>
					<th>Logo</th>
					<th>Download</th>
					<th width="15%">Opsi</th>
				</tr>

				<?php 
				// koneksi database
				include '../koneksi.php';

				// mengambil data pelanggan dari database
				$data = mysqli_query($koneksi,"select * from software");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['software_nama']; ?></td>
						<td><?php echo $d['software_keterangan']; ?></td>
						<td><img width="250px" height="100px" src="<?php echo "../../".$d['software_logo']; ?>"></td>
						<td>

						<a href="<?php echo $d['software_file']; ?>"><?php echo $d['software_file']; ?></a></td>

						<td>
							<a href="software_edit.php?id=<?php echo $d['software_id']; ?>" class="btn btn-sm btn-info">Edit</a>
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