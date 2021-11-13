<html>
	<head>
		<title>Task 2-6</title>
	</head>
	<body>

		<?php
			function print_array($array, $array_size) {
				for ($count = 0; $count < $array_size; $count++) {
					print "$array[$count]  ";
				}
			}

			$treug = array();
			$kvd = array();

			for ($count = 1; $count <= 10; $count++) {
				$treug[] = $count * ($count + 1) / 2;
				$kvd[] = $count * $count;
			}

			print "treug:<br>";
			print_array($treug, 10);

			print "<br><br>kvd:<br>";
			print_array($kvd, 10);

			print "<br><br>rez:<br>";
			$rez = array_merge($treug, $kvd);
			print_array($rez, 20);

			print "<br><br>rez sorted:<br>";
			sort($rez);
			print_array($rez, 20);

			print "<br><br>rez sorted, without 1st:<br>";
			array_shift($rez);
			print_array($rez, 19);

			print "<br><br>rez sorted, without 1st, of unique numbers only:<br>";
			$rez_unique = array_unique($rez);
			print_array($rez_unique , 19);
		?>

	</body>
</html>