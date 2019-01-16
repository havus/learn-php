<?php 
$gadget = [
	[
		"merk" => "Samsung",
		"ram" => "2",
		"jenis" => "Grand Duos",
		"gambar" => "img/samsung.jpeg",
		"layar" => "5\""
	],
	[
		"merk" => "Xiaomi",
		"ram" => "3",
		"jenis" => "Redmi A1",
		"gambar" => "img/redmi.jpeg",
		"layar" => "5\""
	],
	[
		"merk" => "Luna",
		"ram" => "1",
		"jenis" => "V Lite",
		"gambar" => "img/luna.jpeg",
		"layar" => "5,5\""
	],
	[
		"merk" => "Sony",
		"ram" => "3",
		"jenis" => "Z4",
		"gambar" => "img/sony.jpeg",
		"layar" => "5\""
	],
	[
		"merk" => "LG",
		"ram" => "3",
		"jenis" => "K-10",
		"gambar" => "img/LG.jpeg",
		"layar" => "5\""
	],
	[
		"merk" => "Nokia",
		"ram" => "2",
		"jenis" => "Asha 501",
		"gambar" => "img/nokia.jpeg",
		"layar" => "5\""
	],
	[
		"merk" => "Iphone",
		"ram" => "1",
		"jenis" => "5G",
		"gambar" => "img/iphone.jpeg",
		"layar" => "4,5\""
	]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		.kotak {
			/*height: 400px;*/
			width: 500px;
			background-color: salmon;
			float: left;
			margin: 5px;
			border-radius: 10px;
		}
		.clear {
			clear: both;
		}
		.gambar {
			height: 300px;
			width: 300px;
			margin: 5px;
			border-radius: 5%;
		} 
	</style>
	<title>Tugas Array</title>
</head>
<body>


<?php foreach ($gadget as $hp) : ?>
	<div class="kotak">
		<ul>
			<li>
				<img src="<?= $hp["gambar"]?>" class="gambar">
			</li>
			<li>Merk : <?= $hp["merk"]; ?></li>
			<li>Ram : <?= $hp["ram"]; ?></li>
			<li>Jenis : <?= $hp["jenis"]; ?></li>
			<li>Layar : <?= $hp["layar"]; ?></li>
		</ul>
	</div>
<?php endforeach; ?>	







	
</body>
</html>

