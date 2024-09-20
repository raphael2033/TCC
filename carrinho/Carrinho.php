<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
<h2 class="titulo" >vendas</h2>
 <div class="carrinho"> 
<?php 

$usuario = 'root';
$senha = '';
$database = 'tcc';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
   die("falha ao conectar" . $mysqli->error);
}

$items = array(['nome'=>'produto1', 'imagem '=>'imagem6.png','preco'=>'300'],
['nome'=>'produto2','imagem '=>'imagem1.jfif','preco'=>'100'],
['nome'=>'produto3','imagem '=>'imagem2.jfif','preco'=>'150'],
['nome'=>'produto4','imagem '=>'imagem3.jfif','preco'=>'500'],
['nome'=>'produto5','imagem '=>'imagem4.jfif','preco'=>'2700'],
['nome'=>'produto6','imagem '=>'imagem5.png','preco'=>'001'],
);
foreach ($items as $key => $value) {





?>

<aside>
<div class="produtos">
<img src="<?php   echo $value['imagem '] ?>" alt="">
<a href="?adicionar=<?php echo $key; ?>">Adicionar ao Carrinho</a>
</div>

</aside>
<?php 
}

?>
<?php
if (isset($_GET['adicionar'])) {
    $idproduto = (int) $_GET['adicionar'];
    if (isset($items[$idproduto])) {

        if(isset($items[$idproduto]['adicionar'])) {
            if(isset($_SESSION[$idproduto])){
                $_SESSION[$idproduto]['quantidade']++;
             }else {
$_SESSION[ $idproduto]=array ('quantidade' => 1, 'nome' =>$items[$idproduto]['nome'],'preco' =>$items[$idproduto]['preco'] );
echo ' <script> alert("item adicionado");';
                }
            }






        }
    } else {
        echo "Esse produto não existe.";
    }

?>

</div>

</body>
</html>


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