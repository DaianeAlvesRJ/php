<?php

function tabuadaDoWhile($tabuada){
    $numero = 1;
do {
    $linhas[] = "$tabuada x $numero = " . ($tabuada * numero);
    $numero++;
} while($numero <=10);
 return implode("\n", $linhas);
}


echo tabuadaDoWhile(8);
