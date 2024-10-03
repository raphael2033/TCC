<?php
// Configurações do banco de dados
$username = 'root';
$password = '';
$database = 'pegarnoticia';
$host = 'localhost';

// Conecta ao banco de dados
$conn = new mysqli($host, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $noticia = $_POST['noticia'];

    // Processa o upload da imagem
    $target_dir = "uploads/"; // Certifique-se de que esta pasta exista e tenha permissões de escrita
    $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verifica se é uma imagem
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagem"]["tmp_name"]);
        if ($check !== false) {
            echo "Arquivo é uma imagem - " . htmlspecialchars($check["mime"]) . ".";
            $uploadOk = 1;
        } else {
            echo "Arquivo não é uma imagem.";
            $uploadOk = 0;
        }
    }

    // Verifica se o arquivo já existe
    if (file_exists($target_file)) {
        echo "Desculpe, o arquivo já existe.";
        $uploadOk = 0;
    }

    // Limita o tamanho do arquivo
    if ($_FILES["imagem"]["size"] > 500000) {
        echo "Desculpe, seu arquivo é muito grande.";
        $uploadOk = 0;
    }

    // Permite certos formatos de arquivo
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
        $uploadOk = 0;
    }

    // Verifica se $uploadOk é igual a 0 por um erro
    if ($uploadOk == 0) {
        echo "Desculpe, seu arquivo não foi enviado.";
    } else {
        // Tenta fazer o upload do arquivo
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
            echo "O arquivo " . htmlspecialchars(basename($_FILES["imagem"]["name"])) . " foi enviado.";

            // Salva os dados no banco de dados
            $sql = "INSERT INTO sua_tabela (titulo, noticia, imagem) VALUES ('$titulo', '$noticia', '$target_file')";
            if ($conn->query($sql) === TRUE) {
                echo "Registro salvo com sucesso.";
            } else {
                echo "Erro ao salvar o registro: " . $conn->error;
            }
        } else {
            echo "Desculpe, houve um erro ao enviar seu arquivo.";
        }
    }
}

// Fecha a conexão
$conn->close();
?>