<?php
/* Vetor */
$numeros = array(61,542,973,764,345,956,877,328,659,410);
$maior = $numeros[0];
foreach ($numeros as $elem) {
  if($elem > $maior){
     $maior=$elem;
  }   
}
echo "O maior elemento é: ",$maior, "<br>";
echo "<br>";
?>

