<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Upload de Imagem</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    
    <form action="conexaonote.php" method="post" enctype="multipart/form-data">
        <div class="card">
        <h1>Enviar Noticia</h1>
        <div class="card-cont">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br><br></div>
        <div class="card-cont">
        <label for="noticia">Notícia:</label>
        <textarea name="noticia" required></textarea><br><br></div>
        <div class="card-cont">
        <input type="date" name="data_envio" required></div>
        <div class="card-cont">
        <label for="imagem">Escolha uma imagem:</label>
        <input type="file" name="imagem" accept="image/*" required><br><br></div>
        <div class="card-cont">
        <input type="submit" value="Enviar"></div>
</div>
    </form>
</body>
</html>