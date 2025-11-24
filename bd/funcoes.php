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
                $_SESSION['mensagem'] = "Endereço criado com sucesso!";
            }else{
                $_SESSION['mensagem'] = "Erro ao criar o endereço";
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
                $_SESSION['mensagem'] = "Produto criado com sucesso!";
            }else{
                $_SESSION['mensagem'] = "Erro ao criar o produto";
            }
        }else{
            $_SESSION['mensagem'] = "Erro na formatação da query!";
        }
    }

    if(isset($_POST['cadAnimal'])){
        $nome = trim($_POST['nome']);
        $nascimento =trim($_POST['nascimento']);
        $idade= $_POST['idade'];
        $especie = trim($_POST['especie']);

        $sql = "INSERT INTO animal (nome, nascimento, idade, especie) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt){
            mysqli_stmt_bind_param($stmt, "ssis", $nome, $nascimento, $idade, $especie);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['mensagem'] = "Animal criado com sucesso!";
            }else{
                $_SESSION['mensagem'] = "Erro ao criar o animal";
            }
        }else{
            $_SESSION['mensagem'] = "Erro na formatação da query!";
        }

        echo $_SESSION['mensagem'];
    }

    if(isset($_POST['cadFuncionario'])){
        $cpf = trim($_POST['cpf']);
        $nome = trim($_POST['nome']);
        $telefone = trim($_POST['telefone']);
        $nascimento = trim($_POST['nascimento']);
        $email = trim($_POST['email']);
        $cargo = trim($_POST['cargo']);
        $senha = password_hash(trim($_POST['senha']), PASSWORD_DEFAULT);

        $sql = "INSERT INTO funcionario (cpf, nome, telefone, nascimento, email, cargo, senha) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);
        
        if ($stmt){
            mysqli_stmt_bind_param($stmt, "sssssss", $cpf, $nome, $telefone, $nascimento, $email, $cargo, $senha);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['mensagem'] = "Funcionário criado com sucesso!";
            }else{
                $_SESSION['mensagem'] = "Erro ao criar o Funcionário";
            }
        }else{
            $_SESSION['mensagem'] = "Erro na formatação da query!";
        }

        echo $_SESSION['mensagem'];
    }
?>
