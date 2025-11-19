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
                                    echo '<a class="nav-link mx-3" aria-current="page" href="#" style="font-weight: 600;">HOME</a>';
                                }else{
                                    echo '<a class="nav-link mx-3" href="../index.php">HOME</a>';
                                }
                            ?>

                        </li>
                        <li class="nav-item">

                            <?php
                                $pag = basename($_SERVER['PHP_SELF']);
                                if($pag === 'produtos.php'){
                                    echo '<a class="nav-link mx-3" aria-current="page" href="#" style="font-weight: 600;">PRODUTOS</a>';
                                }else if($pag === 'index.php'){
                                    echo '<a class="nav-link mx-3" href="paginas/produtos.php">PRODUTOS</a>';
                                }else{
                                    echo '<a class="nav-link mx-3" href="../paginas/produtos.php">PRODUTOS</a>';
                                }
                            ?>
                        </li>
                        <li class="nav-item">

                            <?php
                                $pag = basename($_SERVER['PHP_SELF']);
                                if($pag === 'categorias.php'){
                                    echo '<a class="nav-link mx-3" aria-current="page" href="#" style="font-weight: 600;">CATEGORIAS</a>';
                                }else if($pag === 'index.php'){
                                    echo '<a class="nav-link mx-3" href="paginas/categorias.php">CATEGORIAS</a>';
                                }else{
                                    echo '<a class="nav-link mx-3" href="../paginas/categorias.php">CATEGORIAS</a>';
                                }
                            ?>
                        </li>
                        <li class="nav-item">

                            <?php
                                $pag = basename($_SERVER['PHP_SELF']);
                                if($pag === 'contatos.php'){
                                    echo '<a class="nav-link mx-3" aria-current="page" href="#" style="font-weight: 600;">CONTATOS</a>';
                                }else if($pag === 'index.php'){
                                    echo '<a class="nav-link mx-3" href="paginas/contatos.php">CONTATOS</a>';
                                }else{
                                    echo '<a class="nav-link mx-3" href="../paginas/contatos.php">CONTATOS</a>';
                                }
                            ?>

                        </li>
                        <li class="nav-item">
                            <?php
                                $pag = basename($_SERVER['PHP_SELF']);
                                if($pag === 'perfil.php'){
                                    echo '<a class="nav-link mx-3" aria-current="page" href="#" style="font-weight: 600;">PERFIL</a>';
                                }else if($pag === 'index.php'){
                                    echo '<a class="nav-link mx-3" href="paginas/perfil.php">PERFIL</a>';
                                }else{
                                    echo '<a class="nav-link mx-3" href="../paginas/perfil.php">PERFIL</a>';
                                }
                            ?>
                        </li>
                    </ul>
                    <div class="carrinho-pesquisa">
                        <div id="carrinho">

                            <?php
                                $pag = basename($_SERVER['PHP_SELF']); 
                                if($pag === 'index.php'){
                                    echo '<img src="imagem/carrinho.png" alt="Carrinho" />';
                                } else{
                                    echo '<img src="../imagem/carrinho.png" alt="Carrinho" />';
                                }
                            ?>
                        </div>

                        <div class="input-group">
                        <div class="input-icon">

                            <?php
                                $pag = basename($_SERVER['PHP_SELF']); 
                                if($pag === 'index.php'){
                                    echo '<img src="imagem/pesquisa.png" alt="Pesquisas">';
                                } else{
                                    echo '<img src="../imagem/pesquisa.png" alt="Pesquisas"> ';
                                }
                            ?>
                        </div>
                        <input id="search" type="text" class="input-field" placeholder="Pesquisar">
                    </div>
                    </div>
                </div>
            </div>
        </nav>

</header>
