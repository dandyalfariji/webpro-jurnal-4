<?php
// 1.koneksi ke mysql dan memilih database
$host = "localhost";
$user = "root";
$password = "";
$db_name = "db_kampus";


$conn = mysqli_connect($host, $user, $password, $db_name);
if (!$conn){
    die(); "Koneksi database gagal";
}

$sqlStatement = "SELECT * FROM mahasiswa";
$query = mysqli_query($conn, $sqlStatement);

$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

mysqli_close($conn);
?>
<h1>Daftar Mahasiswa</h1>
<table border="1" >
    <thead>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
    </thead>
    <tbody>
        <?php 
        foreach ($data as $key => $mhs) {
        ?>
        <tr>
            <td><?= ++$key?></td>
            <td><?= $mhs['nim']?></td>
            <td><?= $mhs['nama']?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
