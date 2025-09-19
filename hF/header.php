<header id="cabecalho">
    <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="nome">

                    <?php
                        $pag = basename($_SERVER['PHP_SELF']); // retorna só o nome, ex: "cadastro.php"
                        if($pag === 'index.php'){
                            echo '<img src="imagem/logo.png" alt="logo">';
                        } else{
                            echo '<img src="../imagem/logo.png" alt="logo">';
                        }
                    ?>

                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            
                            <?php
                                $pag = basename($_SERVER['PHP_SELF']);
                                if($pag === 'index.php'){
                                    echo '<a class="nav-link active" aria-current="page" href="#">Home</a>';
                                }else{
                                    echo '<a class="nav-link" href="../index.php">Home</a>';
                                }
                            ?>

                        </li>
                        <li class="nav-item">

                            <?php
                                $pag = basename($_SERVER['PHP_SELF']);
                                if($pag === 'produtos.php'){
                                    echo '<a class="nav-link active" aria-current="page" href="#">Produtos</a>';
                                }else if($pag === 'index.php'){
                                    echo '<a class="nav-link" href="paginas/produtos.php">Produtos</a>';
                                }else{
                                    echo '<a class="nav-link" href="../paginas/produtos.php">Produtos</a>';
                                }
                            ?>

                        <!--<a class="nav-link" href="#">Produtos</a>-->
                        </li>
                        <li class="nav-item">

                            <?php
                                $pag = basename($_SERVER['PHP_SELF']);
                                if($pag === 'categorias.php'){
                                    echo '<a class="nav-link active" aria-current="page" href="#">Categorias</a>';
                                }else if($pag === 'index.php'){
                                    echo '<a class="nav-link" href="paginas/categorias.php">Categorias</a>';
                                }else{
                                    echo '<a class="nav-link" href="../paginas/categorias.php">Categorias</a>';
                                }
                            ?>

                        <!--<a class="nav-link" href="#">Categorias</a>-->
                        </li>
                        <li class="nav-item">

                            <?php
                                $pag = basename($_SERVER['PHP_SELF']);
                                if($pag === 'contatos.php'){
                                    echo '<a class="nav-link active" aria-current="page" href="#">Contatos</a>';
                                }else if($pag === 'index.php'){
                                    echo '<a class="nav-link" href="paginas/contatos.php">Contatos</a>';
                                }else{
                                    echo '<a class="nav-link" href="../paginas/contatos.php">Contatos</a>';
                                }
                            ?>

                        </li>
                        <li class="nav-item">
                            <?php
                                $pag = basename($_SERVER['PHP_SELF']);
                                if($pag === 'perfil.php'){
                                    echo '<a class="nav-link active" aria-current="page" href="#">Perfil</a>';
                                }else if($pag === 'index.php'){
                                    echo '<a class="nav-link" href="paginas/perfil.php">Perfil</a>';
                                }else{
                                    echo '<a class="nav-link" href="../paginas/perfil.php">Perfil</a>';
                                }
                            ?>

                        <!--<a class="nav-link" href="#">Perfil</a>-->
                        </li>
                    </ul>
                    <!--<div id="carrinho">
                        <img src="imagem/carrinho.png">
                    </div>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search"/>
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                    <div class="input-group">
                        <div class="input-icon">
                            <img src="imagem/pesquisa.png" alt="PesquisaS">
                        </div>
                        <input id="search" type="text" class="input-field" placeholder="Pesquisar">
                    </div>!-->
                    <div class="carrinho-pesquisa">
                        <div id="carrinho">

                            <?php
                                $pag = basename($_SERVER['PHP_SELF']); // retorna só o nome, ex: "cadastro.php"
                                if($pag === 'index.php'){
                                    echo '<img src="imagem/carrinho.png" alt="Carrinho" />';
                                } else{
                                    echo '<img src="../imagem/carrinho.png" alt="Carrinho" />';
                                }
                            ?>

                            <!--<img src="imagem/carrinho.png" alt="Carrinho" />-->
                        </div>

                        <div class="input-group">
                        <div class="input-icon">

                            <?php
                                $pag = basename($_SERVER['PHP_SELF']); // retorna só o nome, ex: "cadastro.php"
                                if($pag === 'index.php'){
                                    echo '<img src="imagem/pesquisa.png" alt="Pesquisas">';
                                } else{
                                    echo '<img src="../imagem/pesquisa.png" alt="Pesquisas"> ';
                                }
                            ?>

                            <!--<img src="imagem/pesquisa.png" alt="PesquisaS">-->
                        </div>
                        <input id="search" type="text" class="input-field" placeholder="Pesquisar">
                    </div>
                    </div>
                </div>
            </div>
        </nav>

</header>
