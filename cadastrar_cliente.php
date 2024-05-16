<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Hurus | Cadastro</title>
    <link rel="stylesheet" href="cadastrar_cliente.css">
    <link rel="shortcut icon" href="./assets/logotipo_digitalhurus.png" type="image/x-icon">
</head>

<style>
    .link-clientes {
        font-family: "Roboto", sans-serif;
        color: white;
        text-decoration: none;
    }

    .container-link {
        text-align: center;
        margin: 30px;
    }
</style>

<body>
    <div class="container-logotipo">
        <img src="./assets/logotipo_digitalhurus.png" alt="Logotipo Digital Hurus">
    </div>

    <h1 class="titulo-cadastro">Digital Hurus | Cadastro</h1>

    <div class="container-link">
        <a class="link-clientes" href="clientes.php">Lista de clientes cadastrados da Digital Hurus</a>
    </div>

    <section class="section-cadastro">
        <form method="POST" action="cadastro.php" onsubmit="return enviarDados()">
            <div class="input-container">
                <h1 class="txt-informacoes-pessoais">Informações Pessoais</h1>
                <input type="text" name="nome" placeholder="Nome Completo" class="purple-input">
                <input type="text" name="cpf" placeholder="CPF" value="" class="purple-input">
                <input type="text" name="rg" placeholder="RG" value="" class="purple-input">

                <p>
                    <label class="label-data-nascimento">Data de Nascimento</label>
                </p>

                <p>
                    <input type="date" name="data_nascimento" class="purple-input-data-nascimento">
                <p>
            </div>

            <h1 class="txt-contato">Contato</h1>
            <input type="text" name="usuario" placeholder="Seu Nome de Usuário" class="purple-input">
            <input type="email" name="email" placeholder="E-mail" class="purple-input">
            <input type="text" name="telefone" placeholder="Telefone (fixo e/ou celular)" class="purple-input">
            <input type="text" name="endereco" placeholder="Endereço" class="purple-input">
            <input type="text" name="cidade" placeholder="Digite sua Cidade" class="purple-input">
            <input type="text" name="estado" placeholder="Digite seu Estado" class="purple-input">

            <h1 class="txt-contato">Cadastre sua senha</h1>
            <input type="password" name="senha" id="senha" placeholder="Senha" class="purple-input">
            <input type="password" id="confirmar_senha" placeholder="Confirmar Senha" class="purple-input">

            <div class="container-buttons">
                <button class="btn-cadastrar" type="submit" onclick="enviarDados(event)">Cadastrar</button>
            </div>
        </form>
    </section>

    <script>
        function enviarDados() {
            var nome = document.getElementsByName("nome")[0].value;
            var cpf = document.getElementsByName("cpf")[0].value;
            var rg = document.getElementsByName("rg")[0].value;
            var data_nascimento = document.getElementsByName("data_nascimento")[0].value;
            var username = document.getElementsByName("usuario")[0].value;
            var email = document.getElementsByName("email")[0].value;
            var telefone = document.getElementsByName("telefone")[0].value;
            var endereco = document.getElementsByName("endereco")[0].value;
            var cidade = document.getElementsByName("cidade")[0].value;
            var estado = document.getElementsByName("estado")[0].value;
            var senha = document.getElementById("senha").value;
            var confirmar_senha = document.getElementById("confirmar_senha").value;

            // Verificar se algum campo está vazio
            if (!nome || !cpf || !rg || !data_nascimento || !username || !email || !telefone || !endereco || !cidade || !estado || !senha || !confirmar_senha) {
                alert("Por favor, preencha todos os campos.");
                return false; // Impede o envio do formulário
            }

            // Verificar se a senha tem entre 6 e 16 caracteres
            if (senha.length < 6 || senha.length > 16) {
                alert("A senha deve ter entre 6 e 16 caracteres.");
                return false; // Impede o envio do formulário
            }

            // Verificar se as senhas coincidem
            if (senha !== confirmar_senha) {
                alert("As senhas não coincidem.");
                return false; // Impede o envio do formulário
            }

            // Se tudo estiver correto, permite o envio do formulário
            return true;
        }
    </script>
</body>

</html>