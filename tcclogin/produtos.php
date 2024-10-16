
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link rel="stylesheet" href="styleloja.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <nav>
    
        <div class="banner">
    
            
            <header>
    
                <a href="home.php"><img src="CANAL-removebg-preview.png" id="logo1" height="10%" width="10%"></a>
            </header>
        <div class="links2">

            <div class="sitemex">
                <a href="home.php"><button><il class="sites">Home</il></button></a>
                    <a href="empresa.php"><button><il class="sites">Empresa</il></button></a>
                    <a href="produtos.php"><button><il class="sites">Produtos</il></button></a>
                    <a href="login.php"><button><il class="sites">Logue-se</il></button></a>
                    </div>
                </div>       
                            </nav>
    
    <a id="voltar"></a>

<div class="abrircarrinho">
    <form>
        <label><div class="cor"><img src="carrinho.png" class="carcor" height="50px" width="50px" /></div><input type="checkbox" id="carrinho" class="car" required/>
        
        


<!-- Link para limpar a tabela -->

        </label>
</div>



<div class="caixote">

<div class="caixa">
    <div class="produtos">
        <img src="camisa3.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Camisa Azul - R$40,00</div></a>
        <button class="comprar" id="botoes" >Comprar</button>
        <a href="testecar.php?nome=Camisa Azul&valor=40" class="carrinho" id="botoes" name="produto1">Adicionar ao carrinho</a>
   
   
   
    </div>

    <div class="produtos">
        <img src="camisa4.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Calça cinza - R$55,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <a href="testecar.php?nome=Calça cinza&valor=55" class="carrinho" id="botoes" name="produto1">Adicionar ao carrinho</a>
    </div>

    <div class="produtos">
        <img src="camisa3.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Blusa - R$120,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <a href="testecar.php?nome=Blusa&valor=120" class="carrinho" id="botoes" name="produto1">Adicionar ao carrinho</a>
    </div>

    <div class="produtos">
        <img src="camisa4.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Touca - R$40,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <a href="testecar.php?nome=Touca&valor=40" class="carrinho" id="botoes" name="produto1">Adicionar ao carrinho</a>
    </div>
</div>

<div class="caixa">
    <div class="produtos">
        <img src="camisa3.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Tenis - R$100,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <a href="testecar.php?nome=Tenis&valor=100" class="carrinho" id="botoes" name="produto1">Adicionar ao carrinho</a>
    </div>

    <div class="produtos">
        <img src="camisa4.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Chinelo - R$44,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <a href="testecar.php?nome=Chinelo&valor=44" class="carrinho" id="botoes" name="produto1">Adicionar ao carrinho</a>
    </div>

    <div class="produtos">
        <img src="camisa3.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Oculos Escuros - R$110,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <a href="testecar.php?nome=Oculos Escuros&valor=110" class="carrinho" id="botoes" name="produto1">Adicionar ao carrinho</a>
    </div>

    <div class="produtos">
        <img src="camisa4.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Boné - R$74,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <a href="testecar.php?nome=Boné&valor=74" class="carrinho" id="botoes" name="produto1">Adicionar ao carrinho</a>
    </div>
</div>

</div>



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

</body>
<footer>
    <div class="contfoot">

        <div id="copyright">Todos os direitos reservados - 2024-2024 - CLBR</div>
</div>
<br>
<nav id="navfoot">
    <a href="contate.html">Contate-nos</a>
    <a href="termos.html">Termos de uso</a>
</nav>
</footer>

</body>
</html>
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'carro';

// Conecta ao banco de dados
$conn = new mysqli($host, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se a requisição é para limpar a tabela
if (isset($_GET['clear_table'])) {
    $sql = "DELETE FROM carrinho"; // Remove todos os registros da tabela
    // Para usar TRUNCATE, descomente a linha abaixo e comente a anterior
    // $sql = "TRUNCATE TABLE carrinho"; 

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "" . $conn->error;
    }
}

// Lógica para mostrar os dados
$sql = "SELECT nome, valor FROM carrinho";
$result = $conn->query($sql);

// Verifica se há resultados
if ($result->num_rows > 0) {
    echo "<ul class='dentro'>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row["nome"]) . "  -  " . htmlspecialchars($row["valor"]) . ",00R$" . "</li><br>";
    }
    echo "<br/><a id='comprar' href='?clear_table=true'>Realizar Compra</a>";
    echo "<br/><a id='limpar' href='?clear_table=true'>Limpar Carrinho</a>";
    echo "</ul>";
} else {
    
}
// Fecha a conexão
$conn->close();
?>