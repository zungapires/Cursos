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
        $n = $_GET["nome"];
        $s = $_GET["sobrenome"];

        echo "olá <strong>$n $s</strong>, prazer em te conhecer!"        
        ?>
       <p> <a href="javascript:history.go(-1)">voltar para pagina anterior </a></p>
    </main>
</body>
</html>