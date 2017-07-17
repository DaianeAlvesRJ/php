<?php

function tabuadaGoto($tabuada){
$numero = 1;
:inicio
$linhas[] = "$tabuada x $numero = " . ($tabuada * numero);
if($numero <= 10) {
    goto inicio;
}

}
return implode("\n", $linhas);

echo tabuadaGoto(5);