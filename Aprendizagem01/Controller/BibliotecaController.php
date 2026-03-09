<?php

session_start();

require_once "./Model/bibliotecaModel.php";

Class BibliotecaController{

  

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano_publicacao = $_POST['ano_publicacao'];
        $editora = $_POST['editora'];

        $biblioteca = new Biblioteca($titulo, $autor, $ano_publicacao, $editora);
        $biblioteca->salvar();
        header('Location: /PB_PHP/Aprendizagem01/livros/telaCadastro');
        exit;
    }
    public function Listarbibliotecas(){
        $bibliotecas = Bibliotecas::Listar();
        echo "<pre>";
        print_r($bibliotecas);
        echo "</pre>";
        require "View/bibliotecaListar.php";
    }

    public function telaEditar(){
        $biblioteca = biblioteca::buscar($_GET['id']);
        require 'View/bibliotecaEditar.php';
    }
    public function atualizar(){
        $biblioteca = new Biblioteca($_POST['titulo'], $_POST['autor'], $_POST['ano_publicacao'], $_POST['editora']);
        $biblioteca->atualizar($_GET['id']);
        header('Location: /PB_PHP/Aprendizagem01/biblioteca/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Biblioteca::excluir($_Get['id']);
        header('Location: /PB_PHP/Aprendizagem01/biblioteca/Listar');
        exit;
    }
    


}
?>