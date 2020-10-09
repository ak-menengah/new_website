<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Format Laboratorium</h4>
		</div>
		<div class="panel-body">


<form action="../upload.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload File</label>

	<input type="hidden" id="uploadType" name="uploadType" value="format_laboratorium">
    <input type="file" class="form-control-file" id="fileToUpload" name="fileToUpload" accept="image/jpeg,image/gif,image/x-png">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

		</div>
	</div>
</div>

<?php include 'footer.php'; ?>