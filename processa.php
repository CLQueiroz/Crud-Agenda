<?php
session_start();

include_once  'conexao.php';

$id_contato = isset($_POST['id_contato']) ? $_POST['id_contato'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';

$query = "INSERT INTO contatos(NOME_CONTATO,TELEFONE_CONTATO)VALUES('$nome', $telefone)";
mysqli_query($conexao, $query);

$_SESSION['enviado'] = "Registrado com sucesso";

header('location:index.php');
