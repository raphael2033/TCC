<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylehome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bannaer">
        <nav>
            <div class="links2">
                                <div class="sitemex">
                                    <a href="home.php"><il class="sites">Home</il></a>
                                    <a href="empresa.php"><il class="sites">Empresa</il></a>
                                    <a href="produtos.php"><il class="sites">Produtos</il></a>
                                    </div>
                                </div>
                            
                        </nav>
        <header>

            <a href="home.php"><img src="CANAL-removebg-preview.png" id="logo1" height="10%" width="10%"></a>
        </header>



<article>

    <ol><a href=""><div class="caixa1">
        <img src="juan.jpg" id="thumb"><h3 id="noticia">Morre Juan Izquierdo durante jogo.<br><strong>
        Durante as oitavas de final da Copa Libertadores, o zagueiro abruptamente caiu no gramado interrompento imediatamente o jogo. Ele teve uma arritimia cardiaca, e infelismente veio a falecer no local. </strong></h3>
    </div></a></ol>
    
 <ol>   <a href=""><div class="caixa1">
        <img src="" id="thumb"><h3 id="noticia">azsdojisaifjofijoiawsfjo</h3>
    </div></a> </ol></Ul>
  
    <a href=""><div class="caixa1">
        <img src="" id="thumb"><h3 id="noticia">asrihiofuhiufghueirhg</h3>
    </div></a>
    
    <a href=""><div class="caixa1">
        <img src="" id="thumb"><h3 id="noticia">azsdojisaifjofijoiawsfjo</h3>
    </div></a> </ul>
 
 
                            
</article>
 <aside> 


 
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
    border: 4px solid;
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


<style>
    .horarios {
   position: relative   ;
float: right;
        top: -37.8%;
        width: 50px;
  
    }
    .horariosol {
        border: 4px solid;
        margin: 2px;
    }
</style>
 </aside>

<footer>
    <div class="contfoot">

        <div id="copyright">Todos os direitos reservados - 2024-2024 - CLBR</div>
</div>
<br>
<nav id="navfoot">
    <a href="" id="baixo">Contate-nos</a>
    <a href="" id="baixo">Termos de uso</a>
</nav>
</footer>

<a href="home.php" class="voltar" id="Voltar">return</a>
</body>
</html>