<?php

function tabuadaArray($tabuada){
    $linhas[] = "$tabuada x 1 = ".($tabuada * 1);
    $linhas[] = "$tabuada x 2 = ".($tabuada * 2);
    $linhas[] = "$tabuada x 3 = ".($tabuada * 3);
    $linhas[] = "$tabuada x 4 = ".($tabuada * 4);
    $linhas[] = "$tabuada x 5 = ".($tabuada * 5);
    $linhas[] = "$tabuada x 6 = ".($tabuada * 6);
    $linhas[] = "$tabuada x 7 = ".($tabuada * 7);
    $linhas[] = "$tabuada x 8 = ".($tabuada * 8);
    $linhas[] = "$tabuada x 9 = ".($tabuada * 9);
    $linhas[] = "$tabuada x 10 = ".($tabuada * 10);
    return implode("\n", $linhas);
}
echo tabuadaArray(6);
