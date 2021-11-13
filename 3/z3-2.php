<html>
    <head><title>Task 3-2</title></head>
    <body>
        <?php
            if (!isset ($_GET["hor"])) {
                $hor = "left";
            } else {
                $hor = $_GET["hor"];
            }
            if (!isset ($_GET["ver"])) {
                $ver = "top";
            } else {
                $ver = $_GET["ver"];
            }
            print "<table width=\"100\" height=\"100\" border=\"1\">";
            print "<tr>";
            print "<td align=\"$hor\" valign=\"$ver\">Sample text</td>";
            print "</tr>";
            print "</table><br>";
            print "<form action='{$_SERVER['PHP_SELF']}' method='get'>";
        ?>
            <p><b>Choose horizontal:</b></p>
            <p><input type="radio" name="hor" value="left">left</p>
            <p><input type="radio" name="hor" value="center">center</p>
            <p><input type="radio" name="hor" value="right">right</p>
            <p><b>Choose vertical:</b></p>
            <p><input type="checkbox" name="ver" value="top">top</p>
            <p><input type="checkbox" name="ver" value="middle">middle</p>
            <p><input type="checkbox" name="ver" value="bottom">bottom</p>
            <p><input type="submit" value="Submit"></p>
        </form>
    </body>
</html>