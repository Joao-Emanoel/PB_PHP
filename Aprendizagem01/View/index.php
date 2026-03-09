<?php

require_once "Controller/BibliotecaController.php";

$bibliotecaController = new BibliotecaController();
$route = $_GET["route"] ?? '';

switch ($route) {
    case 'Livro/telaCadastro':
        $bibliotecaController->telaCadastro();
        break;

    case "Livro/salvar";
        $bibliotecaController->cadastrar();
        break;

    case "Livro/listar":
        $bibliotecaController->listarLivros();
        break;

    case "Livro/telaEditar":
        $bibliotecaController->telaEditar();
        break;

    case "Livro/atualizar":
        $bibliotecaController->atualizar();
        break;

    case "Livro/excluir":
        $bibliotecaController->excluir();
        break;

    default:
        echo "Página não encontrada";
        break;
}

?>
