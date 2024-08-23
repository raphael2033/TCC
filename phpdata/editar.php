<?php 
$servidor="localhost";
$username="root";
$password="";
$sql="tinta";

$conexao = mysqli_connect($servidor,$username,$password) or die ("Não foi possível conectar");
mysqli_select_db( $conexao, $sql);

$id= "";
$email= "";
$senha= "";
$date= "";

// mostra get

?>


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
 .f3{
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
 

form {
margin-top:15%;
margin-left: 35%;
position: absolute;

}
</style>

<form action="tintasecantephp.php" method="post" autocomplete="on">
<label>    Email<input class="f1" type="text" name="email"> </label> 
<label> Senha <input  class="f2" type="password" name="Senha"></label>
<label> Idade <input class="f3" type="date" name="Idade"></label>
    <input class="butao" type="submit">
</form> 

</body>
</html>