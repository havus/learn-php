<?php 
require('functions.php');
$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST['cari'])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="cari" autocomplete="off">
        <button name="cari" type="submit">SEARCH</button>
    </form>
    <br>
    <a href="tambah.php">Tambah data</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td>
                <?=$i; ?>
            </td>
            <td>
                <a href="ubah.php?id=<?= $mhs["id"];?>">Ubah</a> |
                <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Hapus selamanya?');">Hapus</a>
            </td>
            <td>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="" width="50">
            </td>
            <td>
                <?= $mhs["nrp"]; ?>
            </td>
            <td>
                <?= $mhs["nama"]; ?>
            </td>
            <td>
                <?= $mhs["email"]; ?>
            </td>
            <td>
                <?= $mhs["jurusan"]; ?>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>


    </table>




</body>

</html>