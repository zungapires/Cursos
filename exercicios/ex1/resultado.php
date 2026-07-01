<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>receber formulario</header>
    <main>
        <?php 
        $num = $_GET["num"] ?? 0;

        $ant = $num - 1;
        $suc = $num + 1;
        

        echo "o numero escolhido é $num, o antecessor = $ant <strong></strong>, o sucessor é $suc!"        
        ?>
       <p> <a href="javascript:history.go(-1)">voltar para pagina anterior </a></p>
    </main>
</body>
</html>