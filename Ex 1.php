<?php
//Crie uma function em PHP que receba um parâmetro e mostre um echo se um número é positivo, negativo ou zero utilizando if/else.

$number = -10;

function pos_neg ($number){
    if($number == 0){
     echo"o numero é zero";
        
    }
    else if($number < 0){
       echo"o numero é negativo";
        
    }
    else if($number > 0){
       echo"o numero é positivo";
        
    }
        }

pos_neg($number);

?>