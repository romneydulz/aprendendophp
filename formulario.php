<?php

$nome = $_GET["a"];
$ip = $_SERVER["REMOTE_ADDR"];
$pagina = $_SERVER["SCRIPT_NAME"];
echo $ip;

echo $nome;
echo "</br>";
echo $pagina;

?>