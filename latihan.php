<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan PHP</title>
</head>
<body>
	
	<table border="1" cellpadding="7" cellspacing="0">
		<?php for ($i=1; $i <= 5; $i++) : ?>
			<?php if ($i % 2 == 0): ?>
				<tr style="background-color: #CBCBCB">
			<?php else : ?>
				<tr>
			<?php endif ?>
			<!-- <tr> -->
				<?php for ($j=1; $j <= 7; $j++) : ?>
					<?php if ($j % 2 == 0): ?>
						<td style="background-color: #CBCBCB"><?= "$i, $j" ?></td>
					<?php else: ?>
						<td><?= "$i, $j" ?></td>
					<?php endif ?>
				<?php endfor ?>
			</tr>
		<?php endfor ?>
	</table>


		<!-- <?php 
			for ($i=1; $i <= 3; $i++) { 
				echo "<tr>";
				for ($j=1; $j <= 5; $j++) { 
					echo "<td>$i,$j</td>";
				}
				echo "</tr>";
			}
		 ?> -->


</body>
</html>