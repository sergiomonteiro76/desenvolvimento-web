<?php
$nome_do_servidor = "localhost";
$login = "username";
$senha = "password";
try {
  $conn = new PDO("mysql:host=$nome_do_servidor;dbname=meu_banco_de_dados", $login, $senha);
  // Ativar o modo de do PDO para gerar exceção, caso necessário.
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado com sucesso!";
} catch(PDOException $e) {
  echo "Conexão falhou!: " . $e->getMessage();
}
?>

