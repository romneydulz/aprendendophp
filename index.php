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
        $nascimento = new DateTime();
        echo "<br/>";

        //Exemplo de array
        $frutas = array("Abacaxi", "Laranja", "Manga");
        echo $frutas[1];

        //var_dump() informa o tipo da variavel ou objeto

        $arquivo = fopen(".gitignore","r");

        //var_dump($arquivo);

        

    ?>

    </body>

</html>