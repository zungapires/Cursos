<!DOCTYPE html>
<html lang="pt-MZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $num = $_POST["numero"] ?? 0;

    echo "<p> analisando o número <strong>" . number_format($num, 3, ',','.')." </strong> informado
    pelo usuário: </p>";
  
    $int = (int) $num ; 

    $fra = $num - $int;

    echo "<ul><li>o numero fracionario é <strong>:" . number_format($int, 0,' ,', '. '). " </strong> </li>";
    echo "<li>o numero fracionario é <strong>:" . number_format($fra, 3, ' ,', '. '). " </strong></li></ul>";

    ?>

</body>
</html>