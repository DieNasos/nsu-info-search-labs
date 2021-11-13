<html>
	<head>
		<title>Task 2-4</title>
	</head>
	<body>

		<?php
			$encolor = $_GET["encolor"];	// edge numbers color
			$size = $_GET["size"];	// table size*size
			print "<table border=\"1\" cellpadding=\"5\">";
			for ($row = 0;  $row <=$size;  $row++ ) {
				print "<tr>";
				for ($col = 0;  $col <= $size;  $col++ ) {
					$val = $row + $col;
					if ($row == 0) {
						print ($col == 0) ?
							"<td bgcolor=\"red\">+</td>" :
							"<td bgcolor=\"$encolor\">$col</td>";
					} else if ($col == 0) {
						print "<td bgcolor=\"$encolor\">$row</td>";
					} else {
						print "<td>$val</td>";
					}
				}
				print "<tr>";
			}
			print "</table>";
			// example: http://localhost/work-php/z2-4.php?encolor=blue&size=10
		?>

	</body>
</html>