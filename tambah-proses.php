<?php 

if( isset($_POST["tambah"]) ){
    require "koneksi.php";

    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];

    $input = mysqli_query($koneksi, "INSERT INTO siswa VALUES ('','$nis', '$nama', '$kelas', '$jurusan')");

    if($input){
        echo "Berhasil Menambahkan Data";
        echo '<a href="index.php">Kembali</a>';
    } else {
        echo "Gagal Menambahkan Data";
        echo '<a href="index.php">Kembali</a>';
    }
} else {
    echo '<script>window.history.back()</script>';
}


?>