<?php

if (isset($_POST['confirmar'])) {
    include('conexao.php');
    $id = intval($_GET['id']);
    $sql_code = "DELETE FROM clientes WHERE id = '$id'";
    $sql_query = $conexao->query($sql_code) or die($conexao->error);

    if ($sql_query) {
?>
        <h1>Cliente deletado com sucesso!</h1>
        <p><a href="clientes.php">Clique aqui</a> para a lista de clientes</a></p>
<?php
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="deletar_cliente.css">
    <title>Digital Hurus | Deletar Cliente</title>
    <link rel="shortcut icon" href="assets/logotipo_digitalhurus.png" type="image/x-icon">
</head>

<body>
    <div class="container-logotipo">
        <img src="./assets/logotipo_digitalhurus.png" alt="Logotipo ART Martins"></a>
    </div>
    <h1>Digital Hurus | Exclusão de Conta</h1>

    <h1>Tem certeza que deseja deletar esse cliente?</h1>
    <form method="POST" action="">
        <div class="container-form">
            <a style="margin-right: 40px;" href="clientes.php">Não</a>
            <button name="confirmar" value="1" type="submit">Sim</button>
        </div>
    </form>
</body>

</html>