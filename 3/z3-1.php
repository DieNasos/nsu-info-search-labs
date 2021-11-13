<html>
    <head>
        <title>3-1 result</title>
    </head>
    <body>
        <?php
        	$hor = $_GET["hor"];
            $ver = $_GET["ver"];
            print "<table width=\"100\" height=\"100\" border=\"1\">";
            print "<tr>";
            print "<td align=\"$hor\" valign=\"$ver\">Sample text</td>";
            print "</tr>";
            print "</table>";
            print "<br><a href='z3-1.htm'>Back</a>";
        ?>
    </body>
</html>