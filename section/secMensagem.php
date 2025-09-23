<section>
<video id="background-video" autoplay loop muted>
    <source src="../video/mar.mp4" type="video/mp4">
</video>
<div class="container" role="application" aria-label="Conversa com o biólogo">
    <div class="chat-header">
        <div style="display:flex;align-items:center;gap:12px">
            <div class="avatar-bio">BIO</div>
            <div>
                <div class="titleC">Conversa com o Biólogo</div>
                <div class="subtitle">Envie sua dúvida no campo abaixo</div>
            </div>
        </div>
    </div>

    <div class="chat-body" aria-live="polite">
        <div class="message from-bio">
            <div class="nome"><strong>Dr. Rafael — Biólogo</strong></div>
            <!--Inicio padrão-->
            Olá! Em que posso ajudar hoje? Por favor, descreva o animal (espécie, idade, alimentação) e o comportamento observado.
            <div class="time">09:02</div>
        </div>

        <div class="message from-user">
            <div class="nome"><strong>Você</strong></div>
            Meu iguana não está se alimentando direito nos últimos dias.
            <div class="time">09:05</div>
        </div>

        <div class="message from-bio">
            <div class="nome"><strong>Dr. Rafael — Biólogo</strong></div>
            Entendi. Qual a idade aproximada do seu iguana e o que costuma oferecer de alimentação?
            <div class="time">09:07</div>
        </div>
    </div>

    <form class="composer">
        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" placeholder="Escreva sua pergunta ou resposta aqui..."></textarea>
        <div class="controls">
            <button type="reset" class="btn clear">Limpar</button>
            <button type="submit" class="btn send">Enviar</button>
        </div>
    </form>
</div>
</section>