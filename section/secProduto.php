<section class="produtos-section">
    <div class="container">
        <h1 class="titulo">Nossos Produtos</h1>
        
        <button class="btn btn-success" style="margin-bottom: 30px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" 
        aria-controls="offcanvasRight">Filtros</button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Filtros</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Categoria
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <ul class="lista-checkbox">
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="repteis">
                                        <span>Roupas</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="anfibios">
                                        <span>Brinquedos</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="aves">
                                        <span>Rações</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="peixes">
                                        <span>Higiene</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="peixes">
                                        <span>Aquários / Terrários</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="peixes">
                                        <span>Outros</span>
                                        </label>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Preços
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="lista-checkbox">
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="repteis">
                                        <span>Abaixo de R$100,00</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="anfibios">
                                        <span>Entre R$100,00 a R$200,00</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="aves">
                                        <span>Entre R$200,00 a 300,00</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="peixes">
                                        <span>Entre R$300,00 a R$400,00</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="peixes">
                                        <span>Entre R$400,00 a R$500,00</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="peixes">
                                        <span>Acima de R$500,00</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Animais
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="lista-checkbox">
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="aves">
                                        <span>Aves</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="repteis">
                                        <span>Répteis</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="peixes">
                                        <span>Peixes</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="anfibios">
                                        <span>Anfíbios</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                        <input type="checkbox" name="filtro" value="peixes">
                                        <span>Mamíferos</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <div class="grid-produtos">
        <!-- Produto 1 -->
        <div class="produto-card">
          <img src="../imagem/brinquedos.png" alt="Produto 1">
          <h2>Brinquedos para Répteis</h2>
          <p class="preco">R$ 450,00</p>
          <button class="btn ver-mais">Ver Detalhes</button>
        </div>

        <!-- Produto 2 -->
        <div class="produto-card">
          <img src="../imagem/racao.png" alt="Produto 2">
          <h2>Ração para Répteis</h2>
          <p class="preco">R$ 120,00</p>
          <button class="btn ver-mais">Ver Detalhes</button>
        </div>

        <!-- Produto 3 -->
        <div class="produto-card">
          <img src="../imagem/roupas.png" alt="Produto 3">
          <h2>Roupas</h2>
          <p class="preco">R$ 90,00</p>
          <button class="btn ver-mais">Ver Detalhes</button>
        </div>

        <!-- Produto 4 -->
        <div class="produto-card">
          <img src="../imagem/higiene.png" alt="Produto 4">
          <h2>Higiene para Anfíbios</h2>
          <p class="preco">R$ 380,00</p>
          <button class="btn ver-mais">Ver Detalhes</button>
        </div>

        <div class="produto-card">
          <img src="../imagem/higiene.png" alt="Produto 4">
          <h2>Higiene para Anfíbios</h2>
          <p class="preco">R$ 380,00</p>
          <button class="btn ver-mais">Ver Detalhes</button>
        </div>

      </div>
    </div>
</section>