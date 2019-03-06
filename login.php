<?php 
// cek apakah tombol submit telah ditekan atau belum 
if (isset($_POST["kumpul"])) {
	// cek username & pw
	if ($_POST["username"] == "admin" && $_POST["password"] == "asdasd") {	
		// jika benar, redirect ke halaman selanjutnya
		header("Location: tugasray.php");
		exit;
	} else {
		// jika salah, tampilkan pesan kesalahan
		$error = true;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login Page</title>
</head>
<body>


<?php if (isset($error)) : ?>
	<p>Username / password salah</p>
<?php endif; ?>

	<form action="" method="post">
		<li>
			<label for="username">Username: </label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="pasword">Password: </label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button name="kumpul" type="submit" >Login!</button>
		</li>
	</form>















	
</body>
</html>