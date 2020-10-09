<?php
include 'header.php';
$root = $_SERVER['DOCUMENT_ROOT'];
$path = $root."/website/assets/Modul Praktikum/";

?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Modul</h4>
		</div>
		<div class="panel-body">
			
			<br/>
			<br/>

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Nama</th>
					<th>Keterangan</th>
					<th>Download</th>
					<th width="15%">Opsi</th>
				</tr>

				<?php 
				// koneksi database
				include '../koneksi.php';

				// mengambil data pelanggan dari database
				$data = mysqli_query($koneksi,"select * from modul");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['modul_nama']; ?></td>
						<td><?php echo $d['modul_keterangan']; ?></td>
						<td><a href="<?php echo "../../".$d['modul_file']; ?>"><?php echo basename($d['modul_file']); ?></a></td>
						<td>
						<form action="../upload.php" method="post" enctype="multipart/form-data">
							<input type="hidden" id="id" name="id" value="<?php echo $d['modul_id']; ?>">
							<input type="hidden" id="uploadType" name="uploadType" value="modul">

							<input type="file" class="form-control-file" id="fileToUpload" name="fileToUpload" accept="application/pdf">

							<br>
							<button type="submit" class="btn btn-md btn-info glyphicon glyphicon-upload"></button>
						</form>
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