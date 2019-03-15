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
	// $nrp = filter_input(INPUT_POST, $data["nrp"], FILTER_SANITIZE_ENCODED);
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	// Upload gambar
	// $gambar = htmlspecialchars($data["gambar"]);
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar)
				VALUES
				('$nrp', '$nama', '$email', '$jurusan', '$gambar')";

	// echo mysqli_query($conn, $query);
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar
	if ($error === 4) {
		echo "<script>
			alert('pilih gambar dulu bosku');
		</script>";
		return false;
	}

	// cek apakah yg diupload gambar / tidak
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
			alert('yang anda upload bukan gambar');
		</script>";
		return false;
	} elseif ($ukuranFile > 1000000) {
		echo "<script>
			alert('ukuran gambar terlalu besar');
		</script>";
		return false;
	}

	// lolos pengecekan
	// generate nama gambar baru
	$namaFile = uniqid();
	$namaFile .= '.' . $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/' . $namaFile);
	return $namaFile;
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
	global $id;
	global $gambarLama;
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	if ($_FILES['gambar']['error'] === 4) {
		global $gambarLama;
		$gambar = $gambarLama;
		echo "<script>
			alert('gambar tak diganti');
		</script>";
	} else {
		$gambar = upload();
	}

	$query = "UPDATE mahasiswa SET 
				nrp = '$nrp',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan', 
				gambar = '$gambar'
				WHERE id = $id;
			";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM mahasiswa
				WHERE
				nama LIKE '%$keyword%' OR
				nrp LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%'";
	return query($query);
}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password =	mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>alert('kopnfirmasi password tidak sesuai!');</script>";
		return false;
	}
}

