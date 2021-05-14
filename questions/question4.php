<?php

$str = "FabricaInfo";

function count_uppercase($string) {
    // Colocar o valor da string para minusculo
    $lower_case = strtolower($string);

    // Contar quantidade de letras minusculas tem em comum com o $lower_case
    $similar = similar_text($string, $lower_case);

    // Subtrair o valor da quantidade da original - a quantidade de letras minusculas
    return strlen($string) - $similar;
}

var_dump("Quantidade de letas maiúsculas: " . count_uppercase($str));
