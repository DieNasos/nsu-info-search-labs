<?php

$conn = mysqli_connect("localhost", "root", "");
if (!$conn) die("No connection with MySQL");

$database = "sample";
mysqli_select_db($conn, $database) or die ("Could not open $database");

?>