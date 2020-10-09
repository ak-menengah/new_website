<?php
$id = $_POST['id'];
$nama = $_POST['nama'];

if(file_exists($_FILES['fileToUpload']['tmp_name']) || is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) 
{
  $root = $_SERVER['DOCUMENT_ROOT'];
  $target_dir = $root."/website/assets/img/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large. Maximum file size is 1MB";
    $uploadOk = 0;
  }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  /* ------------DO UPLOAD : START------------------------------ */
      // menghubungkan koneksi
      include '../koneksi.php';
      $filename = $_FILES["fileToUpload"]["name"];
      mysqli_query($koneksi,"update praktikum set praktikum_nama='$nama', praktikum_file='assets/img/$filename' where praktikum_id='$id'");

  /* ------------DO UPLOAD : END------------------------------ */
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  echo "<br><a href='index.php'>Back</a>";
}
else{
  /* ------------DO UPDATE : START------------------------------ */
      // menghubungkan koneksi
      include '../koneksi.php';
      mysqli_query($koneksi,"update praktikum set praktikum_nama='$nama' where praktikum_id='$id'");

      header("location:index.php");
  /* ------------DO UPDATE : END------------------------------ */
}
?>