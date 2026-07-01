<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>Formularios</header>
    <main>
        <?php 

        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);

         echo "o numero aleatorio gerado de 0 a 100 é $num";
         
         ?>
         <button onclick="javascript:document.location.reload()"> aleatorizar</button>
      
     
    </main>
</body>
</html>