<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <a href="/PB_PHP/MVCex/usuario/cadastrar">Ir para tela Listar</a>
    <h2>Usuários</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>ações</th>
        </th>
        <?php foreach($usuarios as $u): ?>
            <tr>
                <td><?= $u['nome']?></td>
                <td><?= $u['email']?></td>
                <td>próxima aula</td>
              <?php endforeach; ?>
            </tr>
        
</table>
    
</body>
</html>