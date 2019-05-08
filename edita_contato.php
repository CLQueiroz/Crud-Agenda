<?php
session_start();

include_once 'conexao.php';

$id_contato = isset($_POST['id_contato']) ? $_POST['id_contato'] : 0;
$nome_contato = isset($_POST['nome_contato']) ? $_POST['nome_contato'] : '';
$telefone_contato = isset($_POST['telefone_contato']) ? $_POST['telefone_contato'] : 0;

$query = "UPDATE  contatos SET NOME_CONTATO = '$nome_contato', TELEFONE_CONTATO = '$telefone_contato'
    WHERE ID_CONTATO = '$id_contato'";

$_SESSION['atualizado'] = "Registro atualizado com sucesso";

mysqli_query($conexao, $query);
header('location:index.php');
