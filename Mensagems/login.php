<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<aside class="Box1" > 
<form  method="post" autocomplete="on" >
<input type="text" name="email" id="email" >
<input type="text" name="senha" id="senha" >
<input type="submit" name="Cadastrar" >


</form>
</aside>

 <style> 
.Box1 {
    border: 4px solid black;
    border-radius: 4px ;
    height: 60%;
    width: 30%;
}
</style>
<?php

include ("connex.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$query = "insert into usuario (email,senha) values ('$email','$senha')";
$resultado = mysqli_query($conexao,$query);
if ($resultado == 1)
{
 ?> 
 <div class="alert1" > 
    Usuario inserido com sucesso  </div>

 <?php 
} else {
 ?>

<div class="alert2" >Erro: usuario já esta estabelecido </div>
<?php
}
echo"
";



?>
</style>
</body>
</html>