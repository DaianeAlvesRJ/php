<?php
function tabuadaFor($tabuada){
for ($numero = 1; $numero <= 10; $numero++){
    $linhas[] = "$tabuada x $numero = ".($tabuada *$numero);
    }
return implode("\n", $linhas);
}

echo tabuadaFor(4);