<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $data_nascimento = $_POST["data_nascimento"];
    $genero = $_POST["genero"];
    $username = $_POST["usuario"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $senha = $_POST["senha"];
    
    // Inserir dados no banco de dados
    $sql = "INSERT INTO clientes(nome, telefone, cpf, rg, data_nascimento, genero, username, email, endereco, senha) 
            VALUES ('$nome', '$telefone', '$cpf', '$rg', '$data_nascimento', '$genero', '$username', '$email', '$endereco', '$senha')";

    if (mysqli_query($conexao, $sql)) {
        echo "<div class='container-logotipo'>";
            echo "<img src='./assets/logotipo_digitalhurus.png' alt='Logotipo Digital Hurus'>";
        echo "</div>";

            echo "<h2 class='txt-cadastro-efetuado'>Cadastro foi realizado com sucesso! ✅</h2>";
        echo "<p class='txt-aviso'>Para voltar a tela de cadastro, <a class='link-redirecionamento' href='cadastrar_cliente.php'>clique aqui</a></p>";
    } else {
        echo "Erro ao cadastrar o cliente: " . mysqli_error($conexao);
    }

    mysqli_close($conexao); // Fechar a conexão apenas após o processamento dos dados
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Hurus | Cadastro</title>
    <link rel="shortcut icon" href="/assets/logotipo_digitalhurus.png" type="image/x-icon">
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    
</body>
</html>
