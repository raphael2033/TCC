<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Upload de Imagem</title>
</head>
<body>
    <h1>Enviar Imagem</h1>
    <form action="conexaonote.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br><br>
        
        <label for="noticia">Notícia:</label>
        <textarea name="noticia" required></textarea><br><br>
        
        <label for="imagem">Escolha uma imagem:</label>
        <input type="file" name="imagem" accept="image/*" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>