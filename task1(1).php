<?php

$x = 1;

$y = &$x;

$x = 10;

echo $y;

echo "<br>";

$z = "egypt";
$$z = "cairo";

echo $$z;

echo "<br>";

echo $egypt;

echo "<br>";

var_dump($z);

echo "<br>";

$mohamed = true;

echo $mohamed;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohammed</title>
</head>
<body>

</body>
</html>
