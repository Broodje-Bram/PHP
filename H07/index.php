<?php
session_start();

$host = "sql313.epizy.com";
$port = "3306";
$user = "epiz_27295900";
$pass = "E3D7DAZWbkF";
$db = "epiz_27295900_DBlogin";

$username = $_POST["username"];
$password = $_POST["pwd"];

$dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);

$query = "SELECT * FROM gebruikers WHERE username = :username AND password = :password";
$statement = $dbh->prepare($query);
$statement->execute(
    array(
        'username' => $username, 'password' => $password
    )
);
$count = $statement->rowCount();
if ($count > 0) {

}
else {
    header("location:login.php");
}

if (isset($_POST["knop"])) {
    echo "Login SUCCESFUL, WELKOM YOU SON OF A " . $username;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Broodje Website</title>
</head>
<body>
<p><a href="logout.php">Logout</a></p>
</body>
</html>
