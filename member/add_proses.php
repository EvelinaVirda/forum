<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('../koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$n = $_POST['judul'];	//membuat variabel $nis dan datanya dari inputan NIS
	$e = $_POST['status'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$t = $_POST['score'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$p = $_POST['proses'];
	$g = $_POST['gambar'];	
	$username = $_POST['username'];
	
$input = mysqli_query($connect,"INSERT INTO myanimelist VALUES(NULL, '$n', '$e', '$t', '$p','$g','$username')") or die(mysqli_error());
	
	//jika query input sukses
	if($input){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: myanimelist.php"); // Redirect ke halaman index.php
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="myanimelist.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>