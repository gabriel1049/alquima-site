<?php 
$title = "Fale com a fábrica e distribuidora de alumínio";
$description = "Solicite orçamento direto com a fábrica de perfis de alumínio. Atendimento rápido e especializado para todo o Brasil.";

include "../assets/head.php";
?>

<body>
<?php include "../components/header.php"; ?>

<!-- HERO CONTATO -->
<section class="contato_hero wrapper-padding">
  <div class="hero_textos">
    <h1>Fale com a Alquima</h1>
    <p>Estamos prontos para atender sua empresa com agilidade, eficiência e atendimento personalizado. Envie uma mensagem ou nos faça uma visita!</p>
  </div>
</section>

<!-- INFORMAÇÕES + MAPA + FORMULÁRIO -->
<section class="contato_conteudo wrapper-margin">
  <div class="contato_grid">
    
    <!-- INFORMAÇÕES DE CONTATO -->
    <div class="contato_info">
      <h2>Informações de Contato</h2>
      <p><strong>Endereço:</strong> Av. Dalila, 677 - Vila Dalila, São Paulo - SP, 03520-000</p>
      <p><strong>Telefone:</strong>(11) 2741-1508</p>
      <p><strong>E-mail:</strong>vendas4@alquima.com.br</p>
      <p><strong>Horário de atendimento:</strong> Segunda à Quinta das 08h às 18h <br> Sexta - Feira 08:00 ás 17:00</p>
    </div>

    <!-- MAPA GOOGLE -->
    <div class="contato_mapa">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.067780078656!2d-46.51100228442448!3d-23.529963184695897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6169d7719eaf%3A0xf880beac3d8c76d5!2sAv.%20Dalila%2C%20677%20-%20Vila%20Dalila%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003520-000!5e0!3m2!1spt-BR!2sbr!4v1715106780000!5m2!1spt-BR!2sbr" 
        width="100%" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        title="Localização da Alquima">
      </iframe>
    </div>

    <!-- COLUNA 3: Formulário -->
    <div class="contato_form">
      <form id="formContato">
        <input type="text" id="nome" placeholder="Nome" required>
        <input type="email" id="email" placeholder="E-mail" required>
        <input type="tel" id="telefone" placeholder="Telefone" required>
        <textarea id="mensagem" rows="4" placeholder="Mensagem" required></textarea>
        <button type="submit" id="btnEnviar"><i class="fa-brands fa-whatsapp"></i>ENVIAR MENSAGEM</button>
      </form>
    </div>

  </div>
</section>

<?php 
include "../components/footer.php"; 
include "../chatbox.php";
?>
</body>


