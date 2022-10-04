<?php
/* Vetor */
$numeros = array(61,542,973,764,345,956,877,328,659,410);
$n = count($numeros);
$maior = $numeros[0];
for($i = 0; $i < 10; $i++){
    if($numeros[$i] > $maior){
       $maior=$numeros[$i];
    }   
}
echo "O maior elemento é: ",$maior, "<br>";
echo "<br>";
?>

