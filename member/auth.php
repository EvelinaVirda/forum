<?php
if (!isset($_SESSION)) {
session_start();
}
if(isset($_SESSION['nama'])){

}
else{
         
            header("location:../index.php");
}
?>
