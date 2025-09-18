<!DOCTYPE html>
<html lang="pt-br, en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon"  href="../imagem/logo.png" >
    <link rel="stylesheet" type="text/css" href="../css/formulario.css" >
</head>
<body>
    <video id="background-video" autoplay loop muted>
        <source src="../video/floresta.mp4" type="video/mp4">
    </video>

    <form action="#" method="post"> 
        <h2 class="titulo">Login</h2>

        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <div class="senha-container">
            <input type="password" id="senha" name="senha" required>
            <span class="toggle-senha" onclick="toggleSenha()">👁️</span>
        </div>

        <div class="botoes">
            <button type="button" class="btn-voltar" onclick="history.back()">Voltar</button>
            <input type="submit" value="Entrar" class="btn-cadastrar">
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