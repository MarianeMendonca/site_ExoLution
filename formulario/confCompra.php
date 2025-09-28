<!DOCTYPE html>
<html lang="pt-br, en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Pedido</title>
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
    <form action="#" method="post">
        <h2 class="titulo">Confirmação de Pedido</h2>

        <!-- Produtos comprados -->
        <fieldset>
            <legend>Produtos</legend>
            <ul class="lista-produtos">
                <li>Produto A - Quantidade: 2</li>
                <li>Produto B - Quantidade: 1</li>
                <li>Produto C - Quantidade: 3</li>
            </ul>
        </fieldset>

        <fieldset>
    <legend>Endereço de Entrega</legend>

            <!-- Endereços salvos -->
            <div class="enderecos-salvos">
                <label>
                    <input type="radio" name="endereco" value="1" required>
                    Rua das Palmeiras, 123 - Bairro Centro - São Paulo/SP
                </label>
                <label>
                    <input type="radio" name="endereco" value="2">
                    Av. Brasil, 456 - Jardim América - Rio de Janeiro/RJ
                </label>
            </div>

            <!-- Novo endereço -->
            <div class="novo-endereco">
                <a href="endereco.php" class="btn-novo-endereco">➕ Cadastrar novo endereço</a>
            </div>
        </fieldset>


        <!-- Pagamento -->
        <fieldset>
            <legend>Forma de Pagamento</legend>
            <select name="pagamento" id="pagamento" required>
                <option value="">Selecione</option>
                <option value="cartao">Cartão de Crédito</option>
                <option value="boleto">Boleto Bancário</option>
                <option value="pix">PIX</option>
            </select>

            <div id="cartao-detalhes" style="display:none; margin-top:15px;">
                <label for="numero-cartao">Número do Cartão:</label>
                <input type="text" id="numero-cartao" name="numero-cartao" maxlength="16" placeholder="16 dígitos">

                <label for="validade">Validade:</label>
                <input type="text" id="validade" name="validade" placeholder="MM/AA">

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" maxlength="3">
            </div>
        </fieldset>

        <!-- Botões -->
        <div class="botoes">
            <button type="button" class="btn-voltar" onclick="history.back()">Voltar</button>
            <input type="submit" value="Confirmar Pedido" class="btn-cadastrar">
        </div>
    </form>
    </div>

    <?php 
        if (file_exists('../hF/footer.php')){
            include '../hF/footer2.php'; 
        }
    ?>

    <script>
        // Exibir campos do cartão só quando selecionado
        document.getElementById("pagamento").addEventListener("change", function() {
            const detalhesCartao = document.getElementById("cartao-detalhes");
            if (this.value === "cartao") {
                detalhesCartao.style.display = "block";
            } else {
                detalhesCartao.style.display = "none";
            }
        });
    </script>
</body>
</html>
