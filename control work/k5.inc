<?php
    function vid_content($table_name, $localizations) {
        print "<h4>Table content for $table_name:</h4>";
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM $table_name");
        print "<table border=\"1\">";
        print "<tr>";
        for ($i = 0; $i < mysqli_num_fields($result); $i++) {
            $name = mysqli_fetch_field_direct($result, $i)->name;
            print "<th>$localizations[$name]<br>($name)</th>";
        }
        print "</tr>";
        while ($row = mysqli_fetch_row($result)) {
            print "<tr>";
            foreach ($row as $field)
                print "<td>$field</td>";
            print "</tr>";
        }
        print "</table><br>";
        mysqli_free_result($result);
    }

    function vid_structure($table_name) {
        print "<h4>Table structure for $table_name:</h4>";
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM $table_name");
        $fields = mysqli_num_fields($result);
        for ($i = 0; $i < $fields; $i++) {
            $field = mysqli_fetch_field_direct($result,$i);
            print "<b>type</b>: $field->type, ";
            print "<b>length</b>: $field->length, ";
            print "<b>name</b>: $field->name, ";
            print "<b>flags</b>: $field->flags";
            print "<br>";
        }
        mysqli_free_result($result);
    }

    function get_for_table($table_name, $localizations) {
        $params_array = $_GET[$table_name];

        if ($params_array == null) return;

        if (count($params_array) == 2) {
            vid_structure($table_name);
            vid_content($table_name, $localizations);
        } else {
            if ($params_array[0] == "str") vid_structure($table_name);
            else if ($params_array[0] == "con") vid_content($table_name, $localizations);
        }
    }

    function get_fields_localizations() {
        return array(
            "snum" => "Salesman number",
            "sname" => "Salesman name",
            "city" => "City",
            "comm" => "Commission",
            "cnum" => "Customer number",
            "cname" => "Customer name",
            "rating" => "Rating",
            "onum" => "Order number",
            "amt" => "Amount",
            "odate" => "Order date"
        );
    }

    $localizations = get_fields_localizations();

    get_for_table("sal", $localizations);
    get_for_table("cust", $localizations);
    get_for_table("ord", $localizations);

    print "<br><a href='k1.htm'>Back</a>"
?>