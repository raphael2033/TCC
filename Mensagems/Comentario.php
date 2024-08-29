<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<aside class="Box1" > 
<form id="form" method="post" action="">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <br>
    <label for="horario">Horario:</label>
    <input type="datetime-local" id="horario" name="Horario" required>
    <br>
    <input type="submit" id="submit" value="Submit">
</form>



</form>
</aside>

 <style> 
.Box1 {
    border: 4px solid black;
    border-radius: 4px ;
    height: 60%;
    width: 30%;
}
table {
border: 4px solid;
width: 200px;
}
td {
  width: 100%;
}
</style>
<?php

include ("connex.php");

$nome = !empty($_POST["nome"]);
$Horario = !empty($_POST["Horario"]);
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

<?php
}
$resultado = mysqli_query($conexao, "SELECT * FROM horario");
while ($row = mysqli_fetch_array($resultado))

print("
<table>
<tr>
<td> $row[Nome] 
  $row[Horario] </td>
  <td><button class='apagar'><a  href='deleta.php?deleteid={$row['Id']}'>Apagar</a></button> </td>


")



?> </>
</style>
</body>
</html>