<?php
if (isset($_POST["site"]) && $_POST["site"] != "") {
    $site = $_POST["site"];
    header("Location: $site");
    exit;
} else {
    function get_sites_array() {
        $sites;
        $sites[] = "https://www.google.com";
        $sites[] = "https://www.yandex.ru";
        return $sites;
    }

    $sites = get_sites_array();
    $sites_size = count($sites);
    print "<html>";
    print "<head><title>Task 3-5</title></head>";
    print "<body>";
    print "<form action='{$_SERVER['PHP_SELF']}' method='post'>";
    print "<select name=\"site\">";
    print "<option value = \"\">Search systems:";
    $count = $sites_size;
    while ($count > 0) {
        $site = $sites[$sites_size - $count];
        print "<option value=\"$site\">$site";
        $count--;
    }
    print "</select>";
    print "<input type=\"submit\" value=\"Go\">";
    print "</form>";
    print "</body>";
    print "</html>";
}
?>