<?php
$diaSemana = rand(1, 8);
switch ($diaSemana) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "segunda-feira";
        break;
    case 3:
        echo "terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "quinta-feira";
        break;
    case 6:
        echo "sexta-feira";
break;
    case 7:
        echo "sábado";
        break;
    default:
        echo "Dia da semana inválido";
}
