<html>
<body>
<style>
body{
background-image: url(tintaseca.jpg);
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
}
*{ margin: 0px; padding: 0px; }
         input{ display: block; height: 40px; width: 350px; margin: 10px;
            margin-left: 50%;
border-radius: 30px; border: 1px solid rgb(177, 162, 190); font-size: 16pt; padding: 10px 20px;
background-color: rgb(255,255,255,0.01); } 
div#corpo-form{ background-color: rgb(129, 172,
172); width: 420px; margin: 160px auto 0px auto;
margin-left:60%; } 
div#corpo-form-card{ /*background-color:
rgb(129, 172, 172);*/ width: 420px; margin: 50px auto 0px auto; } 
body{ background-image:
url("tecno.jpg") } 
div#corpo-form h1{ text-align: center; }
 input[type=submit]{ background-color:rgb(117, 117, 170); margin-left: 29px; height: 60px; cursor: pointer; } 
 a{ color: aqua; text-decoration: none; text-align: center; display: block; } 
a:hover{ text-decoration: underline; }
.f1{
transition: background 4s ;
background-color:blueviolet;
opacity: 0.7;
color: black;
margin-left:0%;
padding-bottom: 10px;
text-decoration: none;
border: 1px solid black;
border-radius: 100px;
 }   
 body {
    background-image: url(tintaseca.jpg);
 }
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 200px;
  background-color: grey;
  position: relative;
  margin-top: 0% }

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  position: relative; }

tr:nth-child(even) {
  background-color: #dddddd;
  position: relative;  }
  .editar{
    padding:auto;
    border: 12px solid lightgreen ;
    background-color: lightgreen;
    width: 50px;
  }
  .apagar{
    padding:auto;
    border: 12px solid lightcoral ;
    width: 50px;
    background-color: lightcoral;
  }
 .f2{
transition: background 4s ;
background-color:blueviolet;
opacity: 0.7;
color: black;
padding-bottom: 10px;
margin-left:0%;
text-decoration: none;
border: 1px solid black;
border-radius: 100px; 
 } 
    .butao2 {
    background-color: aqua;
    }
 

form {
margin-top: 1%;
margin-left: 10%;
position: absolute;

}
</style>

<center>
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
</head>
<body>
    <center>
        <form method="post" autocomplete="on">
            <label>Email <input class="f1" type="text" name="email"></label> 
            <label>Senha <input class="f2" type="password" id="senha" name="Senha"></label>
            <input type="checkbox" onclick="togglePasswordVisibility()"> Mostrar Senha
            <input class="butao" type="submit">
        </form>

</body>
</html>
<?php
    $titulo = "Lista de Usuários";
    include "bancotinta.php";


    
    

    if(isset($_POST) && !empty($_POST))
    {
        if(empty($_POST["email"]))
        {

           
?>

        <div class="alert alert-danger">
            O campo Login não pode estar vazio
        </div>

        <?php
        }
        
        else if(empty($_POST["Senha"]))
        {
            ?>
            <div class="alert alert-danger">
                O campo Senha não pode estar vazio
        </div>
        <?php
        
    }
    else
    {
        include "bancotinta.php";
        //$conexao;
        $email = $_POST["email"];
        $senha = $_POST["Senha"];



        $query = "insert into observador(email,senha) values('$email','$senha')";
        $resultado = mysqli_query($conexao,$query);
        if($resultado == 1)
        
        {
            ?>
                <div class="alert alert-sucesso">
                    Usuário inserido com sucesso.
                    
        </div>

        <?php

        }


    }

}




$servidor="localhost";
$useremail="root";
$password="";
$dbemail="tinta";

$conexao = mysqli_connect($servidor,$useremail,$password) or die ("Não foi possível conectar");
mysqli_select_db( $conexao, $dbemail);

$resultado = mysqli_query($conexao, "SELECT * FROM  observador" );
while ($row = mysqli_fetch_assoc($resultado))
echo "
<table>
<tr>
<td> <br>$row[email] </td>
<td> <br>$row[senha] </td>
<td> <button class='editar'>editar</button> </td>
<td><button class='apagar'><a href='deleta.php?deleteid={$row['email']}'>Apagar</a></button> </td>


"
?></center>