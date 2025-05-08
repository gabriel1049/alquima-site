document.getElementById("formContato").addEventListener("submit", function(e) {
    e.preventDefault();
  
    const nome = document.getElementById("nome").value.trim();
    const email = document.getElementById("email").value.trim();
    const telefone = document.getElementById("telefone").value.trim();
    const mensagem = document.getElementById("mensagem").value.trim();
  
    const texto = `*Novo contato via site Alquima:*\n\n` +
                  `👤 Nome: ${nome}\n` +
                  `📧 E-mail: ${email}\n` +
                  `📞 Telefone: ${telefone}\n` +
                  `💬 Mensagem: ${mensagem}`;
  
    const numero = "5511946354481"; // WhatsApp com DDI +55
    const url = `https://wa.me/${numero}?text=${encodeURIComponent(texto)}`;
  
    const btn = document.getElementById("btnEnviar");
    btn.textContent = "Enviando...";
    btn.style.backgroundColor = "#ff5000";
  
    setTimeout(() => {
      window.open(url, "_blank");
      btn.textContent = "ENVIAR MENSAGEM";
      btn.style.backgroundColor = "#0066ff";
    }, 800);
  });


  const header = document.getElementById("header");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 60) {
      header.classList.add("fixed");
    } else {
      header.classList.remove("fixed");
    }
  });