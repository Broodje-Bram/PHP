<?php

$host = "sql313.epizy.com";
$port = "3306";
$user = "epiz_27295900";
$pass = "E3D7DAZWbkF";
$db = "epiz_27295900_school";

try {
$dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);
foreach ($dbh->query('SELECT * from cursist') as $row) {
    print_r($row);
}

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage()."<br/>";
    die();
}