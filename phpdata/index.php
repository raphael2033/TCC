<php
include('conexao.php');

if(asset($_POST['email']) || isset($_POST['senha'])) {

       if(strien($_POST['email'])) == 0) {
        echo "Preencha seu email";
       }



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Acesse sua conta</h1>    
<form action="" method="POST">
   <p>
<label>Email</label>
<input type="text" name="Email">
</p>
<p>
<label for="Senha"></label>
<input type="password" name="senha">
</p>
<p>

<button type="submit">Entrar</button>

</p>
















</form>


</body>
</html>