<?php

    $frase = "isso é apenas um teste";
    $frase = str_replace("o","0",$frase);
    echo strtolower($frase);
    echo "</br>";
    echo strtoupper($frase);
    echo "</br>";
    echo ucwords("$frase");
    echo "</br>";

    echo "</br>";

?>