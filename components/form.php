<!-- FORMULÁRIO MODAL -->
<div class="overlay_form" id="formOverlay">
  <div class="form_modal">
  <button class="close_modal" onclick="fecharForm()" aria-label="Fechar formulário">
  <i class="fas fa-times"></i>
</button>
    <h2>Solicite seu orçamento</h2>
    <form id="formWhatsappModal">
      <input type="text" id="nomeModal" placeholder="Nome" required>
      <input type="email" id="emailModal" placeholder="E-mail" required>
      <input type="tel" id="telefoneModal" placeholder="Telefone" required>
      <textarea id="mensagemModal" rows="4" placeholder="Mensagem" required></textarea>
      <button type="submit" id="btnEnviarModal">ENVIAR MENSAGEM</button>
    </form>
  </div>
</div>
<script src="../js/form.js"></script>