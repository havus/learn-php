<?php 
// 1  2   4   8     16     32     64 128 254
// 1 10 100 1000  10000  100.000
// ============================
// 10 = 1010
// 20 = 10100
// 30 = 11110

//  1    0    1    0
// 2(3) 0(2) 2(1) 0(0)


// if (isset($_POST["hitung"])) {
// 	$input = $_POST["target"];
// 	$i = 0;
// 	while ($input > 0) {
// 		$hasil[$i] = $input % 2;
// 		$input = floor(($input / 2));
// 		$i++;
// 	}

// 	for ($j = $i - 1; $j >= 0 ; $j--) { 
// 		echo $hasil[$j];
// 	}
// }

?>

<?php 
//  1    0    1    0    0
// 2(4) 0(3) 2(2) 0(1) 0(0)
	// 1010 = 2020
if (isset($_POST["hitung"])) {
	$input = ($_POST["target"]);

	$array = array_reverse(str_split($input));
	for ($i = 0; $i < count($array); $i++) { 
		$hasil[$i] = ($array[$i] * 2);
		echo "<pre>".print_r($i,1)."</pre>";
	}
	echo "<pre>".print_r($hasil,1)."</pre>";
	echo "<pre>".print_r($hasil2,1)."</pre>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		.kotak {
			height: 300px;
			width: 400px;
			background-color: salmon;
			padding: 50px;
			text-align: center;
			box-sizing: border-box;
		}
		.clear {
			clear: both;
		}
	</style>
	<title>Converter Binary</title>
</head>
<body>

<div class="kotak">
	<form action="" method="post">
		<li>
			<label for="target">Input</label>
			<input type="text" name="target" id="target">
		</li>
		<li>
			<button name="hitung" type="submit">Convert</button>
		</li>
		<li>
			<p>Hasil = <?php  ?></p>
		</li>
	</form>
</div>




	
</body>
</html>