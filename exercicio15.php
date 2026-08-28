<?php
$numero = 4;

if($numero % 5 == 0 && $numero % 3 == 0){
    echo "FizzBuzz";
}
elseif($numero % 5 == 0){
    echo "Fizz";
}
elseif($numero % 3 == 0){
    echo "Buzz";
}
else{
    echo $numero, " não é múltiplo nem de 3 e 5 .";
}