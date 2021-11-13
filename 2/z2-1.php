<html>
	<head>
		<title>Task 2-1</title>
	</head>
	<body>

		<?php
			$color = $_GET["color"];
			$size = $_GET["size"];
    			print "<p><font color=\"$color\" size=\"$size\">Sample text</font>";
			// example: http://localhost/work-php/z2-1.php?color=blue&size=10
		?>

	</body>
</html>