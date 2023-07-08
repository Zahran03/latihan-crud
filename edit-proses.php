<?php 

require "koneksi.php";

if( isset($_POST["simpan"]) ){
    $id = $_POST["id"];
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];

    $query = "UPDATE siswa SET siswa_nis = '$nis', siswa_nama = '$nama', siswa_kelas = '$kelas', siswa_jurusan = '$jurusan' WHERE siswa_id = $id";

    $update = mysqli_query($koneksi, $query);

    if($update){
        echo "data berhasil di edit";
        echo '<a href="index.php">Kembali</a>';
    } else {
        echo "data gagal di edit";
        echo '<a href="index.php">Kembali</a>';
    }
} else {
    header("Location: index.php");
    exit;
}




?>