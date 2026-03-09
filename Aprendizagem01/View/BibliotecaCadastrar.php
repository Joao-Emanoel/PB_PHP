<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
</head>
<body>
    <a href="/PB_PHP/Aprendizagem01/biblioteca/listar">Ir para tela Listar</a>
    <form method="POST" action="salvar">
        <input type="text" name="titulo" placeholder="Titulo do livro" require>
        <input type="text" name="autor" placeholder="Autor do livro" require>
        <input type="date" name="ano_publicacao" placeholder="Ano de publicação do livro" require>
        <input type="text" name="editora" placeholder="Editora do livro" require>        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>