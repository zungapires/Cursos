<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$metical = $_GET["metical"];


$cotaçao = 63.5;

$dolar = $metical / $cotaçao;

echo "seus MT".number_format($metical, 2, ",", "." )." equivalem a $".number_format($dolar, 2, ",", "." ). " "

?>
</body>
</html>