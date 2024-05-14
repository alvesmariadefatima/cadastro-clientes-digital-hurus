<?php

include('conexao.php');

// Atribuindo os valores corretos às variáveis
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$data_nascimento = $_POST['data_nascimento'];
$username = $_POST['username'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

// Inserir dados no banco de dados
$sql = "INSERT INTO clientes(nome, telefone, cpf, rg, data_nascimento, username, email, endereco, senha) 
        VALUES ('$nome', '$telefone', '$cpf', '$rg', '$data_nascimento', '$username', '$email', '$endereco', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "Cliente cadastrado com sucesso!!!";
} else {
    echo "Erro ao cadastrar o cliente: " . mysqli_error($conexao);
}

mysqli_close($conexao);