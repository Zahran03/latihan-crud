<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemogramana Web</title>
</head>
<body>
    <h2>MEMBUAT CONTOH PERINTAH CRUD PADA PEMOGRAMAN WEB</h2>

    <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>

    <h3>Data Siswa</h3>

    <table cellpadding="5" cellspacing="3" border="1">
        <tr bgcolor="#CCCCCC">
            <th>No</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Opsi</th>
        </tr>

        <?php 
        
        require 'koneksi.php';

        $result = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY siswa_nis DESC");
        
        if( mysqli_affected_rows($koneksi) == 0 ){
            echo '<tr><td colspan="6">Tidak Ada Data!</td></tr>';
        } else {
            $no = 1;
            while( $data = mysqli_fetch_assoc($result)){
                echo '<tr>';
                    echo "<td>".$no."</td>";
                    echo "<td>".$data["siswa_nis"]."</td>";
                    echo "<td>".$data["siswa_nama"]."</td>";
                    echo "<td>".$data["siswa_kelas"]."</td>";
                    echo "<td>".$data["siswa_jurusan"]."</td>";
                    echo '<td><a href="edit.php?id='.$data['siswa_id'].'">Edit</a> / <a href="hapus.php?id='.$data['siswa_id'].'">Hapus</a></td>';
                echo '</tr>';

                $no++;
            }
        }
        
        ?>
    </table>
</body>
</html>