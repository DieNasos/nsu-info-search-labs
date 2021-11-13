<html>
	<head>
		<title>Task 2-5</title>
	</head>
	<body>

		<?php
			function Ru($color) { print "<p><font color=\"$color\">Здравствуйте!</font>"; }
			function En($color) { print "<p><font color=\"$color\">Hello!</font>"; }
			function Fr($color) { print "<p><font color=\"$color\">Bonjour!</font>"; }
			function De($color) { print "<p><font color=\"$color\">Guten Tag!</font>"; }

			$lang = $_GET["lang"];
			$color = $_GET["color"];
			$lang($color);

			// example: http://localhost/work-php/z2-5.php?lang=Ru&color=blue
		?>

	</body>
</html>