<!DOCTYPE html>
<html lang="pt-br, en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoLution</title>
    <link rel="shortcut icon"  href="../imagem/logo.png" >
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/menu.css" >
    <link rel="stylesheet" type="text/css" href="../css/footer2.css" >
    <link rel="stylesheet" type="text/css" href="../css/secProduto.css" >
    
</head>
<body>
    <?php 
        if (file_exists('../hF/header.php')){
            include '../hF/header.php'; 
        }
    ?>
    <?php 
        if (file_exists('../section/secProduto.php')){
            include '../section/secProduto.php'; 
        }
    ?>
    <?php 
        if (file_exists('../hF/footer.php')){
            include '../hF/footer2.php'; 
        }
    ?>
    <script src="../bootstrap/bootstrap.js"></script>
</body>