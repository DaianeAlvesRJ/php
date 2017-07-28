<?php
var_dump($argv);
class Tabuada{
    public $estruturaDeRepeticao="For";
function __construct($estruturaDeRepeticao){
    $this->$estruturaDeRepeticao->$estruturaDeRepeticao
}

    function tabuadaVariasLinhas($tabuada){
        return "$tabuada x 1 = ".($tabuada * 1)."\n".
            "$tabuada x 2 = ".($tabuada * 2)."\n".
            "$tabuada  x 3 = ".($tabuada * 3)."\n".
            "$tabuada  x 4 = ".($tabuada * 4)."\n".
            "$tabuada  x 5 = ".($tabuada * 5)."\n".
            "$tabuada  x 6 = ".($tabuada * 6)."\n".
            "$tabuada  x 7 = ".($tabuada * 7)."\n".
            "$tabuada  x 8 = ".($tabuada * 8)."\n".
            "$tabuada  x 9 = ".($tabuada * 9)."\n".
            "$tabuada  x 10 = ".($tabuada * 10)."\n";
    }
    //echo tabuadaVariasLinhas(6);

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

    //echo tabuadaArray(5);

    function tabuadaFor($tabuada){
    for ($numero = 1; $numero <= 10; $numero++){
        $linhas[] = "$tabuada x $numero = ".($tabuada *$numero);
        }
    return implode("\n", $linhas);
    }

    //echo tabuadaFor(4);

    function tabuadaDoWhile($tabuada){
        $numero = 1;
        do{
            $linhas[] = "$tabuada x $numero = " . ($tabuada * $numero);
            $numero++;
        }while($numero <=10);
        return implode("\n", $linhas);
    }
    //echo tabuadaDoWhile(8);


    function tabuadaGoTo($tabuada){
    $numero = 1;
    inicio:
    $linhas[] = "$tabuada x $numero = " . ($tabuada * $numero);
    if($numero <= 9){
        $numero++;
        goto inicio;
    }
    return implode("\n", $linhas);
    }

    //echo tabuadaGoTo(5);
    //echo "\n";


    function TabuadaForEach($tabuada){
        $lista = [1,2,3,4,5,6,7,8,9,10];
        foreach ($lista as $numero) {
            $linhas[] = "$tabuada x $numero = " . ($tabuada * $numero);
        }
        return implode("\n", $linhas);
    }

    function getTabuada($tabuada){
       $minha_funcao=$this->getForma();
       return $this->$minha_funcao($tabuada);
    }

    function getForma(){
        return $this->estruturaDeRepeticao;
    }

}

    
    $tabuada = new Tabuada($arv[2]);

    

    echo $tabuada->getTabuada
    echo "\n";
