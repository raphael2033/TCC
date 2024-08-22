
<?php
// Inclua o arquivo de conexão
include 'conexao.php';

// Obtenha dados do formulário
$programa = $_POST['programa'];
$horario = $_POST['horario'];

// Prepare a query SQL
$sql = "INSERT INTO programaçao (programa, horario) VALUES (?, ?)";

// Prepare a declaração
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $programa, $horario);

// Execute a declaração
if ($stmt->execute()) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $stmt->error;
}

// Fechar conexão
$stmt->close();
$conn->close();
?>