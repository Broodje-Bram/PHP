<?php

function tabelmaken()
{
    $host = "sql313.epizy.com";
    $port = "3306";
    $user = "epiz_27295900";
    $pass = "E3D7DAZWbkF";
    $db = "epiz_27295900_bakkerij";

    $dbh = mysqli_connect($host, $user, $pass, $db, $port) or die('Database kan niet connecten!!');

    $query = "select * from broodjes";

    $result = mysqli_query($dbh, $query) or die ("Database fout !!");

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>";
        echo $row["naam"];
        echo "</td>";
        echo "<td>";
        echo $row["vorm"];
        echo "</td>";
        echo "<td>";
        echo $row["soort"];
        echo "</td>";
        echo "<td>";
        echo $row["gewicht"];
        echo "</td>";
        echo "<td>";
        echo "<nav> <a href=\"details.php?id=" . $row['naam'] . "\">details</a></nav>";
        echo "</td>";
        echo "<tr>";
    }
}