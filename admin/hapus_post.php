<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil data id_atlet yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

// Query untuk menampilkan data atlet berdasarkan id_atlet yang dikirim
$query = "SELECT * FROM post WHERE id='".$id."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images

$query1 = "DELETE FROM post WHERE id='".$id."'";
$sql1 = mysqli_query($connect, $query1);
$query2 = "DELETE FROM komentar WHERE id='".$id."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location:post.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. Hapus Terlebih Dahulu Data atlet Pada Prestasi<a href='prestasi_atlet_admin.php'><br> Prestasi</a><br>";
}
?>