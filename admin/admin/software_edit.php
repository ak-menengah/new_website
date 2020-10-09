<?php include 'header.php'; ?>

<div class="container">	
	<br/>
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Software</h4>
			</div>
			<div class="panel-body">

				<?php 
				// menghubungkan koneksi
				include '../koneksi.php';

				// menangkap id yang dikirim melalui url
				$id = $_GET['id'];

				// megambil data praktikum yang ber id di atas dari tabel praktikum
				$data = mysqli_query($koneksi,"select * from software where software_id='$id'");
				while($d=mysqli_fetch_array($data)){
					?>

					<form method="post" action="software_update.php" enctype="multipart/form-data">
						<div class="form-group">
							<label>Nama</label>
							<!-- form id praktikum yang di edit, untuk di kirim ke file aksi -->
							<input type="hidden" name="id" value="<?php echo $d['software_id']; ?>">
							
							<input type="text" class="form-control" name="nama" placeholder="Masukkan nama .." value="<?php echo $d['software_nama']; ?>" required>
						</div>

						<div class="form-group">
							<label>Link Download</label>
							<input type="url" class="form-control" name="link_download" placeholder="Masukkan link download .." value="<?php echo $d['software_file']; ?>" required>
						</div>	

						<div class="form-group">
							<label>Keterangan</label>
							<textarea class="form-control" rows="15" name="keterangan" placeholder="Masukkan keterangan .."><?php echo $d['software_keterangan']; ?></textarea>
						</div>

						<div class="form-group">
							<label>Logo</label>
							<input type="file" class="form-control-file" id="fileToUpload" name="fileToUpload" accept="image/jpeg,image/gif,image/x-png">
						</div>

						<br/>

						<input type="submit" class="btn btn-primary" value="Simpan">	
					</form>

					<?php 
				}
				?>
			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>