<?php
// Configurações do banco de dados
$host = 'localhost';
$db = 'carro';
$user = 'root';
$pass = '';

try {
    // Conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtendo os dados da URL
    $nome = $_GET['nome'];
    $valor = $_GET['valor'];

    // Prepare a instrução SQL
    $stmt = $pdo->prepare("INSERT INTO carrinho (nome, valor) VALUES (:nome, :valor)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':valor', $valor);

    // Executa a instrução
    $stmt->execute();

    echo "Registro adicionado com sucesso!";
    header("Location:produtos.php");
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

