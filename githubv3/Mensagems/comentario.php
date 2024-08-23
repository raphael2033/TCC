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
<input type="text" name="nome" id="nome" >
<input type="datetime-local" name="Horario" id="Horario" > 
<input type="submit" name="comentar" >


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

$nome = $_POST["nome"];
$Horario = $_POST["Horario"];
$query = "insert into Horario (nome,Horario) values ('$nome','$Horario')";
$resultado = mysqli_query($conexao,$query);
if ($resultado == 1)
{
 ?> 
 <div class="alert1" > 
   Comentario feito: </div>

 <?php 
} else {
 ?>

<div class="alert2" >Erro: usuario já esta estabelecido </div>
<?php
}
$resultado = mysqli_query($conexao, "SELECT * FROM horario");
while ($row = mysqli_fetch_array($resultado))
echo"
<table>
<tr>
<td> <br>$row[Horario] </td>
";



?>
</style>
</body>
</html>