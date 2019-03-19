<?php 
$conn = mysqli_connect("localhost", "root", "php123", "praktek");

$array = [  "nama" => "hafidz",
            "alamat" => "pinggir jalan gede",
            "hobi" => "makan" 
];

$username = 'havus';
$result = mysqli_query($conn, "SELECT * FROM wisata");

var_dump( mysqli_fetch_row( $result ) );

foreach( $result as $row ) {
    print_r($row);
    echo "<br>";
}

// kalo null berarti array(data) belum ada di database;

// mysqli_num_rows()
print_r(mysqli_num_rows($result));