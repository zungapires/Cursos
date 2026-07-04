<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
    date_default_timezone_set("Africa/Maputo");
     echo "hoje é dia " . date("d,M,Y");
     echo " a hora atual é" . date("G:i:s T"); 
    ?>
    </h1>
</body>
</html>