<?php
    require_once '../bd/conexao.php';
    require_once '../bd/funcoes.php';

    $produtos = obterTodosProdutos($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br, en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoLution</title>
    <link rel="shortcut icon"  href="../imagem/logo.png" >
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/menu.css" >
    <link rel="stylesheet" type="text/css" href="../css/tabela.css" >
</head>
<body>
    <?php 
        if (file_exists('../hF/header.php')){
            include '../hF/header.php'; 
        }
    ?>

    
<section>
<video id="background-video" autoplay loop muted>
    <source src="../video/mar.mp4" type="video/mp4">
</video>
  <div class="main">
    <h2>Gerenciamento de Usuários</h2>
    <?php if(count($produtos) > 0){ ?>
    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Estoque</th>
                                <th>Preço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produtos as $produto){ ?>
                                <tr>
                                    <td><?php echo $produto['nome'] ?></td>
                                    <td><?php echo $produto['categoria'] ?></td>
                                    <td><?php echo $produto['estoque'] ?></td>
                                    <td><?php echo $produto['preco'] ?></td>
                                    <td>
                                        <a href="../formulario/edicaoProduto.php?id=<?= $produto['id'] ?>" class="btn btn-warning btn-sm"> Editar</a>
                                       
                                        <form action="../bd/funcoes.php" method="POST" class=d-inline>
                                            <button type="submit" onclick ="return confirm('Tem certeza que deseja excluir o produto?');"
                                             name= "produto_delete" value="<?= $produto['id'] ?>" class="btn btn-danger btn-sm"> Excluir
                                            </button>

                                        </form>

                                         
                                    </td>
                                </tr>
                           <?php } ?>   
                        </tbody>
                  </table>
    <?php } else{ ?>
        <h5> Não existem produtos cadastrados</h3>     
    <?php } ?>
    <div class="botoes">
        <a href="../paginas/administracao.php">Voltar</a>
    </div>
</div>
</section>
</body>