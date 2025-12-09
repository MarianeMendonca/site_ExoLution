<?php
    require_once '../bd/conexao.php';
    require_once '../bd/funcoes.php';

    if (isset($_GET['cpf'])){
        $funcionario_id = mysqli_real_escape_string($conexao, $_GET['cpf']);

        $funcionario =  buscarFuncionarioCpf($conexao, $funcionario_id);
    }
?>
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
        <source src="../video/cachoeira2.mp4" type="video/mp4">
    </video>

    <?php
        if (file_exists('../hF/header.php')){
            include '../hF/header.php'; 
        }
    ?>

    <div class="container">
    <form action="../bd/funcoes.php" method="post">
        <h2 class="titulo">Edição de Informações</h2>
        <input type="hidden" name="cpf" value="<?= $funcionario['cpf']; ?>">

        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" value="<?= $funcionario['nome']; ?>">

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" pattern="[0-9]{10,11}" placeholder="Somente números" value="<?= $funcionario['telefone']; ?>">

        <label for="nascimento">Data de nascimento:</label>
        <input type="date" id="nascimento" name="nascimento" value="<?= $funcionario['nascimento']; ?>">

        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email"value="<?= $funcionario['email']; ?>">

        <label for="cargo">Cargo:</label>
        <select id="cargo" name="cargo">
        <option value="">-- Selecione --</option>
        <option value="vendedor">Vendedor</option>
        <option value="balconista">Balconista</option>
        <option value="empacotador">Empacotador</option>
        <option value="biologo">Biologo</option>
        <option value="rh">RH</option>
        <option value="suporte">Suporte Técnico</option>
        <option value="sg">Serviços Gerais</option>
        <option value="gerente">Gerente</option>
        </select>

        <label for="senha">Senha:</label>
        <div class="senha-container">
            <input type="password" id="senha" name="senha" value="<?= $funcionario['senha']; ?>">
            <span class="toggle-senha" onclick="toggleSenha()">👁️</span>
        </div>

        <div class="botoes">
            <button type="button" class="btn-voltar" onclick="history.back()">Voltar</button>
            <input type="submit" name="update_funcionario" value="Salvar" class="btn-cadastrar">
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
                olho.textContent = "🙈"; 
            } else {
                senha.type = "password";
                olho.textContent = "👁️"; 
            }
        }
    </script>
</body>
</html>