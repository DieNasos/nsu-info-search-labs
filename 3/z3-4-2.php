<html>
    <head><title>3-4-2</title></head>
    <body>
<?php
    print "<ul>\n";
    foreach ($_POST as $key=>$value) {
        print "$key = $value<br>\n";
    }
    print "</ul>\n";
?>
    </body>
</html>