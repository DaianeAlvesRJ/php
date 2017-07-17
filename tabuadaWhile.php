<?php
function tabuadaWhile($tabuada){
$numero = 1;
while ($numero <= 10) {
    $linhas[] = "$tabuada x $numero = " . ($tabuada * $numero);
    $numero++;
    }
    return implode("\n", $linhas);
}


echo tabuadaWhile(8);