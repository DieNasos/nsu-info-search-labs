<html>
    <head><title>3-4-3</title></head>
    <body>
<?php
    print "<ul>\n";
    foreach ($_POST as $key=>$value) {
        if (gettype($value) == "array") {
            print "$key = <br>\n";
            foreach ($value as $v) {
                 print "$v<br>";
            }
        } else {
            print "$key = $value<br>\n";
        }
    }
    print "</ul>\n";
?>
    </body>
</html>