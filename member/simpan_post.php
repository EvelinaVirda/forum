 <?php
include "../koneksi.php";
if($_POST){
 	$p = $_POST['penulis'];
	$k = $_POST['kategori'];
	$j = $_POST['judul'];	
	$i = $_POST['isi'];	
	$gambar   = $_FILES['images']['name'];
 
 if(!empty($_FILES['images']['tmp_name'])){
  move_uploaded_file($_FILES['images']['tmp_name'],'img/'.$_FILES['images']['name']);

   mysqli_query($connect, "INSERT INTO post VALUES(NULL,'$p', '$k', '$j','$gambar', '$i', not null)") or die(mysqli_error());
  
 } else {
 mysqli_query($connect, "INSERT into post(penulis, kategori, judul, isi)
  values('$p', '$k', '$j', '$i')");
 }
 header('location:index.php');
 exit;
}

?>