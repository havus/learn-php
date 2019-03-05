<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "php123", "phpdasar");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;
	$nrp = filter_input(INPUT_POST, $data["nrp"], FILTER_SANITIZE_ENCODED);
	$nama = filter_input(INPUT_POST, $data["nama"], FILTER_SANITIZE_ENCODED);
	$email = filter_input(INPUT_POST, $data["email"], FILTER_SANITIZE_ENCODED);
	$jurusan = filter_input(INPUT_POST, $data["jurusan"], FILTER_SANITIZE_ENCODED);
	$gambar = filter_input(INPUT_POST, $data["gambar"], FILTER_SANITIZE_ENCODED);

	$query = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar)
				VALUES
				('$nrp', '$nama', '$email', '$jurusan', '$gambar')";

	return mysqli_query($conn, $query);
}

?>