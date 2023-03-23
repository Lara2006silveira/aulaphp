<?php
$nome= "Lara Siveira";
$peso=71;
$altura=1.62;
$imc=$peso/pow($altura,2);

if($imc<20){
    $resultado="peso abaixo-coma  mais !";
}else if ($imc >=20 && $imc<24.9){
$resultado="pesonormal -nojento(a)";
}else if ($imc >= 25&& $imc <29.9){
    $resultado="obesidade leve - safadinho(a)";
}else if ($imc>= 30 && $imc < 38.9){
    $resultado="obesidade moderada- caminha elefante!";
}else {
    $resultado="obesidade mórbida - traz o guindaste!";
}
echo "<h1>" .$nome."seu imc é ".$imc.
"<br> seu resultado:".$resultado."</h1>";