<section class="admin-section" aria-labelledby="admin-title">
  <div class="categorias container-lg" style="margin-top: 15px;">
    <h1 id="admin-title" class="titulo">Administração</h1>

    <div class="grid-categorias">
      <!-- Usuários -->
      <div class="card admin-card usuario" role="group" aria-label="Usuários - Gerenciar">
        <div class="card-border"></div>
        <div class="card-inner">
          <div class="card-meta">
            <div class="icon" aria-hidden="true">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                <path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM4 20a8 8 0 0 1 16 0" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="titles">
              <h2>Usuários</h2>
              <p class="sub">Gerenciar contas e permissões</p>
            </div>
          </div>

          <div class="card-stats"></div>

          <div class="card-actions" aria-hidden="true">
            <a class="action view" href="tabela_usuarios.php" title="Ver" aria-label="Ver Usuários" role="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 5c7 0 11 7 11 7s-4 7-11 7S1 12 1 12s4-7 11-7z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.4"/>
              </svg>
            </a>

            <a class="action add" href="../formulario/cadastro.php" title="Adicionar" aria-label="Adicionar Usuários" role="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Funcionários -->
      <div class="card admin-card funcionarios" role="group" aria-label="Funcionários - Gerenciar">
        <div class="card-border"></div>
        <div class="card-inner">
          <div class="card-meta">
            <div class="icon">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                <path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM21 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="titles">
              <h2>Funcionários</h2>
              <p class="sub">Horários e permissões</p>
            </div>
          </div>

          <div class="card-stats"></div>

          <div class="card-actions" aria-hidden="true">
            <a class="action view" href="tabela_funcionarios.php" title="Ver" aria-label="Ver Funcionários" role="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 5c7 0 11 7 11 7s-4 7-11 7S1 12 1 12s4-7 11-7z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.4"/>
              </svg>
            </a>

            <a class="action add" href="../formulario/cadFuncionario.php" title="Adicionar" aria-label="Adicionar Funcionários" role="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Fornecedores -->
      <div class="card admin-card fornecedores" role="group" aria-label="Fornecedores - Gerenciar">
        <div class="card-border"></div>
        <div class="card-inner">
          <div class="card-meta">
            <div class="icon">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                <path d="M3 7h18M6 21h12M12 3v18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="titles">
              <h2>Fornecedores</h2>
              <p class="sub">Contatos e contratos</p>
            </div>
          </div>

          <div class="card-stats"></div>

          <div class="card-actions" aria-hidden="true">
            <a class="action view" href="tabela_fornecedores.php" title="Ver" aria-label="Ver Fornecedores" role="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 5c7 0 11 7 11 7s-4 7-11 7S1 12 1 12s4-7 11-7z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.4"/>
              </svg>
            </a>

            <a class="action add" href="add_fornecedor.php" title="Adicionar" aria-label="Adicionar Fornecedores" role="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Encomendas -->
      <div class="card admin-card encomendas" role="group" aria-label="Encomendas - Gerenciar">
        <div class="card-border"></div>
        <div class="card-inner">
          <div class="card-meta">
            <div class="icon">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                <path d="M21 16V8a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3 10h18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="titles">
              <h2>Encomendas</h2>
              <p class="sub">Status e rastreio</p>
            </div>
          </div>

          <div class="card-stats"></div>

          <div class="card-actions" aria-hidden="true">
            <a class="action view" href="tabela_encomendas.php" title="Ver" aria-label="Ver Encomendas" role="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 5c7 0 11 7 11 7s-4 7-11 7S1 12 1 12s4-7 11-7z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.4"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Produtos -->
      <div class="card admin-card produtos" role="group" aria-label="Produtos - Gerenciar">
        <div class="card-border"></div>
        <div class="card-inner">
          <div class="card-meta">
            <div class="icon">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                <rect x="3" y="7" width="18" height="12" rx="2" stroke="currentColor" stroke-width="1.6"/>
              </svg>
            </div>
            <div class="titles">
              <h2>Produtos</h2>
              <p class="sub">Estoque e categorias</p>
            </div>
          </div>

          <div class="card-stats"></div>

          <div class="card-actions" aria-hidden="true">
            <a class="action view" href="tabela_produtos.php" title="Ver" aria-label="Ver Produtos" role="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 5c7 0 11 7 11 7s-4 7-11 7S1 12 1 12s4-7 11-7z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.4"/>
              </svg>
            </a>

            <a class="action add" href="../formulario/cadProduto.php" title="Adicionar" aria-label="Adicionar Produtos" role="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Compras -->
      <div class="card admin-card outros" role="group" aria-label="Compras - Gerenciar">
        <div class="card-border"></div>
        <div class="card-inner">
          <div class="card-meta">
            <div class="icon">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                <path d="M6 3h12l1 7H5l1-7zM3 18h18v3H3z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="titles">
              <h2>Compras</h2>
              <p class="sub">Relatórios e notas</p>
            </div>
          </div>

          <div class="card-stats"></div>

          <div class="card-actions" aria-hidden="true">
            <a class="action view" href="tabela_compras.php" title="Ver" aria-label="Ver Compras" role="button">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M12 5c7 0 11 7 11 7s-4 7-11 7S1 12 1 12s4-7 11-7z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.4"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
