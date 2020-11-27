<?php
$host = "sql313.epizy.com";
$port = "3306";
$user = "epiz_27295900";
$pass = "E3D7DAZWbkF";
$db = "epiz_27295900_login";

$email = $_POST["mail"];
$password = $_POST["wachtwoord"];

$dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);

$query = "SELECT * FROM gebruikers WHERE Email = :Email AND Wachtwoord = :Wachtwoord";
$statement = $dbh->prepare($query);
$statement->execute(
    array(
        'Email' => $email, 'Wachtwoord' => $password
    )
);
$count = $statement->rowCount();
if ($count > 0) {
    echo "Welkom!!";
}
else {
    echo "Sorry, geen toegang!";
}