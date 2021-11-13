<html>
	<head>
		<title>Task 2-7</title>
	</head>
	<body>

		<?php
			function print_a_array($array) {
				foreach ($array as $key=>$val) {
					print "$key = $val<br>";
				}
			}

			$cust = array (
				'cnum' => 2001,
				'cname' => "Hoffman",
				'city' => "London",
				'snum ' => 1001,
				'rating' => 100
			);

			print_a_array($cust);

			print "<br><br>sorted with asort:<br>";
			asort($cust);
			print_a_array($cust);

			print "<br><br>sorted with ksort:<br>";
			ksort($cust);
			print_a_array($cust);

			print "<br><br>sorted with sort:<br>";
			sort($cust);
			print_a_array($cust);
		?>

	</body>
</html>