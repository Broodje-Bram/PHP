<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .input {
            position: absolute;
            left: 150px;
        }
    </style>
</head>
<body>
 <h1>Login</h1>
<form action="index.php" method="post">
    Gebruikersnaam <input class="input" type="text" id="username" name="username" value="" required>
    <br> <br>
    Wachtwoord <input class="input" type="password" id="pwd" name="pwd" value="" required>
    <br> <br>
    <input type="submit" class="knop" name="knop" value="Send">
</form>
</body>
</html>
