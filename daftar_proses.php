<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$n = $_POST['username'];	//membuat variabel $nis dan datanya dari inputan NIS
	$e = $_POST['email'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$t = $_POST['phone'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$p = md5($_POST['password']);
	$p2 = $_POST['password'];	
	
	$input = mysqli_query($connect,"INSERT INTO member VALUES(NULL, '$n', '$e', '$t', '$p')") or die(mysqli_error());

	$input = mysqli_query($connect,"INSERT INTO password VALUES(NULL, '$n', '$p2')") or die(mysqli_error());
	
	//jika query input sukses
	if($input){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>