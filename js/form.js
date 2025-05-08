 // Referências aos elementos
 const overlay = document.getElementById("formOverlay");
 const abrir = document.getElementById("btn-home1");
 const fechar = document.querySelector(".close_modal");
 const form = document.getElementById("formWhatsappModal");
 const btn = document.getElementById("btnEnviarModal");

 // Abrir o formulário
 abrir.addEventListener("click", () => {
   overlay.style.display = "flex";
   document.body.style.overflow = "hidden"; // trava scroll
 });

 // Fechar ao clicar no botão X
 fechar.addEventListener("click", fecharForm);

 // Fechar ao clicar fora do formulário
 overlay.addEventListener("click", function (e) {
   if (e.target === overlay) {
     fecharForm();
   }
 });

 // Fechar ao pressionar ESC
 document.addEventListener("keydown", function (e) {
   if (e.key === "Escape") {
     fecharForm();
   }
 });

 function fecharForm() {
   overlay.style.display = "none";
   document.body.style.overflow = "auto";
   form.reset();
 }

 // Enviar dados via WhatsApp
 form.addEventListener("submit", function (e) {
   e.preventDefault();

   const nome = document.getElementById("nomeModal").value.trim();
   const email = document.getElementById("emailModal").value.trim();
   const telefone = document.getElementById("telefoneModal").value.trim();
   const mensagem = document.getElementById("mensagemModal").value.trim();

   const texto = `*Novo orçamento solicitado via site Alquima:*\n\n` +
     `👤 Nome: ${nome}\n` +
     `📧 E-mail: ${email}\n` +
     `📞 Telefone: ${telefone}\n` +
     `💬 Mensagem: ${mensagem}`;

   const numero = "5511946354481";
   const url = `https://wa.me/${numero}?text=${encodeURIComponent(texto)}`;

   btn.textContent = "Enviando...";
   btn.style.backgroundColor = "#ff5000";

   setTimeout(() => {
     window.open(url, "_blank");
     btn.textContent = "ENVIAR MENSAGEM";
     btn.style.backgroundColor = "#0066ff";
     fecharForm();
   }, 800);
 });