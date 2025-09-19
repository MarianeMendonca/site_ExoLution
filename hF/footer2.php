<footer id="rodape">
  <div class="footer-container">
    
    <!-- Sobre -->
    <div class="footer-col">
      <h3>ExoLution</h3>
      <p>Cuidando com amor e respeito do seu universo exótico.</p>
    </div>

    <!-- Redes sociais -->
    <div class="footer-col">
      <h4>Siga-nos</h4>
      <div class="social-links">
        
        <?php
          $pag = basename($_SERVER['PHP_SELF']); // retorna só o nome, ex: "cadastro.php"
          if($pag === 'index.php'){
            echo '<a href="#" target="_blank"><img src="imagem/instagram.png" alt="Instagram"></a>
                  <a href="#" target="_blank"><img src="imagem/facebook.png" alt="Facebook"></a>
                  <a href="#" target="_blank"><img src="imagem/whatsapp.png" alt="WhatsApp"></a>';
          }else{
            echo '<a href="#" target="_blank"><img src="../imagem/instagram.png" alt="Instagram"></a>
                  <a href="#" target="_blank"><img src="../imagem/facebook.png" alt="Facebook"></a>
                  <a href="#" target="_blank"><img src="../imagem/whatsapp.png" alt="WhatsApp"></a>';
          }
        ?>

        <!--<a href="#" target="_blank"><img src="imagem/instagram.png" alt="Instagram"></a>
        <a href="#" target="_blank"><img src="imagem/facebook.png" alt="Facebook"></a>
        <a href="#" target="_blank"><img src="imagem/whatsapp.png" alt="WhatsApp"></a>-->
      </div>
    </div>

    <!-- Contato -->
    <div class="footer-col">
      <h4>Contato</h4>
      <p>Email: contato@exolution.com</p>
      <p>Tel: (11) 99999-9999</p>
    </div>

  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 ExoLution. Todos os direitos reservados. 
      | <a href="#">Política de Privacidade</a> | <a href="#">Termos de Uso</a>
    </p>
  </div>
</footer>

<div class="watermark">ExoLution</div>
