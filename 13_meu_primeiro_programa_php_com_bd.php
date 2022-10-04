<?php
$nome_do_servidor = "localhost";
$login = "username";
$senha = "password";
// Criar Conexão - NOTAR o comando NEW (POO)
$conn = new mysqli($nome_do_servidor, $login, $senha);
// Checar conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão com sucesso!";
?>
