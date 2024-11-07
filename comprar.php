<?php
$host = 'sql110.infinityfree.com';
$username = 'if0_37157941';
$password = 'E6vDqmb5mLtCP4O';
$database = 'if0_37157941_login';

$conn = new mysqli($host, $username, $password, $database);
?>
<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    // Se não estiver logado, redireciona para a página de login
}
if (isset($_POST['logout'])) {
    // Se o botão de logout foi pressionado
    session_destroy(); // Destroi a sessão
    header("Location: index.php"); // Redireciona para a página inicial
    exit(); // Para garantir que o script não continue a execução
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link rel="stylesheet" href="styleprodutos.css">
    <link rel="stylesheet" href="darkmode.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav>

    <div class="banner">

        
        <header>

            <a href="index.php"><img src="logoclbr.png" id="logo1" height="10%" width="10%"></a>
        </header>
<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    echo "Por favor, faça login primeiro.";
    exit();
}

$host = 'sql110.infinityfree.com';
$username = 'if0_37157941';
$password = 'E6vDqmb5mLtCP4O';
$database = 'if0_37157941_login';
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Obtém os produtos do carrinho para o usuário logado
$comprador = $_SESSION['usuario'];
$sql = "SELECT nome, valor FROM carrinho WHERE Comprador = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $comprador);
$stmt->execute();
$result = $stmt->get_result();

echo "<h2>Produtos no Carrinho</h2>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='produto'>";
        echo "<p>Produto: " . $row['nome'] . "</p>";
        echo "<p>Preço: R$" . $row['valor'] . "</p>";
        echo "</div>";
    }
} else {
    echo "Carrinho vazio.";
}

$stmt->close();
$conn->close();
?><?php
$host = 'sql110.infinityfree.com';
$username = 'if0_37157941';
$password = 'E6vDqmb5mLtCP4O';
$database = 'if0_37157941_login';

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['pagamento'])) {
    $comprador = $_GET['pagamento'];

    $stmt = $conn->prepare("DELETE FROM carrinho WHERE Comprador = ?");
    $stmt->bind_param("s", $comprador);

    if ($stmt->execute()) {
        echo "Compra efetuada.";
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "No user specified for deletion.";
}

$conn->close();
?>




    <div class="links2">
    <button id="themeSwitcher" onclick="toggleTheme()" class="sites">  <img src="darktheme.png" height="70px" width="70px"></il></button>
<script>
                function toggleTheme() {
                    document.body.classList.toggle('dark-mode');
        
                    //aplicar tema
                    document.querySelectorAll('.banner, nav, footer, .links2, article, .caixa1, aside, .sitemex, .modal-content, p, .dentro').forEach(function(element) {
                        element.classList.toggle('dark-mode');
                    });
        
                    // salvar tema
                    if (document.body.classList.contains('dark-mode')) {
                        localStorage.setItem('theme', 'dark');
                    } else {
                        localStorage.setItem('theme', 'light');
                    }
                }
                window.onload = function (){
                const savedtheme = localStorage.getItem('theme');

                if (savedtheme === 'dark'){
                    document.body.classList.toggle('dark-mode');    
                      document.querySelectorAll('.banner, nav, footer, .links2, article, .caixa1, aside, .sitemex, .modal-content, p, .dentro').forEach(function(element) {
                        element.classList.toggle('dark-mode');
                    });
                }
}; </script>
                                <div class="sitemex">
                                <a href="index.php"><button><il class="sites">Home</il></button></a>
                                    <a href="empresa.php"><button><il class="sites">Empresa</il></button></a>
                                    <a href="produtos.php"><button><il class="sites">Produtos</il></button></a>
                                                <?php if (isset($_SESSION['id'])): ?>
                <!-- Botão de Logout -->
                <form method="POST" action="" style="display:inline;">
                    <button type="submit" name="logout"><il class="sites">Desconectar</il></button>
                </form>
            <?php else: ?>
                <!-- Botão de Login -->
                <a href="login.php"><button><il class="sites">Logue-se</il></button></a>
            <?php endif; ?>
                                </div>
                                </div>
                            
                        </nav>

    

<script>
function getName(id) {
    fetch(`testecar.php?id=${id}`)
        .then(response => response.json())  // Converte a resposta em JSON
        .then(data => {
            document.getElementById('resultado').innerText = data.nome || 'Nome não encontrado';
        })
        .catch(error => console.error('Erro:', error));  // Captura erros
}
</script>



  

<div class="modal" style="display: none;">
    <span class="close">&times;</span> 
    <div class="modal-content">
        <h2>Comprar</h2>
        <div id="nome"></div> 
        <div id="valor"></div>
        <button id="finalizarCompra" style="border:black; background-color:yellow;">Finalizar Compra</button>
    </div>
</div>
    </div>
    <!-- Script JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var carrinho = []; // Itens do carrinho
            var total = 0; // Total
            var modal = document.querySelector('.modal'); // Modal
            var Fecharmodal = modal.querySelector('.close'); // Botão fechar
            var finalizarCompraButton = document.getElementById('finalizarCompra'); // Botão finalizar
    
            // Adiciona item ao carrinho
            window.adicionarCarrinho = function(nome, valor) { 
                carrinho = [nome + " - R$" + valor.toFixed(2)]; // Item único
                total = valor; // Total do item
                abrirmodal(); // Abre modal
            }
    
            // Abre o modal
            function abrirmodal() {
                document.getElementById("nome").innerHTML = carrinho.join('<br>'); // Mostra itens
                document.getElementById("valor").innerHTML = "Total: R$" + total.toFixed(2); // Mostra total
                modal.style.display = "block"; // Exibe modal
            }
    
            // Fecha o modal
            Fecharmodal.onclick = function() {
                modal.style.display = "none"; // Oculta modal
            }
    
            // Fecha ao clicar fora
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none"; // Oculta modal
                }
            }
    
            // Finaliza compra
            finalizarCompraButton.onclick = function() {
                modal.style.display = "none"; // Oculta modal
            }
        });
    </script>

    <style>
        /* Estilos para o modal */
        #finalizarCompra{
            color:black;
        }
        .modal {
            display: none; /* Escondido por padrão */
            position: fixed; /* Fica na frente de todo o conteúdo */
            z-index: 1; /* Z-index alto para garantir que fica acima de outros elementos */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            color:black;
            background-color: rgba(0,0,0,0.5); /* Fundo escurecido */
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%; /* Largura do modal */
            color:black;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
    .conecte{
        background-color: #3f384400;
    }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            font-size: 20px;
            color:black;
            font-weight: bold;
            padding-bottom: 10px;
        }

        .modal-body {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>


<?php


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['pagamento'])) {
    $comprador = $_GET['pagamento'];

    $stmt = $conn->prepare("DELETE FROM carrinho WHERE Comprador = ?");
    $stmt->bind_param("s", $comprador);

    if ($stmt->execute()) {
        echo "pagamento completo.";
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "No user specified for deletion.";
}

$conn->close();
?>
<footer>
    <div class="contfoot">
        <div id="copyright">Todos os direitos reservados - 2024-2024 - CLBR</div>
    </div>
    <br>
    <nav id="navfoot">
        <a href="contate.php" id="baixo">Contate-nos</a>
        <a href="termos.php" id="baixo">Termos de uso</a>
    </nav>
</footer>
</body>
</html>
