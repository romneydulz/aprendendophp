<html>
    <head>
        <title>Aprendendo PHP</title>

    </head>
    <body>

    <?php

        /*
        Comentario de varias linhas
        */

        echo "Hello World!";
        echo "<br/>";

        /////////////////////////////////////////////////////////////////////////////
        // testes com variaveis
        //unset($nome) apaga variavel
        //isset($nome) retorna true or false caso a variavel esteja definida
        /////////////////////////////////////////////////////////////////////////////
        
        $nome = "Romney";
        $sobrenome = "Dulz";
        echo $nome." ".$sobrenome;
        echo "<br/>";
        $anoNascimento = "18/11/1990";
        echo $anoNascimento;
        echo "<br/>";

        //Exemplo de array
        $frutas = array("abacaxi", "laranja", "manga");
        echo $frutas[1];

    ?>

    </body>

</html>