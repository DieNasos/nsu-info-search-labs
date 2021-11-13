<html>
	<head>
		<title>Task 2-3</title>
	</head>
	<body>

		<?php
			$dcolor = $_GET["dcolor"];	// diagonal color
			$size = $_GET["size"];	// table size*size
			print "<table border=\"1\" cellpadding=\"5\">";
			$row = 1;
			while ($row <= $size) {
				print "<tr>";
				$col = 1;
				while ($col <= $size) {
					$val = $row * $col;
					if ($row == $col) {
						print "<td bgcolor=\"$dcolor\">$val</td>";
					} else {
						print "<td>$val</td>";
					}
					$col++;
				}
				print "<tr>";
				$row++;
			}
			print "</table>";
			// example: http://localhost/work-php/z2-3.php?dcolor=blue&size=10
		?>

	</body>
</html>