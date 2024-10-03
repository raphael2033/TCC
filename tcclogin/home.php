
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="stylehome.css">
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

                                    <a href="enviarnoticia.php"><button>Postar noticia</button></a>
<article>
<?php
// Configurações do banco de dados
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pegarnoticia';

// Conecta ao banco de dados
$conn = new mysqli($host, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT titulo, noticia, imagem FROM sua_tabela";
$result = $conn->query($sql);

// Verifica se há resultados
if ($result->num_rows > 0) {
    // Exibe os dados
    while ($row = $result->fetch_assoc()) {
        // Exibe a imagem, se existir
        if (!empty($row["imagem"])) {
            echo "<div class='caixa1'>";
            echo "<img id='thumb'src='" . htmlspecialchars($row["imagem"]) . "' alt='" . htmlspecialchars($row["titulo"]) . "' style='max-width: 300px;'><br>";
        }
        
        echo "<h2>" . htmlspecialchars($row["titulo"]) . "</h2>";
        echo "<p id='noticia'>" . htmlspecialchars($row["noticia"]) . "</p>";
        echo "</div>";
    }
} else {
    echo "0 resultados";
}

// Fecha a conexão
$conn->close();
?>


</article>


<aside> 
 <p>PROGRAMAÇÃO DO DIA</p>
 <?php 
 include("connex.php");
 if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
 $Nome = $_POST["Nome"];
 $Data = $_POST["Data"];
 $query = "INSERT INTO agenda (Nome, Data) VALUES ('$Nome', '$Data')";
 try {
     // Execute the query
     $resultado = mysqli_query($conexao, $query);
     if ($resultado) {
         echo '<div class="alert1">Comentario feito: </div>';
     }
 } catch (mysqli_sql_exception $e) {
     // Check if the error is due to a duplicate entry
     if ($e->getCode() == 1062) { // 1062 is the MySQL error code for duplicate entry
         echo '<div class="alert2">Erro: Horario já está marcado.</div>';
     } else {
         echo '<div class="alert2">Erro ao inserir os dados: ' . $e->getMessage() . '</div>';
     }
 }
 
 header("Location: " . $_SERVER['PHP_SELF']);
 exit();
}
 $resultado = mysqli_query($conexao, "SELECT * FROM agenda");
 while ($row = mysqli_fetch_array($resultado))
 echo"
 <table>
 <tr>
 <td class='mensagems' > $row[Nome]  </td></table>
 </tr>
 <table>
 <tr class='mensagems'>
 
 </tr>
 </table>
 <style>
 .mensagems {
    border: 3px solid;
 }
 .imgtexto {
    width: 50px; }
 </style>
 ";
 
 
 
 
 ?>
<ul class="horarios">
   
<ol class="horariosol"        >08:00 </ol>
<ol class="horariosol"        >09:00</ol>
<ol class="horariosol"        >10:00</ol>
<ol class="horariosol"        >10:30</ol>
<ol class="horariosol"        >11:00</ol>
<ol class="horariosol"        >12:00</ol>
<ol class="horariosol"        >13:00</ol>
<ol class="horariosol"        >15:00</ol>
<ol class="horariosol"        >16:00</ol>
<ol class="horariosol"        >17:00</ol>
<ol class="horariosol"        >18:00</ol>
<ol class="horariosol"        >18:30</ol>
<ol class="horariosol"        >19:00</ol>
<ol class="horariosol"        >20:00</ol>
<ol class="horariosol"        >22:00</ol>
<ol class="horariosol"        >22:30</ol>
<ol class="horariosol"       >23:30</ol>
</ul>

 </aside>




<footer>
    <div class="contfoot">

        <div id="copyright">Todos os direitos reservados - 2024-2024 - CLBR</div>
</div>
<br>
<nav id="navfoot">
    <a href="contate.html" id="baixo">Contate-nos</a>
    <a href="termos.html" id="baixo">Termos de uso</a>
</nav>
</footer>

</body>
</html>