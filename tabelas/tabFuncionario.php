<?php
    require_once '../bd/conexao.php';
    require_once '../bd/funcoes.php';

    $funcionarios = obterTodosFuncionarios($conexao);
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
    <h2>Gerenciamento de Funcionarios</h2>
    <?php if(count($funcionarios) > 0){ ?>
    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Cargo</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($funcionarios as $funcionario){ ?>
                                <tr>
                                    <td><?php echo $funcionario['nome'] ?></td>
                                    <td><?php echo $funcionario['email'] ?></td>
                                    <td><?php echo $funcionario['cargo'] ?></td>
                                    <td>
                                        <a href="../formulario/edicaoFuncionario.php?cpf=<?= $funcionario['cpf'] ?>" class="btn btn-warning btn-sm"> Editar</a>
                                       
                                        <form action="../bd/funcoes.php" method="POST" class=d-inline>
                                            <button type="submit" onclick ="return confirm('Tem certeza que deseja excluir o funcionario?');"
                                             name= "funcionario_delete" value="<?= $funcionario['cpf'] ?>" class="btn btn-danger btn-sm"> Excluir
                                            </button>

                                        </form>

                                         
                                    </td>
                                </tr>
                           <?php } ?>   
                        </tbody>
                  </table>
    <?php } else{ ?>
        <h5> Não existem funcionarios cadastrados</h3>     
    <?php } ?>
</div>
</section>
</body>