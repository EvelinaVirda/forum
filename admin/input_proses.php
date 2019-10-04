 <?php
include "../koneksi.php";
if($_POST){
 	$j = $_POST['judul'];
	$g = $_POST['genre'];
	$e = $_POST['episode'];	
	$i = $_POST['isi'];	
	$gambar   = $_FILES['images']['name'];
 
 if(!empty($_FILES['images']['tmp_name'])){
  move_uploaded_file($_FILES['images']['tmp_name'],'img/'.$_FILES['images']['name']);

   mysqli_query($connect, "INSERT INTO anime_list VALUES(NULL,'$j', '$g', '$e','$gambar', '$i')") or die(mysqli_error());
  
 } else {
 mysqli_query($connect, "INSERT into post(penulis, kategori, judul, isi)
  values('$j', '$g', '$e', '$i')");
 }
 header('location:buat_trit.php');
 exit;
}

?>