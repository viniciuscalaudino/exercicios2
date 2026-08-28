<?php
$preco = 500;

if($preco > 500){
    $desconto = ($preco * 0.15);
    echo "Preço original: R$", $preco, "<br>";
    echo "Desconto aplicado: R$", $desconto, "<br>";
    echo "Preço final: R$", $preco - $desconto, "<br>";
}
elseif($preco >= 200 && $preco <= 500 ){
    $desconto = ($preco * 0.10);
    echo "Preço original: R$", $preco, "<br>";
    echo "Desconto aplicado: R$", $desconto, "<br>";
    echo "Preço final: R$", $preco - $desconto, "<br>";
}
else{
    $desconto = ($preco * 0.05);
    echo "Preço original: R$", $preco, "<br>";
    echo "Desconto aplicado: R$", $desconto, "<br>";
    echo "Preço final: R$", $preco - $desconto, "<br>";
}