<html>
	<head>
		<title>Task 2-2</title>
	</head>
	<body>

		<?php
			$lang = $_GET["lang"];
			switch ($lang ) {
				case "ru":
      					print "Russian";
      					break;
				case "en":
      					print "English";
      					break;
				case "fr":
      					print "French";
      					break;
				case "de":
      					print "German";
      					break;
				default:
      					print "Language code \"$lang\" is unknown";

			}
			// example: http://localhost/work-php/z2-2.php?lang=ru
		?>

	</body>
</html>