<!DOCTYPE html>
<html lang="pt-br, en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon"  href="../imagem/logo.png" >
    <link rel="stylesheet" type="text/css" href="../css/formulario.css" >
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/menu.css" >
    <link rel="stylesheet" type="text/css" href="../css/footer2.css" >
</head>
<body>
    <video id="background-video" autoplay loop muted>
        <source src="../video/mar.mp4" type="video/mp4">
    </video>

    <?php
        if (file_exists('../hF/header.php')){
            include '../hF/header.php'; 
        }
    ?>

    <div class="container">
    <form action="#" method="post">
        <h2 class="titulo">Cadastro de Animal</h2>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="nascimento">Data de nascimento:</label>
        <input type="text" id="nascimento" name="nascimento" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>

        <div class="botoes">
            <button type="button" class="btn-voltar" onclick="history.back()">Voltar</button>
            <input type="submit" value="Cadastrar" class="btn-cadastrar">
        </div>
    </form>
    </div>

    <?php 
        if (file_exists('../hF/footer.php')){
            include '../hF/footer2.php'; 
        }
    ?>
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