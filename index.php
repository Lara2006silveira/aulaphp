<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEU PRIMEIRO SITE PHP</title>
    <link rel= "stylesheet" href="css/style.css">
</head>
<body>
  <a href="Exemplo1.php">exemplo 1 </a>
  <a href="exemplo2.php">Exemplo 2 </a>
  <a href="exemplo3.php">Exemplo 3</a>
  <a href="exemplo4.php">Exemplo 4</a>
<?php

$nome="Lara Silveira";
$anoAtual=2023;
$anoNasc=2006;
//const NOME ="Lara Silveira"
define("NOME", "Lara Silveira");


$idade= $anoAtual - $anoNasc;
echo"<h1> Boa Tarde, ".$nome." </h1>";
echo"<p> A aluna  ".$nome. " tem " .$idade. " anos</p>"; 
echo"aluna ".NOME ;


?>    
</body>
</html>
