<?php
$servidor = "localhost";
$usuario = "programador";
$senha = "senha";
$dbname = "crud_clientes_digital_hurus";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conexao) {
    die("Falha na conexão com o banco de dados!" . mysqli_connect_error());
}
