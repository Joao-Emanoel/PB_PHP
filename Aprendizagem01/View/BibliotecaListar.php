<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h2>Biblioteca</h2>
    <a href="/PB_PHP/Aprendizagem01/blibioteca/telaCadastro"> ir para cadastro </a>
    <table border="1">
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Ano da publicação</th>
            <th>Editora</th>
        </tr>
        <?php foreach($Blibiotecas as $id => $u): ?>
            <tr>
                <td><?=$u['titulo']?></td>
                <td><?=$u['Autor']?></td>
                <td><?=$u['ano_publicacao']?></td>
                <td><?=$u['Editora']?></td>
                <td>
                    <a href="/PB_PHP/Aprendizagem01/blibioteca/telaEditar?id=<?= $u['ID']?>">
                            editar
                    </a>
                    <a href="/PB_PHP/Aprendizagem01/blibioteca/excluir?id=<?= $u['ID']?>">
                        excluir
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>