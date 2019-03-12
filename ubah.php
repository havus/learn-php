<?php 
require('functions.php');

// ambil data di url
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
$gambarLama = $mhs['gambar'];


if (isset($_POST["submit"])) {
	

	// cek keberhasilan
	if (ubah($_POST) >= 0) {
		echo "
		<script>
			alert('DATA BERHASIL DIUBAH!');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('DATA GAGAL DIUBAH!');
			document.location.href = 'index.php';
		</script>
		";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>UPDATE</title>
</head>

<body>
	<h1>Halaman Ubah Data</h1>

	<form action="" method="POST" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nrp">NRP : </label>
				<input id="nrp" type="text" name="nrp" required value="<?= $mhs["nrp"]; ?>">
			</li>
			<br>
			<li>
				<label for="nama">Nama : </label>
				<input id="nama" type="text" name="nama" required value="<?= $mhs["nama"]; ?>">
			</li>
			<br>

			<li>
				<label for="email">Email : </label>
				<input id="email" type="text" name="email" required value="<?= $mhs["email"]; ?>">
			</li>
			<br>
			<li>
				<label for="jurusan">jurusan : </label>
				<input id="jurusan" type="text" name="jurusan" required value="<?= $mhs["jurusan"]; ?>">
			</li>
			<br>
			<li>
				<label for="gambar">Gambar : </label>
				<img src="img/<?= $mhs['gambar']; ?>" width="40">
				<input id="gambar" type="file" name="gambar">
			</li>
			<br><br>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
	</form>

</body>

</html>