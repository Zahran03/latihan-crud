<?php 

require "koneksi.php";

$id = $_GET["id"];

$hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE siswa_id = $id");

if($hapus){
    header("Location: index.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}





?>