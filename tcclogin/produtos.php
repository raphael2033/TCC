

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link rel="stylesheet" href="styleloja.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
    
        <div class="banner">
    
            
            <header>
    
                <a href="home.php"><img src="CANAL-removebg-preview.png" id="logo1" height="10%" width="10%"></a>
            </header>
        <div class="links2">

            <div class="sitemex">
                <a href="home.php"><button><il class="sites">Home</il></button></a>
                    <a href="empresa.php"><button><il class="sites">Empresa</il></button></a>
                    <a href="produtos.html"><button><il class="sites">Produtos</il></button></a>
                    <a href="login.php"><button><il class="sites">Logue-se</il></button></a>
                    </div>
                </div>       
                            </nav>
    
    <a id="voltar"></a>


        <div class="programação">
            <h3>Programção do dia</h3>
        </div>

<div class="abrircarrinho">
    <form>
        <label><div class="cor"><img src="carrinho.png" class="carcor" height="50px" width="50px" /></div><input type="checkbox" id="carrinho" class="car" required/>
        <ul class="dentro">
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul></label>
</div>



<div class="caixote">

<div class="caixa">
    <div class="produtos">
        <a href="camisa1.html"><img src="camisa3.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Camisa azul - R$25,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <button class="carrinho" id="botoes" name="produto1">Adicionar ao carrinho</button>
    </div>

    <div class="produtos">
        <a href=""><img src="camisa4.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Camisa cinza - R$24,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <button class="carrinho" id="botoes">Adicionar ao carrinho</button>
    </div>

    <div class="produtos">
        <a href=""><img src="camisa3.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Camisa azul - R$24,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <button class="carrinho" id="botoes">Adicionar ao carrinho</button>
    </div>

    <div class="produtos">
        <a href=""><img src="camisa4.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Camisa cinza - R$24,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <button class="carrinho" id="botoes">Adicionar ao carrinho</button>
    </div>
</div>

<div class="caixa">
    <div class="produtos">
        <a href="camisa1.html"><img src="camisa3.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Camisa azul - R$25,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <button class="carrinho" id="botoes">Adicionar ao carrinho</button>
    </div>

    <div class="produtos">
        <a href=""><img src="camisa4.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Camisa cinza - R$24,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <button class="carrinho" id="botoes">Adicionar ao carrinho</button>
    </div>

    <div class="produtos">
        <a href=""><img src="camisa3.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Camisa azul - R$24,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <button class="carrinho" id="botoes">Adicionar ao carrinho</button>
    </div>

    <div class="produtos">
        <a href=""><img src="camisa4.jfif" id="roup" height="50%" width="50%">
        <div class="teste">Camisa cinza - R$24,00</div></a>
        <button class="comprar" id="botoes">Comprar</button>
        <button class="carrinho" id="botoes">Adicionar ao carrinho</button>
    </div>
</div>

</div>


<script>
    const input = document.getElementById('carrinho');
    let timer;

    input.addEventListener('input', () => {
        clearTimeout(timer); // Limpa o temporizador anterior
        timer = setTimeout(() => {
            if (input.validity.valid) {
                input.classList.add('delayed-valid');
            } else {
                input.classList.remove('delayed-valid');
            }
        }, 90000); // 0.5 segundos de atraso
    });

    input.addEventListener('blur', () => {
        input.classList.remove('delayed-valid'); // Remove a classe quando o campo perde o foco
    });
</script>

</body>
<footer>
    <div class="contfoot">

        <div id="copyright">Todos os direitos reservados - 2024-2024 - CLBR</div>
</div>
<br>
<nav id="navfoot">
    <a href="contate.html">Contate-nos</a>
    <a href="termos.html">Termos de uso</a>
</nav>
</footer>

</body>
</html>