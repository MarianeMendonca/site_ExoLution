<!DOCTYPE html>
<html lang="pt-br, en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css" >
</head>
<body>
    <video id="background-video" autoplay loop muted>
        <source src="../video/video_cadastro.mp4" type="video/mp4">
    </video>
    <form action="#" method="post">
        <h2 class="titulo">Cadastro</h2>

        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" 
               pattern="\d{11}" 
               maxlength="11"
               placeholder="Somente números (11 dígitos)" 
               required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10,11}" placeholder="Somente números" required>

        <label for="nascimento">Data de nascimento:</label>
        <input type="date" id="nascimento" name="nascimento" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <div class="senha-container">
            <input type="password" id="senha" name="senha" required>
            <span class="toggle-senha" onclick="toggleSenha()">👁️</span>
        </div>

        <div class="botoes">
            <button type="button" class="btn-voltar" onclick="history.back()">Voltar</button>
            <input type="submit" value="Cadastrar" class="btn-cadastrar">
        </div>
    </form>

    <script>
        function toggleSenha() {
            const senha = document.getElementById("senha");
            const olho = document.querySelector(".toggle-senha");
            if (senha.type === "password") {
                senha.type = "text";
                olho.textContent = "🙈"; // muda ícone quando visível
            } else {
                senha.type = "password";
                olho.textContent = "👁️"; // volta pro olho normal
            }
        }
    </script>
</body>
</html>
