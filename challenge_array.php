<?php

$lista = [];
// gerando uma lista com 10 números inteiros aleatórios
for ($x=0;$x<10;$x++): 
    $aleatorio = rand(-50, 50);
    array_push($lista, $aleatorio);  
endfor;

$paresLocalizados = [];
// verificando os pares que somados, dá 8
foreach ($lista as $par1){
    foreach ($lista as $par2){
        if (($par1+$par2)==8){
            $pares = array($par1, $par2);
            sort($pares);
            array_push($paresLocalizados, '('.$pares[0].','.$pares[1].')');
        }
    }
}
$paresNaoDuplicados = array_unique($paresLocalizados);
if (count($paresNaoDuplicados)>0){
    echo "Array gerado:\n";
    print_r($lista);
    echo "Pares encontrados que somados dá 8 [".count($paresNaoDuplicados)."]:\n";
    print_r($paresNaoDuplicados);
} else{
    echo "Array gerado:\n";
    print_r($lista);
    echo "Nenhum par localizado.";
}

