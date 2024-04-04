<?php
/*Crie um array em PHP com 5 nomes de frutas e imprima cada um utilizando um loop for e a posição na lista, como no exemplo abaixo.
1. Banana
2. Maçã
3. Melão */

$listafrutas = [
    "fruta1" => "Pera",
    "fruta2" => "Uva",
    "fruta3" => "Maçã",
    "fruta4" => "Banana",
    "fruta5" => "Melão",
];

for($i=1;$i<6;$i++){
    echo "{$i}. {$listafrutas["fruta".($i)]}\n";
}
?>