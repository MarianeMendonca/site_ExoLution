<?php
    require_once '../bd/conexao.php';
    require_once '../bd/funcoes.php';

    if (isset($_GET['id'])){
        $produto_id = mysqli_real_escape_string($conexao, $_GET['id']);

        $produto =  buscarProdutoId($conexao, $produto_id);
    }
?>

<section>
    <video id="background-video" autoplay loop muted>
        <source src="../video/cachoeira2.mp4" type="video/mp4">
    </video>
    <div class="product-container">
        <div class="row">
            <div class="col-md-6">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($produto['imagem']); ?>" style="width: 440px">
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <h1><?php echo $produto['nome'] ?></h1>
                    <p class="description">
                        <?php echo $produto['descricao'] ?>
                    </p>
                    <div class="product-info">
                        <div><span>Preço:</span> R$ <?php echo $produto['preco'] ?></div>
                        <div><span>Categoria:</span> <?php echo $produto['categoria'] ?></div>
                        <div><span>Disponibilidade:</span> <?php echo $produto['estoque'] ?></div>
                    </div>
                    <div class="button">
                        <button class="btn" style="background-color: #969696ff;"><a href="../paginas/produtos.php">Voltar</a></button>
                        <button class="btn buy">Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>