<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Hurus | Cadastro</title>
    <link rel="shortcut icon" href="./assets/logotipo_digitalhurus.png" type="image/x-icon">
    <link rel="stylesheet" href="cadastrar_cliente.css">
</head>

<body>
    <div class="container-logotipo">
        <img src="./assets/logotipo_digitalhurus.png" alt="Logotipo Digital Hurus">
    </div>

    <h1 class="titulo-cadastro">Digital Hurus | Cadastro</h1>

    <section class="section-cadastro">
        <form method="POST" action="cadastro.php" id="cadastro-form" onsubmit="return enviarDados()">
            <div class="input-container">
                <h1 class="txt-informacoes-pessoais">Informações Pessoais</h1>
                <input type="text" name="nome" placeholder="Nome Completo" class="purple-input">
                <input type="text" name="cpf" placeholder="CPF" value="" class="purple-input">
                <input type="text" name="rg" placeholder="RG" value="" class="purple-input">
                
                <p>
                    <label class="label-data-nascimento">Data de Nascimento</label>
                </p>

                <p>
                    <input type="date" name="data_nascimento" value="" class="purple-input-data-nascimento">
                <p>
                    <label class="label-genero">Gênero</label>
                </p>
                    <p><input class="opcao-genero" type="radio" name="genero">Masculino</p>
                    <p><input class="opcao-genero" type="radio" name="genero">Feminino</p>
                    <p><input class="opcao-genero" type="radio" name="genero">Sou LGBTQIAP+</p>
                    <p><input class="opcao-genero" type="radio" name="genero">Prefiro não responder</p>
                </p>
            </div>

            <h1 class="txt-contato">Contato</h1>
            <input type="text" name="usuario" placeholder="Seu Nome de Usuário" class="purple-input">
            <input type="email" name="email" placeholder="E-mail" class="purple-input">
            <input type="text" name="telefone" placeholder="Telefone (fixo e/ou celular)" class="purple-input">
            <input type="text" name="endereco" placeholder="Endereço" class="purple-input">

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
    var genero = document.getElementsByName("genero")[0].value;
    var username = document.getElementsByName("usuario")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var telefone = document.getElementsByName("telefone")[0].value;
    var endereco = document.getElementsByName("endereco")[0].value;
    var senha = document.getElementById("senha").value;
    var confirmar_senha = document.getElementById("confirmar_senha").value;

    // Verificar se algum campo está vazio
    if (!nome || !cpf || !rg || !data_nascimento || !genero || !username || !email || !telefone || !endereco || !senha || !confirmar_senha) {
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
