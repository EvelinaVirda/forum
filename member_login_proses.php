<?php 
include 'koneksi.php';
     session_start();
$username = $_POST['nama'];
$password = md5($_POST['password']);
 
$login = mysqli_query($connect, "select * from member where nama='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
    $_SESSION['nama'] = $username;
    $_SESSION['status'] = "login";
    header("location:member/index.php");
}else{
    header("location:login.php");   
}
 
?>