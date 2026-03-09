<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Tela Editar</title>
    </head>
    <body>
        <h2>Editar usuário</h2>
        <a href="/PHP_PBE_2IDS_2025/Aprendizagem01/Biblioteca/listar">Ir para tela Listar</a>
        
        <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
            <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
            <input type="text" name="titulo" value="<?= htmlspecialchars($blibioteca['titulo'])?>" require>
            <input type="text" name="autor" value="<?= htmlspecialchars($blibioteca['autor'])?>" require>
            <input type="date" name="ano_publicacao" value="<?= htmlspecialchars($blibioteca['ano_publicacao'])?>" require>
            <input type="text" name="editora" value="<?= htmlspecialchars($blibioteca['editora'])?>" require>
            <button type="submit">Editar</button>
        </form>
    </body>
</html>
