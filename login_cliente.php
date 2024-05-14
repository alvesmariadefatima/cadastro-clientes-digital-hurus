<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Hurus | Login</title>
    <link rel="stylesheet" href="login_cliente.css">
</head>

<body>
    <div class="container-logotipo">
        <img src="./assets/logotipo_digitalhurus.png" alt="Logotipo Digital Hurus">
    </div>

    <h1 class="titulo-login">Digital Hurus | Login</h1>

    <section class="section-login">
        <form id="login-form">
            <div class="input-container">
                <input type="text" name="usuario" placeholder="Usuário" class="purple-input">
                <input type="password" name="senha" placeholder="Senha" value="" class="purple-input">
            </div>

            <div class="container-button">
                <button class="btn-login" type="button" onclick="fazerLogin()">Login</button>
            </div>
        </form>
    </section>

    <div class="container-links">
        <a class="link-criar-conta" href="cadastrar_cliente.php">Criar uma Conta</a>
    </div>

    <script>
        function fazerLogin() {
            // Obtenha os valores dos campos do formulário
            var usuario = document.getElementsByName("usuario")[0].value;
            var senha = document.getElementsByName("senha")[0].value;

            // Verifique se algum campo está vazio
            if (usuario === "" || senha === "") {
                // Se algum campo estiver vazio, exiba uma mensagem de alerta
                alert("Por favor, preencha os campos.");
            } else {
                // Se os campos estiverem preenchidos, envie o formulário
                document.getElementById("login-form").submit();
            }
        }
    </script>
</body>
</html>