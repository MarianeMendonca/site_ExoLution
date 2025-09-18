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

    <form action="#" method="post" enctype="multipart/form-data">
        <h2 class="titulo">Cadastro de Produto</h2>

        <label for="nome">Nome do produto:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="4" required></textarea>

        <label for="preco">Preço (R$):</label>
        <input type="number" id="preco" name="preco" step="0.01" min="0" required>

        <label for="categoria">Categoria:</label>
        <select id="categoria" name="categoria" required>
        <option value="">-- Selecione --</option>
        <option value="racao">Ração</option>
        <option value="brinquedos">Brinquedos</option>
        <option value="roupas">Roupas</option>
        <option value="coleiras">Coleiras</option>
        <option value="outros">Outros</option>
        </select>

        <label for="imagem">Imagem do produto:</label>
        <div class="upload-container" onclick="document.getElementById('imagem').click()">
        <p>📷 Clique para selecionar a imagem do produto</p>
        <input type="file" id="imagem" name="imagem" accept="image/*" required>
        </div>

        <div class="preview">
        <img id="preview-img" alt="Pré-visualização do produto">
        </div>

        <div class="botoes">
            <button type="button" class="btn-voltar" onclick="history.back()">Voltar</button>
            <input type="submit" value="Cadastrar Produto" class="btn-cadastrar">
        </div>
    </form>

    <script>
        const inputImagem = document.getElementById("imagem");
        const previewImg = document.getElementById("preview-img");

        inputImagem.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
            previewImg.style.display = "block";
            previewImg.src = e.target.result;
            };
            reader.readAsDataURL(file);
        } else {
            previewImg.style.display = "none";
            previewImg.src = "";
        }
        });
    </script>
</body>
</html>