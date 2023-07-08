<?php 
require "koneksi.php";
$id = $_GET["id"];

$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE siswa_id = $id");

$siswa = mysqli_fetch_assoc($data);




?>
<h2>MEMBUAT CONTOH PERINTAH CRUD PADA PEMOGRAMAN WEB</h2>

    <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>

    <h3>Tambah Data Siswa</h3>

    <form action="edit-proses.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <table cellpadding="3" cellspacing="0">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" value="<?= $siswa["siswa_nis"] ?>" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?= $siswa["siswa_nama"] ?>" size="30" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <select name="kelas" id="" required>
                        <option value="">Pilih Kelas</option>
                        <option value="X" <?php if($siswa["siswa_kelas"] == 'X'){ echo 'selected'; } ?>>X</option>
                        <option value="XI" <?php if($siswa["siswa_kelas"] == 'XI'){ echo 'selected'; } ?>>XI</option>
                        <option value="XII" <?php if($siswa["siswa_kelas"] == 'XII'){ echo 'selected'; } ?>>XII</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                <select name="jurusan" id="" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="Teknik Komputer dan Jaringan"
                        <?php if($siswa["siswa_jurusan"] == 'Teknik Komputer dan Jaringan'){ echo 'selected'; } ?>>Teknik Komputer dan Jaringan</option>
                        <option value="Multimedia" <?php if($siswa["siswa_jurusan"] == 'Multimedia'){ echo 'selected'; } ?>>Multimedia</option>
                        <option value="Akuntansi" <?php if($siswa["siswa_jurusan"] == 'Akuntansi'){ echo 'selected'; } ?>>Akuntansi</option>
                        <option value="Perbankan" <?php if($siswa["siswa_jurusan"] == 'Perbankan'){ echo 'selected'; } ?>>Perbankan</option>
                        <option value="Pemasaran" <?php if($siswa["siswa_jurusan"] == 'Pemasaran'){ echo 'selected'; } ?>>Pemasaran</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="simpan" value="Tambah"></td>
            </tr>
        </table>
    </form>