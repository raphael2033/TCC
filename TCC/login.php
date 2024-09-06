<?php
include('conexao.php');

if(isset($_POST['email']) && isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execucao do codigo SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location:home.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div id="borda">
            <form class="form" method="POST" action="">
                <div class="card">
                    <div class="card-top">
                        <img class="imglogin" src="" alt="">
                        <h2 class="title">Realize a conexão</h2>
                    </div>
                    <div class="card-cont">
                        <label>Email:</label>
                        <input type="email" name="email" id="email" placeholder="Insira o Email" required/> 
                    </div>
                    <div class="card-cont">
                        <label>Senha:</label>
                        <input type="password" name="senha" id="senha" placeholder="Insira a senha" required>
                        <input type="checkbox" onclick="togglePasswordVisibility()"> Mostrar Senha
                    </div>
                    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("senha");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
                    <div class="card-cont">
                        <input type="submit" value="Entrar">
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/gh/brunoalbim/devtools-detect/index.js"></script>
<script>
if (window.devtools.isOpen === true) {
      window.location = "https://endereco-do-seu-site.com.br/conteudo-protegido.php";
    }
  	window.addEventListener('devtoolschange', event => {
      if (event.detail.isOpen === true) {
        window.location = "https://endereco-do-seu-site.com.br/conteudo-protegido.php";
      }
  	});
</script>
<a href="Cadastro.php"> Sem conta? criar login</a>

</body>
</html>