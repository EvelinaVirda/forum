<?php
// buka koneksi dengan MySQL
  include("../koneksi.php");

  //mengecek apakah di url ada GET id
  if (isset($_GET["id"])) {

    // menyimpan variabel id dari url ke dalam variabel $id
    $id = $_GET["id"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM myanimelist WHERE id_list='$id' ";
    $hasil_query = mysqli_query($connect, $query);

   
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($connect).
           " - ".mysqli_error($connect));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:myanimelist.php");
?>