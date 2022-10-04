<?php
function minha_funcao_teste($param) {
  $x = 10; // escopo local
  echo "<p>O valor da variável é: $x</p><br>";
  echo "<p>O valor do parâmetro é: $param</p><br>";
} 
minha_funcao_teste(20);
echo "<p>Fim da execução</p>";
?>

