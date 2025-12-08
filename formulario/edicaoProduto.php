<?php
    require_once '../bd/conexao.php';
    require_once '../bd/funcoes.php';

    if (isset($_GET['id'])){
        $produto_id = mysqli_real_escape_string($conexao, $_GET['id']);

        $produto =  buscarProdutoId($conexao, $produto_id);
    }
?>
<!DOCTYPE html>
<html lang="pt-br, en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
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
    <form action="../bd/funcoes.php" method="post" enctype="multipart/form-data">
        <h2 class="titulo">Cadastro de Produto</h2>

        <input type="hidden" name="id" value="<?= $produto['id']; ?>">

        <label for="nome">Nome do produto:</label>
        <input type="text" id="nome" name="nome" value="<?= $produto['nome']; ?>">

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="4" value="<?= $produto['descricao']; ?>"></textarea>

        <label for="preco">Preço (R$):</label>
        <input type="number" id="preco" name="preco" step="0.01" min="0" value="<?= $produto['preco']; ?>">

        <label for="estoque">Quantidade em estoque:</label>
        <input type="number" id="estoque" name="estoque" value="<?= $produto['estoque']; ?>">

        <div class="botoes">
            <button type="button" class="btn-voltar" onclick="history.back()">Voltar</button>
            <input type="submit" name="update_produto" value="Salvar" class="btn-cadastrar">
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