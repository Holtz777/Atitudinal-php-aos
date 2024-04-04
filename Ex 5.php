<?php

/*Crie um array associativo em PHP com as seguintes informações: nome, idade e cidade. Verifique se a idade é maior ou menor que 18 e imprima essa informação abaixo.

- João é de Campinas e tem 19 anos, logo, pode dirigir.
- Pedro é de Sumaré e tem 16 anos, logo, não pode dirigir.
- José é de Ribeirão Preto, e tem 18 anos, logo, pode dirigir.*/

$pessoas = [
    [
        "nome" => "João",
        "idade" => 19,
        "cidade" => "Campinas",
        "pode dirigir?" => NULL,
    ],
    [
        "nome" => "Pedro",
        "idade" => 16,
        "cidade" => "Sumaré",
        "pode dirigir?" => NULL,
    ],
    [
        "nome" => "José",
        "idade" => 18,
        "cidade" => "Ribeirão Preto",
        "pode dirigir?" => NULL,
    ],
];

for($i=0;count($pessoas)>$i;$i++){
    
    if($pessoas[$i]["idade"]>= 18){
        $pessoas[$i]["pode dirigir?"] = "pode dirigir";
    }else {
        $pessoas[$i]["pode dirigir?"] = "não pode dirigir";
    }
    echo "- " . $pessoas[$i]["nome"] . " é de " . $pessoas[$i]["cidade"] . " e tem " . $pessoas[$i]["idade"] . ", logo, " . $pessoas[$i]["pode dirigir?"] . "\n" ;
}
?>