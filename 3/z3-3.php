<html>
	<head>
		<title>3-3 check</title>
	</head>
	<body>
		<?php
            $user = $_POST["user"];
			$answers = $_POST["answers"];
            $correct = array("6","9","4","1","3","2","5","8","7");
            $number_of_correct = 0;
            for ($count = 0; $count < 9; $count++) {
                if ($answers[$count] == $correct[$count]) {
                    $number_of_correct++;
                }
            }
			$result;
            switch ($number_of_correct) {
                case 9:
                    $result = "know geography perfectly well";
                    break;
                case 8:
                    $result = "know geography very very well";
                    break;
                case 7:
                    $result = "know geography very well";
                    break;
                case 6:
                    $result = "know geography well";
                    break;
                case 5:
                    $result = "know geography satisfactorily";
                    break;
                case 4:
                    $result = "know geography tolerably";
                    break;
                case 3:
                    $result = "know geography bad";
                    break;
                case 2:
                    $result = "know geography very bad";
                    break;
                default:
                    $result = "don't know geography at all";
            }
            print "$user, You $result!";
		?>
	</body>
</html>