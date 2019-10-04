<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('../koneksi.php');
	
	

	$n = $_POST['name'];	//membuat variabel $nis dan datanya dari inputan NIS
	$m = $_POST['message'];
	$i = $_POST['id'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($connect,"INSERT INTO komentar VALUES(NULL,'$n', '$m', '$i',not null)") or die(mysqli_error());
	
	//jika query input sukses
	if($input){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("Refresh:0"); // Redirect ke halaman index.php
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>