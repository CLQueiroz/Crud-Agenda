<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "crudagenda";

$conexao = mysqli_connect($localhost, $username, $password, $database);

$query = "SELECT * FROM contatos";

$consulta_contatos = mysqli_query($conexao, $query);
