<!DOCTYPE html>
<html lang="pt-br, en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Endereço</title>
    <link rel="shortcut icon"  href="../imagem/logo.png" >
    <link rel="stylesheet" type="text/css" href="../css/formulario.css" >
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/menu.css" >
    <link rel="stylesheet" type="text/css" href="../css/footer2.css" >
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

  <div class="container">
  <form action="#" method="post">
    <h2 class="titulo">Cadastro de Endereço</h2>

    <label for="cep">CEP:</label>
    <input type="text" id="cep" name="cep" pattern="\d{5}-?\d{3}" placeholder="Ex: 12345-678" required>

    <label for="rua">Rua / Logradouro:</label>
    <input type="text" id="rua" name="rua" required>

    <label for="numero">Número:</label>
    <input type="number" id="numero" name="numero" required>

    <label for="complemento">Complemento:</label>
    <input type="text" id="complemento" name="complemento">

    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" name="bairro" required>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" required>

    <label for="estado">Estado:</label>
    <select id="estado" name="estado" required>
      <option value="">-- Selecione o estado --</option>
      <option value="AC">Acre</option>
      <option value="AL">Alagoas</option>
      <option value="AP">Amapá</option>
      <option value="AM">Amazonas</option>
      <option value="BA">Bahia</option>
      <option value="CE">Ceará</option>
      <option value="DF">Distrito Federal</option>
      <option value="ES">Espírito Santo</option>
      <option value="GO">Goiás</option>
      <option value="MA">Maranhão</option>
      <option value="MT">Mato Grosso</option>
      <option value="MS">Mato Grosso do Sul</option>
      <option value="MG">Minas Gerais</option>
      <option value="PA">Pará</option>
      <option value="PB">Paraíba</option>
      <option value="PR">Paraná</option>
      <option value="PE">Pernambuco</option>
      <option value="PI">Piauí</option>
      <option value="RJ">Rio de Janeiro</option>
      <option value="RN">Rio Grande do Norte</option>
      <option value="RS">Rio Grande do Sul</option>
      <option value="RO">Rondônia</option>
      <option value="RR">Roraima</option>
      <option value="SC">Santa Catarina</option>
      <option value="SP">São Paulo</option>
      <option value="SE">Sergipe</option>
      <option value="TO">Tocantins</option>
    </select>

    <label for="pais">País:</label>
    <input type="text" id="pais" name="pais" value="Brasil" required>

  <div class="botoes">
    <button type="button" class="btn-voltar" onclick="history.back()">Voltar</button>
    <input type="submit" value="Cadastrar Endereço" class="btn-cadastrar">
  </div>

</form>
</div>

  <?php 
    if (file_exists('../hF/footer.php')){
      include '../hF/footer2.php'; 
    }
  ?>
</body>
</html>