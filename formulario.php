<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-XSS-Protection" content="1">
    <title>Minha Primeira Página PHP</title>
</head>

<body>
    <form>
        <h1>Formulário</h1>
        Nome Completo: <input type="text" name="nome">
        </br>
        Data de Nascimento: <input type="date" name="nascimento">
        <input type="submit" value="OK">
    </form>

    <?php
    require_once("config.php");

    $_SESSION["nome"] = "Romney";
    echo "</hr>";
    echo $_SESSION["nome"] . "</br>";
    echo "PHPSESSID: " . session_id();
    session_regenerate_id();
    echo "</br>PHPSESSID: " . session_id();
    //session_unset();
    //session_destroy();

    if (isset($_GET)) {
        foreach ($_GET as $key => $value) {
            echo "</br><hr>";
            echo "<strong>Nome do campo:</strong> $key</br>";
            echo "<strong>valor:</strong> $value";
        }
    }

    ?>
</body>

</html>