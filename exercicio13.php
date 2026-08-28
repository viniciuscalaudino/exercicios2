<?php
$lado1 = 5;
$lado2 = 5;
$lado3 = 8;

$verificador = ($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1);

if(!$verificador){
    echo "Não é um triângulo";
}
elseif($lado1 == $lado2 && $lado2 == $lado3){
    echo "Triângulo equilátero";
}
elseif($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
    echo "Triângulo isósceles";
}
else{
    echo "Triângulo escaleno";
}