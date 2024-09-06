<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
   <form   method="post" autocomplete="off" > 
   <input type="text"   name="nome"  required >
    <input type="email"   name="email"  required >
    <input type="password" name="senha"   required>
    <input type="submit"  name="submit"  >

   </form> 
</body>
</html>
<?php 
include("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
$nome = $_POST["nome"];
$email  = $_POST["email"];
$senha = $_POST["senha"];

$query = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha')   ";
$resultado = mysqli_query($mysqli, $query);

 
header("Location: " . $_SERVER['PHP_SELF']);
exit();}
?>      