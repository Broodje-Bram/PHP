<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Foto's For loop</title>
</head>
<body>
<style>
    img {
        height: 100px;
        width: 100px;
    }
</style>
<?php
    for ($i = 1; $i<=10; $i++){
        echo "<img src='../img/Broodje".$i.".png'>";
    }
?>
</body>
</html>
