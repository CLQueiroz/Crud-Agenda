<?php
session_start();

include_once 'conexao.php';

$id_contato = isset($_GET['id_contato']) ? $_GET['id_contato'] : 0;

$query = "DELETE FROM contatos WHERE ID_CONTATO = $id_contato";

mysqli_query($conexao, $query);

$_SESSION['excluido'] = "Excluido com sucesso";
header('location:index.php');
