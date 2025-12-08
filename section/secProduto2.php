<?php
    require_once '../bd/conexao.php';
    require_once '../bd/funcoes.php';

    $produtos = obterTodosProdutos($conexao);
?>

<section>
    <video id="background-video" autoplay loop muted>
        <source src="../video/cachoeira2.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="header">
            <h1>Produtos</h1>
            <p>Estamos sempre prontos para cuidar do seu pet exótico com carinho e inovação.</p>
        </div>
        <?php if(count($produtos) > 0){ ?>
        <div class="produtos">
            <div class="cardGeral">
                <?php foreach ($produtos as $produto){ ?>
                <div class="card">
                    <a href="#">
                        <img src="data:image/png;base64,<?php echo base64_encode($produto['imagem']); ?>">
                    </a>
                    <div class="inf" style="background: rgba(167, 180, 178, 0.3); ">
                        <p class="card-text" style="color: black; font-size: 25px; text-align: center;">
                            <?php echo $produto['nome'] ?>
                        </p>
                        <p class="card-text" style="color: black;font-size: 20px; text-align: center; margin-top: -10px">
                            R$ <?php echo $produto['preco']?>
                        </p>
                        <a href="../paginas/apreProd.php?id=<?= $produto['id'] ?>"  style="background-color: green; text-decoration: none;
                        color: white; padding: 7px"> Comprar</a>
                    </div>
                </div> 
                <?php } ?>  
            </div>
        </div>
        <?php } else { ?>
            <h5>Não possui produto cadastrado</h5>
        <?php } ?>
    </div>
</section>