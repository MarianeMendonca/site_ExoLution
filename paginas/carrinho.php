<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }

    require_once '../bd/conexao.php';
    require_once '../bd/funcoes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoLution</title>
    <link rel="shortcut icon"  href="../imagem/logo.png" >
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/menu.css" >
    <link rel="stylesheet" type="text/css" href="../css/footer2.css" >
    <link rel="stylesheet" type="text/css" href="../css/carrinho.css">
</head>
<body>
    <?php 
        if (file_exists('../hF/header.php')){
            include '../hF/header.php'; 
        }
    ?>

    <section id="carrinho">
        <div class="container">
            <h1>Seu Carrinho</h1>
            <div class="produtos">
                <div class="produto">
                    <img src="imagem/aquario.png" alt="Aquário">
                    <div class="detalhes">
                        <h2>Aquário</h2>
                        <p>R$ 250,00</p>
                        <button class="remover">Remover</button>
                    </div>
                </div>
            </div>
            <div class="resumo">
                <p><strong>Total:</strong> R$ 280,00</p>
                <button class="finalizar">Finalizar Compra</button>
            </div>
        </div>
    </section>

    <?php 
        if (file_exists('../hF/footer2.php')){
            include '../hF/footer2.php'; 
        }
    ?>
</body>
</html>
