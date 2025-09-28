<?php
    session_start();
    require 'conexao.php';

    if(isset($_POST['cadastrar'])){
        $nome = trim($_POST['nome']);
        $cpf=trim($_POST['cpf']);
        $telefone= trim($_POST['telefone']);
        $email = trim($_POST['email']);
        $datanascto = trim($_POST['nascimento']);
        $senha = password_hash(trim($_POST['senha']), PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario (cpf, nome, telefone, email, nascimento, senha) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt){
            mysqli_stmt_bind_param($stmt, "ssssss", $cpf, $nome, $telefone, $email, $datanascto, $senha);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['mensagem'] = "Usuário criado com sucesso!";
            }else{
                $_SESSION['mensagem'] = "Erro ao criar o usuário";
            }
        }else{
            $_SESSION['mensagem'] = "Erro na formatação da query!";
        }

        echo $_SESSION['mensagem'];
    }

    if(isset($_POST['cadEndereco'])){
        $cep = trim($_POST['cep']);
        $rua =trim($_POST['rua']);
        $numero= $_POST['numero'];
        $complemento = trim($_POST['complemento']);
        $bairro = trim($_POST['bairro']);
        $cidade = trim($_POST['cidade']);
        $estado = trim($_POST['estado']);
        $pais = trim($_POST['pais']);

        $sql = "INSERT INTO endereco (cep, rua, numero, complemento, bairro, cidade, estado, pais) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt){
            mysqli_stmt_bind_param($stmt, "ssssssss", $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado, $pais);
            if(mysqli_stmt_execute($stmt)){
            }else{
                $_SESSION['mensagem'] = "Erro ao criar o usuário";
            }
        }else{
            $_SESSION['mensagem'] = "Erro na formatação da query!";
        }

        echo $_SESSION['mensagem'];
    }

    if(isset($_POST['cadastrarproduto'])){
        $nome = trim($_POST['nome']);
        $descricao = trim($_POST['descricao']);
        $preco= trim($_POST['preco']);
        $estoque = trim($_POST['estoque']);
        $categoria = $_POST['categoria'];


        $sql = "INSERT INTO produto (nome, descricao, preco, estoque, categoria) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt){
            mysqli_stmt_bind_param($stmt, "sssss", $nome, $descricao, $preco, $estoque, $categoria);
            if(mysqli_stmt_execute($stmt)){
            }else{
                $_SESSION['mensagem'] = "Erro ao criar o usuário";
            }
        }else{
            $_SESSION['mensagem'] = "Erro na formatação da query!";
        }
    }
?>
