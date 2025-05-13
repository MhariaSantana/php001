
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 001</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula 01 de php</h1>
    <hr>
<?php
 echo "<h2>Variável</h2>";
 $nome ="Mharia Santana";

$idade = 20;
 $fumante = false;
  echo "Nome : " . $nome . "<br>";
  echo "Idade : " . $idade . "<br>";
  echo   $fumante;

  if($fumante== true){
    echo "sim";
  }
  else{
 echo "não";
  }
?>
</body>
</html>