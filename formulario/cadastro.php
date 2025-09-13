<!DOCTYPE html>
<html lang="pt-br, en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css" >
</head>
<body>
    <form action="#" method="post">
        <h2>Cadastro</h2>

        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10,11}" placeholder="Somente números" required>

        <label for="nascimento">Data de nascimento:</label>
        <input type="date" id="nascimento" name="nascimento" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <div class="botoes">
            <button type="button" class="btn-voltar" onclick="history.back()">Voltar</button>
            <input type="submit" value="Cadastrar" class="btn-cadastrar">
        </div>
  </form>
</body>
</html>