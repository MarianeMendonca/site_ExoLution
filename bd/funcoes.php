<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once 'conexao.php';

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
                header('Location: ../tabelas/tabUsuario.php');
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


    if (isset($_POST['cadastrarproduto'])) {
    // Inicia sessão se necessário
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $preco = (float) trim($_POST['preco']);
    $estoque = (int) trim($_POST['estoque']);
    $categoria = $_POST['categoria'];

    // TRATAR IMAGEM COMO BLOB
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $imagemBlob = file_get_contents($_FILES['imagem']['tmp_name']);
        
        // Validação de tamanho (ajuste conforme necessário, ex.: 5MB)
        $maxSize = 5 * 1024 * 1024;  // 5MB
        if (strlen($imagemBlob) > $maxSize) {
            $_SESSION['mensagem'] = "Imagem muito grande. Máximo 5MB.";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        }
    } else {
        $_SESSION['mensagem'] = "Erro ao receber a imagem: " . $_FILES['imagem']['error'];
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }

    // QUERY COM IMAGEM BLOB
    $sql = "INSERT INTO produto (nome, descricao, preco, estoque, categoria, imagem)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conexao, $sql);

    if ($stmt) {
        // Tipos corretos: s, s, d, i, s, b (b para BLOB)
        $blobPlaceholder = NULL;  // Ou '' – placeholder para o BLOB
        mysqli_stmt_bind_param(
            $stmt,
            "ssdisb",  // Correção: último é 'b' para BLOB
            $nome,
            $descricao,
            $preco,
            $estoque,
            $categoria,
            $blobPlaceholder  // Não passe $imagemBlob aqui
        );

        // Envia os dados binários para o parâmetro BLOB (índice 5)
        mysqli_stmt_send_long_data($stmt, 5, $imagemBlob);

        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['mensagem'] = "Produto criado com sucesso!";
        } else {
            $_SESSION['mensagem'] = "Erro ao salvar produto: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['mensagem'] = "Erro na preparação da query: " . mysqli_error($conexao);
    }

    // Redireciona de volta
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
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
                header('Location: ../tabelas/tabFuncionario.php');
                $_SESSION['mensagem'] = "Funcionário criado com sucesso!";
            }else{
                $_SESSION['mensagem'] = "Erro ao criar o Funcionário";
            }
        }else{
            $_SESSION['mensagem'] = "Erro na formatação da query!";
        }

        echo $_SESSION['mensagem'];
    }

    if (isset($_POST['update_usuario'])){
       $usuario_id = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
       $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
       $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
       $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
       $datanascto = mysqli_real_escape_string($conexao, trim($_POST['nascimento']));
       $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

       $sql = "UPDATE usuario SET nome = ?, telefone = ?, email = ?, nascimento = ?, senha = ? WHERE cpf = ?";
       $stmt = mysqli_prepare($conexao, $sql);

       if ($stmt){
            mysqli_stmt_bind_param($stmt, "sssssi", $nome, $telefone, $email, $datanascto, $senha, $usuario_id);
            mysqli_stmt_execute($stmt);

            if (mysqli_affected_rows($conexao)>0){
                header('Location: ../tabelas/tabUsuario.php');
                $alteracao = true;
                return $alteracao;
            }else{
                $alteracao = false;
                return $alteracao;                
            }
        }
    }

    function obterTodosUsuarios($conexao){
        $sql = "SELECT * from usuario ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);

        $usuarios = [];
        if ($resultado && mysqli_num_rows($resultado) >0){
            while ($row = mysqli_fetch_assoc($resultado)){
                $usuarios[]=$row;
            } 
        }

        return $usuarios;
    }

    function buscarUsuarioCpf($conexao, $cpf) {
    $sql = "SELECT * FROM usuario WHERE cpf = ? LIMIT 1";
    $stmt = mysqli_prepare($conexao, $sql);
    if (!$stmt) return null;
        mysqli_stmt_bind_param($stmt, "s", $cpf);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        $usuario = null;
    if ($res && mysqli_num_rows($res) > 0) {
        $usuario = mysqli_fetch_assoc($res);
    }
    mysqli_stmt_close($stmt);
    return $usuario;
}

    if(isset($_POST['usuario_delete'])){
        $usuario_id = mysqli_real_escape_string($conexao, trim($_POST['usuario_delete']));

        $sql = "DELETE FROM usuario WHERE cpf='$usuario_id'";
        mysqli_query($conexao, $sql);

        if (mysqli_affected_rows($conexao) > 0 ){
            header('Location: ../tabelas/tabUsuario.php');
            return true;
        }else{
            return false;
        }
    }

    function obterTodosFuncionarios($conexao){
        $sql = "SELECT * from funcionario ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);

        $usuarios = [];
        if ($resultado && mysqli_num_rows($resultado) >0){
            while ($row = mysqli_fetch_assoc($resultado)){
                $usuarios[]=$row;
            } 
        }

        return $usuarios;
    }

    function buscarFuncionarioCpf($conexao, $cpf) {
    $sql = "SELECT * FROM funcionario WHERE cpf = ? LIMIT 1";
    $stmt = mysqli_prepare($conexao, $sql);
    if (!$stmt) return null;
    mysqli_stmt_bind_param($stmt, "s", $cpf);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $funcionario = null;
    if ($res && mysqli_num_rows($res) > 0) {
        $funcionario = mysqli_fetch_assoc($res);
    }
    mysqli_stmt_close($stmt);
    return $funcionario;
}

    if (isset($_POST['update_funcionario'])){
       $funcionario_id = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
       $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
       $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
       $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
       $datanascto = mysqli_real_escape_string($conexao, trim($_POST['nascimento']));
       $cargo = mysqli_real_escape_string($conexao, trim($_POST['cargo']));
       $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

       $sql = "UPDATE funcionario SET nome = ?, telefone = ?, email = ?, nascimento = ?, cargo = ?, senha = ? WHERE cpf = ?";
       $stmt = mysqli_prepare($conexao, $sql);

       if ($stmt){
            mysqli_stmt_bind_param($stmt, "ssssssi", $nome, $telefone, $email, $datanascto, $cargo, $senha, $funcionario_id);
            mysqli_stmt_execute($stmt);

            if (mysqli_affected_rows($conexao)>0){
                $alteracao = true;
                header('Location: ../tabelas/tabFuncionario.php');
                return $alteracao;
            }else{
                $alteracao = false;
                return $alteracao;                
            }
        }
    }

    if(isset($_POST['funcionario_delete'])){
        $funcionario_id = mysqli_real_escape_string($conexao, trim($_POST['funcionario_delete']));

        $sql = "DELETE FROM funcionario WHERE cpf='$funcionario_id'";
        mysqli_query($conexao, $sql);

        if (mysqli_affected_rows($conexao) > 0 ){
            header('Location: ../tabelas/tabFuncionario.php');
            return true;
        }else{
            return false;
        }
    }

    if(isset($_POST['cad_fornecedor'])){
        $nome = trim($_POST['nome']);
        $telefone= trim($_POST['telefone']);
        $email = trim($_POST['email']);
        $obs = trim($_POST['obs']);

        $sql = "INSERT INTO fornecedor (nome, telefone, email, obs) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt){
            mysqli_stmt_bind_param($stmt, "ssss", $nome, $telefone, $email, $obs);
            if(mysqli_stmt_execute($stmt)){
                header('Location: ../tabelas/tabFornecedor.php');
                $_SESSION['mensagem'] = "Usuário criado com sucesso!";
            }else{
                $_SESSION['mensagem'] = "Erro ao criar o usuário";
            }
        }else{
            $_SESSION['mensagem'] = "Erro na formatação da query!";
        }

        echo $_SESSION['mensagem'];
    }

    function obterTodosFornecedores($conexao){
        $sql = "SELECT * from fornecedor ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);

        $fornecedor = [];
        if ($resultado && mysqli_num_rows($resultado) >0){
            while ($row = mysqli_fetch_assoc($resultado)){
                $fornecedor[]=$row;
            } 
        }

        return $fornecedor;
    }
    
    function buscarFornecedorId($conexao, $id){
        $sql = "SELECT * from fornecedor WHERE id = '$id'";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado)>0){
            $fornecedor = mysqli_fetch_array($resultado);
        }

        return $fornecedor;  
    }

    if (isset($_POST['update_fornecedor'])){
       $fornecedor_id = mysqli_real_escape_string($conexao, trim($_POST['id']));
       $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
       $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
       $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
       $obs = mysqli_real_escape_string($conexao, trim($_POST['obs']));

       $sql = "UPDATE fornecedor SET nome = ?, telefone = ?, email = ?, obs = ? WHERE id = ?";
       $stmt = mysqli_prepare($conexao, $sql);

       if ($stmt){
            mysqli_stmt_bind_param($stmt, "ssssi", $nome, $telefone, $email, $obs, $fornecedor_id);
            mysqli_stmt_execute($stmt);

            if (mysqli_affected_rows($conexao)>0){
                $alteracao = true;
                header('Location: ../tabelas/tabFornecedor.php');
                return $alteracao;
            }else{
                $alteracao = false;
                return $alteracao;                
            }
        }
    }

    if(isset($_POST['fornecedor_delete'])){
        $fornecedor_id = mysqli_real_escape_string($conexao, trim($_POST['fornecedor_delete']));

        $sql = "DELETE FROM fornecedor WHERE id='$fornecedor_id'";
        mysqli_query($conexao, $sql);

        if (mysqli_affected_rows($conexao) > 0 ){
            header('Location: ../tabelas/tabFornecedor.php');
            return true;
        }else{
            return false;
        }
    }

    function obterTodosProdutos($conexao){
        $sql = "SELECT * from produto ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);

        $produto = [];
        if ($resultado && mysqli_num_rows($resultado) >0){
            while ($row = mysqli_fetch_assoc($resultado)){
                $produto[]=$row;
            } 
        }

        return $produto;
    }

    if(isset($_POST['produto_delete'])){
        $produto_id = mysqli_real_escape_string($conexao, trim($_POST['produto_delete']));

        $sql = "DELETE FROM produto WHERE id='$produto_id'";
        mysqli_query($conexao, $sql);

        if (mysqli_affected_rows($conexao) > 0 ){
            header('Location: ../tabelas/tabProdutos.php');
            return true;
        }else{
            return false;
        }
    }

    function buscarProdutoId($conexao, $id){
        $sql = "SELECT * from produto WHERE id = '$id'";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado)>0){
            $produto = mysqli_fetch_array($resultado);
        }

        return $produto;  
    }

    if (isset($_POST['update_produto'])){
       $produto_id = mysqli_real_escape_string($conexao, trim($_POST['id']));
       $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
       $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
       $preco = mysqli_real_escape_string($conexao, $_POST['preco']);
       $estoque = mysqli_real_escape_string($conexao, $_POST['estoque']);

       $sql = "UPDATE produto SET nome = ?, descricao = ?, preco = ?, estoque = ? WHERE id = ?";
       $stmt = mysqli_prepare($conexao, $sql);

       if ($stmt){
            mysqli_stmt_bind_param($stmt, "ssdii", $nome, $descricao, $preco, $estoque, $produto_id);
            mysqli_stmt_execute($stmt);

            if (mysqli_affected_rows($conexao)>0){
                $alteracao = true;
                header('Location: ../tabelas/tabProdutos.php');
                return $alteracao;
            }else{
                $alteracao = false;
                return $alteracao;                
            }
        }
    }

    if (isset($_POST['login_usuario'])) {
        // garante sessão iniciada
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $usuario_cpf = trim($_POST['cpf'] ?? '');
        $usuario_senha = trim($_POST['senha'] ?? '');

        // buscar em usuários e funcionários
        $usuario = buscarUsuarioCpf($conexao, $usuario_cpf);
        $funcionario = buscarFuncionarioCpf($conexao, $usuario_cpf);

        // caso encontre usuário comum
        if ($usuario !== null) {
            $hash = $usuario['senha'] ?? null;
            if ($hash && password_verify($usuario_senha, $hash)) {
                $_SESSION['usuario_cpf'] = $usuario['cpf'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                $_SESSION['mensagem'] = "Login realizado com sucesso!";
                header("Location: ../paginas/perfil.php");
                exit;
            } else {
                $_SESSION['mensagem'] = "Senha digitada incorreta!";
                header("Location: ../paginas/perfil.php");
                exit;
            }
        }

        // caso encontre funcionário (não confundir com $usuario)
        if ($funcionario !== null) {
            $hash = $funcionario['senha'] ?? null;
            if ($hash && password_verify($usuario_senha, $hash)) {
                $_SESSION['funcionario_cpf']  = $funcionario['cpf'];
                $_SESSION['funcionario_nome'] = $funcionario['nome'];
                $_SESSION['mensagem'] = "Login (funcionário) realizado com sucesso!";
                header("Location: ../paginas/perfil.php");
                exit;
            } else {
                $_SESSION['mensagem'] = "Senha digitada incorreta!";
                header("Location: ../paginas/perfil.php");
                exit;
            }
        }

        // se chegou aqui, não encontrou nem usuário nem funcionário
        $_SESSION['mensagem'] = "Usuário não encontrado!";
        header("Location: ../paginas/perfil.php");
        exit;
    }
?>