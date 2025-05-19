<?php 
$title = "Alquima | Loja e distribuidora de perfis de alumínio";
$description = "Perfis de alumínio com padrão industrial e entrega nacional. Qualidade, variedade e estoque pronto direto da distribuidora.";

include "./assets/head.php";
?>

<body>

<?php
include "./components/header.php";
?>

<!-- HTML -->
<section class="banner_home wrapper-padding">
  <div class="banner_overlay"></div>
  <div class="banner_container">
    <div class="banner_text">
      <h4>A melhor</h4>
      <h1>Distribuidora de Perfis de Alumínio</h1>
      <p>Desde de 2018 tratamos cada <strong>cliente</strong> como sendo único<br> oferecendo as melhores <strong>condições</strong> possíveis<strong> para cada item orçado.</strong></p>
      <div class="banner_buttons">
        <a href="/contato" class="btn_primary"><i class="fa-brands fa-whatsapp"></i> Solicitar orçamento</a>
        <a href="/catalogo/" class="btn_outline">Ver Catálogo</a>
      </div>
    </div>
  </div>
</section>


<section class="section_diferenciais">
  <div class="container_diferenciais wrapper-padding">
    <div class="diferencial">
      <div class="icon_diferencial">
        <img src="https://cdn-icons-png.flaticon.com/512/6064/6064984.png" alt="Engrenagem de Precisão" />
      </div>
      <h3>Alta Precisão</h3>
      <p>Perfis de alumínio com cortes milimétricos, garantindo encaixe e desempenho perfeitos.</p>
    </div>

    <div class="diferencial">
      <div class="icon_diferencial">
        <i class="fa-solid fa-drum-steelpan"></i>
      </div>
      <h3>Matéria-Prima Premium</h3>
      <p>Trabalhamos com alumínio de alta pureza, resistente à oxidação e deformações.</p>
    </div>

    <div class="diferencial">
      <div class="icon_diferencial">
        <i class="fa-solid fa-handshake-angle"></i>
      </div>
      <h3>Suporte Técnico Especializado</h3>
      <p>Equipe treinada para auxiliar desde o projeto até a aplicação final dos produtos.</p>
    </div>
  </div>
</section>


<section class="section_quem_somos wrapper-padding">
  <div class="container_quem_somos">

    <!-- COLUNA TEXTO -->
    <div class="quem_somos_texto">
      <span class="subtitulo">Excelência é o nosso padrão</span>
      <h2 class="titulo_quem">Inovação e Agilidade estão no nosso DNA</h2>
      <p class="descricao_quem">
        É com grande satisfação que apresentamos a <strong>Alquima</strong>, uma distribuidora especializada em perfis e acessórios de alumínio para diversas indústrias e aplicações. Combinamos competência técnica e uma habilidade comercial refinada, garantindo soluções eficientes e produtos de alta qualidade para atender às necessidades específicas de cada cliente.
      </p>
      <p class="descricao_quem">
        Na <strong>Alquima</strong>, entendemos a importância de fornecer não apenas produtos, mas também um atendimento próximo e personalizado. O sucesso do seu negócio também é o nosso.
      </p>

      <!-- BLOCO DE DADOS -->
      <div class="dados_quem">
  <div class="item_dado">
    <img src="https://cdn-icons-png.flaticon.com/512/1008/1008597.png" alt="+1800 clientes">
    <h3>+1800</h3>
    <p>Clientes satisfeitos</p>
  </div>
  <div class="item_dado">
    <img src="https://cdn-icons-png.flaticon.com/512/2856/2856384.png" alt="+10 anos">
    <h3>+7</h3>
    <p>Anos de experiência</p>
  </div>
  <div class="item_dado">
    <img src="https://cdn-icons-png.flaticon.com/512/869/869636.png" alt="+5000 toneladas">
    <h3>+5000</h3>
    <p>Toneladas por ano</p>
  </div>
</div>
    </div>

    <!-- COLUNA VÍDEO -->
<div class="quem_somos_video">
  <div class="video_container">
    <video id="videoAlquima" poster="./img/img-alquima3.png" controls>
      <source src="./img/video-alquima.mp4" type="video/mp4">
      Seu navegador não suporta a tag de vídeo.
    </video>
    <button class="btn_play" onclick="document.getElementById('videoAlquima').play(); this.style.display='none'">
      ▶
    </button>
  </div>
</div>
  </div>
</section>


<section class="section_perfis wrapper-padding">
  <div class="perfis_topo">
    <h2>Encontre o que você precisa para o seu projeto</h2>
    <p>
      Temos os melhores perfis de alumínio para construção civil.<br>
      Produtos para um desempenho confiável nas diversas aplicações.
    </p>
  </div>

  <div class="grid_perfis">
    <div class="card_perfil">
      <h3>Linha Gold</h3>
    </div>
    <div class="card_perfil">
      <h3>Fachada</h3>
    </div>
    <div class="card_perfil">
      <h3>Linha Suprema</h3>
    </div>
    <div class="card_perfil">
      <h3>Linha 16/25/30/42</h3>
    </div>
    <div class="card_perfil">
      <h3>Guarda Corpo</h3>
    </div>
    <div class="card_perfil">
      <h3>Lambris</h3>
    </div>
    <div class="card_perfil">
      <h3>Sacada</h3>
    </div>
    <div class="card_perfil">
      <h3>Portões</h3>
    </div>
    <div class="card_perfil">
      <h3>Kit Pia</h3>
    </div>
    <div class="card_perfil">
      <h3>Engenharia</h3>
    </div>
    <div class="card_perfil">
      <h3>Tubos</h3>
    </div>
    <div class="card_perfil">
      <h3>Tela Mosquiteiro</h3>
    </div>
  </div>
</section>

<section class="fale_conosco wrapper-padding">
  <div class="container_fale_conosco">

    <!-- COLUNA 1: Informações -->
    <div class="contato_info">
      <h2><i class="fas fa-envelope"></i> Fale Conosco</h2>
      <p>Estamos prontos para atender você com excelência.</p>

      <div class="info_bloco">
        <i class="fas fa-map-marker-alt"></i>
        <div>
          <strong>Endereço</strong>
          <p>Av. Dalila, 677 - Vila Dalila, São Paulo - SP, 03520-000</p>
        </div>
      </div>

      <div class="info_bloco">
        <i class="fas fa-phone-alt"></i>
        <div>
          <strong>Telefone</strong>
          <p>(11) 2741-1508</p>
        </div>
      </div>

      <div class="info_bloco">
        <i class="fas fa-envelope"></i>
        <div>
          <strong>Email</strong>
          <p>vendas4@alquima.com.br</p>
        </div>
      </div>
    </div>

    <!-- COLUNA 2: Mapa -->
    <div class="contato_mapa">
      <iframe
        src="https://www.google.com/maps?q=Av.%20Dalila,%20677%20-%20Vila%20Dalila,%20São%20Paulo%20-%20SP,%2003520-000&output=embed"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
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

<script>
function playVideo() {
  const video = document.getElementById('videoAlquima');
  video.play();
  document.querySelector('.btn_play').style.display = 'none';
}
</script>

<?php

include "./components/footer.php";
include "./chatbox.php";
?>
<script src="./js/produtos.js"></script>
</body>
</html>