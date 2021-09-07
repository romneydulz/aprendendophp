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
  <img src="img//background.png" alt="background abstrato">
  </br>
  <?php
  require_once("config.php");

  echo "Hello World!</br>";
  echo "<a href='formulario'>Formulário</a>";
  echo "<br/>";

  // testes com variaveis
  //unset($nome) apaga variavel
  //isset($nome) retorna true or false caso a variavel esteja definida

  $nome = "Romney";
  $sobrenome = "Dulz";
  echo $nome . " " . $sobrenome;
  echo "<br/>";
  $nascimento = new DateTime();
  echo "<br/>";

  //Exemplo de array
  $frutas = array("Abacaxi", "Laranja", "Manga");
  echo $frutas[1];

  //var_dump() informa o tipo da variavel ou objeto

  $arquivo = fopen(".gitignore", "r");

  //var_dump($arquivo);

  ?>
</body>

</html>