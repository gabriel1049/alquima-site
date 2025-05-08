// Aguarda o carregamento do DOM
document.addEventListener('DOMContentLoaded', function () {
    const botoes = document.querySelectorAll('.filtro_btn');
    const conteudos = document.querySelectorAll('.conteudo_categoria');
  
    botoes.forEach((btn) => {
      btn.addEventListener('click', () => {
        const destino = btn.getAttribute('data-target');
  
        // Remove classe "show" de todos os blocos
        conteudos.forEach((el) => {
          el.classList.remove('show');
        });
  
        // Remove classe "active" de todos os botões
        botoes.forEach((b) => b.classList.remove('active'));
  
        // Adiciona classe "show" ao conteúdo clicado
        document.getElementById(destino).classList.add('show');
  
        // Marca o botão como ativo
        btn.classList.add('active');
      });
    });
  });
  