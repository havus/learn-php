<?php 
	echo date("l", mktime(0,0,0,3,27,1998))
	
?>

<br>

<?php 
$arr1 = [2,5,6,7,8,9,0,23,10,99,100];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
	<style>
		.kotak {
			float: left;
			height: 70px;
			width: 70px;
			margin: 3px;
			line-height: 70px;
			text-align: center;
			background-color: salmon;
		}

		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	
	<?php for ($i=0; $i < count($arr1); $i++) : ?>
		<div class="kotak"><?= $arr1[$i]; ?></div>
	<?php endfor ?>

	<div class="clear"></div>


	<?php foreach ($arr1 as $arr) : ?>
		<div class="kotak"><?= $arr; ?></div>
	<?php endforeach; ?>

</body>
</html>