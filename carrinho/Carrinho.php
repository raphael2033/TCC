<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>
<h2 class="titulo">Vendas</h2>
<div class="carrinho"> 
<?php 

// Conexão com o banco de dados
$usuario = 'root';
$senha = '';
$database = 'tcc';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
   die("Falha ao conectar: " . $mysqli->error);
}

// Produtos disponíveis
$items = array(
    ['nome'=>'Produto 1', 'imagem'=>'imagem6.png','preco'=>'300'],
    ['nome'=>'Produto 2', 'imagem'=>'imagem1.jfif','preco'=>'100'],
    ['nome'=>'Produto 3', 'imagem'=>'imagem2.jfif','preco'=>'150'],
    ['nome'=>'Produto 4', 'imagem'=>'imagem3.jfif','preco'=>'500'],
    ['nome'=>'Produto 5', 'imagem'=>'imagem4.jfif','preco'=>'2700'],
    ['nome'=>'Produto 6', 'imagem'=>'imagem5.png','preco'=>'001'],
);

// Mostrar os produtos e o botão para adicionar ao carrinho
foreach ($items as $key => $value) {
?>
<aside>
    <div class="produtos">
        <img src="<?php echo $value['imagem']; ?>" alt="Imagem do produto">
        <p><?php echo $value['nome']; ?> - R$ <?php echo $value['preco']; ?></p>
        <a href="?adicionar=<?php echo $key; ?>">Adicionar ao Carrinho</a>
    </div>
</aside>
<?php 
}

// Logica para adicionar o produto ao carrinho
if (isset($_GET['adicionar'])) {
    $idproduto = (int) $_GET['adicionar'];
    if (isset($items[$idproduto])) {
        if (isset($_SESSION['carrinho'][$idproduto])) {
            // Se o item ja esta no carrinho, aumenta a quantidade
            $_SESSION['carrinho'][$idproduto]['quantidade']++;
        } else {
            // Caso contrario, adiciona o item ao carrinho
            $_SESSION['carrinho'][$idproduto] = array(
                'quantidade' => 1,
                'nome' => $items[$idproduto]['nome'],
                'preco' => $items[$idproduto]['preco']
            );
        }
        echo '<script>alert("Item adicionado ao carrinho!");</script>';
    } else {
        echo "Esse produto não existe.";
    }
}

// Exibir o carrinho com os itens adicionados
if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
    echo "<h3>Seu Carrinho:</h3>";
    echo "<ul>";
    $total = 0;
    foreach ($_SESSION['carrinho'] as $id => $produto) {
        $subtotal = $produto['quantidade'] * $produto['preco'];
        $total += $subtotal;
        echo "<li>" . $produto['nome'] . " - Quantidade: " . $produto['quantidade'] . " - Subtotal: R$ " . $subtotal . "</li>";
    }
    echo "</ul>";
    echo "<p>Total: R$ " . $total . "</p>";
    echo '<a href="?checkout=true">Finalizar Compra</a>';
} else {
    echo "<p>Seu carrinho está vazio.</p>";
}

// Lógica para finalizar a compra
if (isset($_GET['checkout'])) {
    if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
        $total = 0;
        $itens = 0;

        // Calcular o total e o número de itens no carrinho
        foreach ($_SESSION['carrinho'] as $produto) {
            $total += $produto['quantidade'] * $produto['preco'];
            $itens += $produto['quantidade'];
        }

        // Salvar no banco de dados (Tabela carrinho)
        $stmt = $mysqli->prepare("INSERT INTO carrinho (items, total) VALUES (?, ?)");
        $stmt->bind_param("ii", $itens, $total);

        if ($stmt->execute()) {
            echo '<script>alert("Compra finalizada com sucesso!");</script>';
            // Limpar o carrinho após a compra
            unset($_SESSION['carrinho']);
        } else {
            echo "Erro ao finalizar a compra.";
        }
    } else {
        echo "<p>O carrinho está vazio.</p>";
    }
}

?>
</div>

</body>
</html>

<!-- Estilos CSS -->


<style> 
body { font-family: Arial, Helvetica, sans-serif;
background-color: #069;

}
* { margin: 0 ; padding: 0; box-sizing: border-box;}
.carrinho {
    display: flex;
    
}

aside {
    height: 10%;
    display: flex;
    border: 4px solid;
    padding: 20px;
}
div.produtos {
width: 250px  ;
height: 250px;
text-align: center;
display: flex;
padding: 20px;
background-color: white ;
border: 4px solid;

}
img { width: 50%;
text-align: center;}

</style>