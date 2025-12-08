<?php 
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }

    require_once '../bd/funcoes.php';
?>
<section>
<div class="body">
    <video id="background-video" autoplay loop muted>
        <source src="../video/mar.mp4" type="video/mp4">
    </video>
    <div class="container">
    
        <div class="profile-header">
            <img src="../imagem/perfil.png" alt="Foto do usuário" class="avatar">
            <div class="profile-info">
                <?php
                
                $usuario_nome = $_SESSION['usuario_nome'] ?? '';
                $funcionario_cpf = $_SESSION['funcionario_cpf'] ?? '';
                $funcionario_nome = $_SESSION['funcionario_nome'] ?? '';

                if (empty($usuario_nome) && empty($funcionario_cpf)): ?>
                    <h1>Usuário</h1>
                    <p class="role">---</p>

                    <button class="btn"><a href="../formulario/login.php">Login</a></button>
                <?php elseif(empty($funcionario_cpf)): ?>
                    <h1><?= htmlspecialchars($usuario_nome ?: 'Usuário') ?></h1>
                    <p class="role">Tutor(a) de animais exóticos</p>

                    <button class="btn"><a href="../bd/logout.php">Sair</a></button>
                <?php else: ?>
                    <h1><?= htmlspecialchars($funcionario_nome ?: 'Usuário') ?></h1>
                    <p class="role">Funcionário</p>

                    <button class="btn" id="adm"><a href="../paginas/administracao.php">Administração</a></button>
                    <button class="btn"><a href="../bd/logout.php">Sair</a></button>
                <?php endif; ?>
            </div>
        </div>

        <div class="grid">
        
            <div class="card">
                <h2>Meus Animais</h2>
                <ul class="list">
                    <li>Dragão-Barbudo (Rex)</li>
                    <li>Arara Azul (Luna)</li>
                    <li>Píton Real (Naga)</li>
                </ul>
                <button class="btn full"><a href="../formulario/cadastroAnimal.php">+ Adicionar Animal</a></button>
            </div>

            <div class="card">
                <h2>Perguntas</h2>
                <ul class="list small">
                    <li>
                        <span>Cuidados com a Arara</span>
                        <span class="date">12/09/2025</span>
                    </li>
                    <li>
                        <span>Exame do Dragão-Barbudo</span>
                        <span class="date">05/08/2025</span>
                    </li>
                </ul>
                <a href="Mensagem.php">
                    <button class="btn full gradient"><a href="../paginas/mensagem.php">Nova Pergunta</a></button>
                </a>
            </div>

            <div class="card">
                <h2>Perguntas Pendentes</h2>
                <div class="carrinho" style="max-height: 250px;">
                    <ul class="list small">
                        <li>
                            <span>Cuidados com a Arara</span>
                            <span class="date">12/09/2025</span>
                        </li>
                        <li>
                            <span>Exame do Dragão-Barbudo</span>
                            <span class="date">05/08/2025</span>
                        </li>
                        <li>
                            <span>Exame do Dragão-Barbudo</span>
                            <span class="date">05/08/2025</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <h2>Carinho de Compras</h2>
                <div class="carrinho">
                    <div class="recommendation">
                        <span>Ração premium para répteis</span>
                        <div class="button">
                            <button class="btn small"><a href="../formulario/confCompra.php">Comprar</a></button>
                            <button class="btnE delete">Excluir</button>
                        </div>
                    </div>
                    <div class="recommendation">
                        <span>Brinquedo interativo para aves</span>
                        <div class="button">
                            <button class="btn small"><a href="../formulario/confCompra.php">Comprar</a></button>
                            <button class="btnE delete">Excluir</button>
                        </div>
                    </div>
                    <div class="recommendation">
                        <span>Brinquedo interativo para aves</span>
                        <div class="button">
                            <button class="btn small"><a href="../formulario/confCompra.php">Comprar</a></button>
                            <button class="btnE delete">Excluir</button>
                        </div>
                    </div>
                </div>
                <button class="btn full gradient"><a href="../formulario/confCompra.php">Comprar tudo</a></button>
            </div>

            <div class="card">
                <h2>Compras</h2>
                <div class="carrinho" style="max-height: 250px;">
                    <div class="recommendation">
                        <span>Ração premium para répteis</span>
                        <button class="btn small">Ver</button>
                    </div>
                    <div class="recommendation">
                        <span>Brinquedo interativo para aves</span>
                        <button class="btn small">Ver</button>
                    </div>
                    <div class="recommendation">
                        <span>Brinquedo interativo para aves</span>
                        <button class="btn small">Ver</button>
                    </div>
                    <div class="recommendation">
                        <span>Brinquedo interativo para aves</span>
                        <button class="btn small">Ver</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <h2>Endereços Cadastrados</h2>
                <div class="carrinho">
                    <div class="recommendation">
                        <span>Rua da Penha, 309, Penha, Passos, MG, Brasil</span>
                        <div class="button">
                            <button class="btn small">Editar</button>
                            <button class="btnE delete">Excluir</button>
                        </div>
                    </div>
                </div>
                <a href="../formulario/endereco.php">
                    <button class="btn full gradient"><a href="../formulario/endereco.php">+ Adicionar Endereço</a></button>
                </a>
            </div>

        </div>
    </div>
</div>
</section>