<?php
// Configurações do banco de dados
$servername = "sql110.infinityfree.com"; // Substitua pelo seu servidor
$username = "if0_37157941";           // Substitua pelo seu nome de usuário do banco de dados
$password = "E6vDqmb5mLtCP4O";           // Substitua pela sua senha do banco de dados
$dbname = "if0_37157941_tcc";             // Substitua pelo nome do seu banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>
