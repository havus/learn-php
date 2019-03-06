<?php 
// koneksi ke database
$db = mysqli_connect("localhost", "root", "php123", "phpdasar");

// ambil data dari table mahasiswa
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

// if( !$result ) {
    //     echo mysqli_error($db);
    // }
    // var_dump($result);
// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() mengembalikan array numeric
// mysqli_fetch_assoc() assosiatif
// mysqli_fetch_array() keduanya
// mysqli_fetch_object()


// while( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }


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
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td>
            <img src="img/<?= $row["gambar"]; ?>" alt="" width="50">
        </td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    
    <?php $i++; ?>
    <?php endwhile; ?>


    </table>



    
</body>
</html>