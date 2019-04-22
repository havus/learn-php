<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login2.php");
    exit;
}

require('functions.php');


// pagination
// $jumlahDataPerHalaman = 4;
// $jumlahData = count(query("SELECT * FROM mahasiswa"));
// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// $halamanAktif = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;
// $limitData = ($halamanAktif - 1) * $jumlahDataPerHalaman;
// $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $limitData , $jumlahDataPerHalaman");
// if (isset($_POST['cari'])) {
//     $jumlahData = count(cari($_POST['keyword']));
//     $keyword = $_POST['keyword'];
    // $mahasiswa = mysqli_num_rows(mysqli_connect($conn, "SELECT * FROM mahasiswa
//                     LIMIT $limitData , $jumlahDataPerHalaman
//                     WHERE nama LIKE '%$keyword%' OR
//                     nrp LIKE '%$keyword%' OR
//                     email LIKE '%$keyword%' OR
//                     jurusan LIKE '%$keyword%'"));
//     echo "<pre>".print_r($mahasiswa,1)."</pre>";
// }
$mahasiswa = query("SELECT * FROM mahasiswa");
if (isset($_POST['cari'])) {
    // pencarian pagination
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
    <a href="logout.php">LOGOUT</a>

    <br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="cari" autocomplete="off" id="keyword">
        <button name="cari" type="submit" id="tombol-cari">SEARCH</button>
    </form>
    <br>
    <a href="tambah.php">Tambah data</a>
    <br><br>

    
    <br><br>
<div id="container">
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

        <?php //$i = ($halamanAktif * $jumlahDataPerHalaman) - ($jumlahDataPerHalaman - 1);
        $i = 1;?>
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
</div>


<script src="js/script.js"></script>
</body>

</html>