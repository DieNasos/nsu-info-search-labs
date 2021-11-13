<html>
    <head><title>3-4-1</title></head>
    <body>
<?php
    $user = $_POST["user"];
    $hobby = $_POST["hobby"];
    print "<p>$user, seems like you like:";
    print "<ul>\n";
    foreach ($hobby as $value){
        print "<li>$value\n";
    }
    print "</ul>\n";
?>
    </body>
</html>