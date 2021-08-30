<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Primeira Página PHP</title>
</head>

<body>
    <?php

    $nome = $_GET["a"];
    $ip = $_SERVER["REMOTE_ADDR"];
    $pagina = $_SERVER["SCRIPT_NAME"];

    echo $ip;
    echo $nome;
    echo "</br>";
    echo $pagina;

    ?>
</body>

</html>