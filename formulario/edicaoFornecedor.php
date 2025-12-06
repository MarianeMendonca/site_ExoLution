<?php
    require_once '../bd/conexao.php';
    require_once '../bd/funcoes.php';

    if (isset($_GET['id'])){
        $fornecedor_id = mysqli_real_escape_string($conexao, $_GET['id']);

        $fornecedor =  buscarFornecedorId($conexao, $fornecedor_id);
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
        <input type="hidden" name="id" value="<?= $fornecedor['id']; ?>">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $fornecedor['nome']; ?>">

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" pattern="[0-9]{10,11}" placeholder="Somente números" value="<?= $fornecedor['telefone']; ?>">

        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" value="<?= $fornecedor['email']; ?>">

        <label for="obs">Observações</label>
        <input type="text" id="obs" name="obs" value="<?= $fornecedor['obs']; ?>">

        <div class="botoes">
            <button type="button" class="btn-voltar" onclick="history.back()">Voltar</button>
            <input type="submit" name="update_fornecedor" value="Salvar" class="btn-cadastrar">
        </div>
    </form>
    </div>

    <?php 
        if (file_exists('../hF/footer.php')){
            include '../hF/footer2.php'; 
        }
    ?>
</body>
</html>