<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

// mengecek apakah tombol input dari form telah diklik
$id = $_GET['id'];

  // membuat variabel untuk menampung data dari form
  $judul = $_POST['judul'];
  $status = $_POST['status'];
  $score = $_POST['score'];
  $proses = $_POST['proses'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "UPDATE myanimelist SET judul='".$judul."', status='".$status."', score='".$score."', proses='".$proses."' WHERE id_list='".$id."'";
  $result = mysqli_query($connect, $query);
  // periska query apakah ada error
  

 header("location:myanimelist.php");
 ?>