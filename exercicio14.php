<?php
$idade = 25;

if($idade <= 11){
    echo "Criança";
}
elseif($idade >= 12 && $idade <= 17){
    echo "Adolescente";
}
elseif($idade >= 18 && $idade <= 29){
    echo "Jovem adulto";
}
elseif($idade >= 30 && $idade <= 59){
    echo "Adulto";
}
else{
    echo "Idoso";
}