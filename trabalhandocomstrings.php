<html>
    <head>
        <title>Aprendendo PHP</title>
    </head>
    <body>
        <?php

            $frase = "isso é apenas um teste";
            $frase = str_replace("o","0",$frase);
            echo strtolower($frase);
            echo "</br>";
            echo strtoupper($frase);
            echo "</br>";
            echo ucwords("$frase");
            echo "</br>";
            
            // pesquisa palavra e retorna indice
            $word = "teste";
            $q = strpos($frase, $word);
            echo $q;

            echo "</br>";

            // retorna string de um indice a outro
            $texto = substr($frase, 0, $q);
            echo $texto;

            echo "</br>";
            $texto2 = substr($frase, $q,strlen($word));

            echo $texto2;
        ?>
    </body>
</html>