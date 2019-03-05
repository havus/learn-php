<?php 
require('functions.php');
if (isset($_POST["submit"])) {
	

	// cek keberhasilan
	if (tambah($_POST) > 0) {
		echo "
		<script>
			alert('DATA BERHASIL DITAMBAHKAN!');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('DATA GAGAL DITAMBAHKAN!');
			document.location.href = 'index.php';
		</script>
		";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Document</title>
</head>

<body>
	<h1>Halaman Tambah Data</h1>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="nrp">NRP : </label>
				<input id="nrp" type="text" name="nrp" required>
			</li>
			<br>
			<li>
				<label for="nama">Nama : </label>
				<input id="nama" type="text" name="nama" required>
			</li>
			<br>

			<li>
				<label for="email">Email : </label>
				<input id="email" type="text" name="email" required>
			</li>
			<br>
			<li>
				<label for="jurusan">jurusan : </label>
				<input id="jurusan" type="text" name="jurusan" required>
			</li>
			<br>
			<li>
				<label for="gambar">Gambar : </label>
				<input id="gambar" type="text" name="gambar" required>
			</li>
			<br><br>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>

</body>

</html>