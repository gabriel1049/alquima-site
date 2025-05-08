<?php 
$title = "Perfis de Alumínio - Produtos Alquima";
$description = "Conheça nossa linha completa de perfis de alumínio: tubos, barras, cantoneiras, linha gold, fachada e muito mais.";

include "../assets/head.php";
?>

<body>
<?php include "../components/header.php"; ?>

<!-- HERO / BANNER -->
<section class="produtos_hero">
  <div class="wrapper-padding hero_container">
    <div class="hero_textos">
      <h1>Perfis de Alumínio</h1>
      <p>Soluções sob medida para esquadrias, fachadas, estruturas e muito mais. Explore nossa linha completa com qualidade e resistência.</p>
    </div>
    <div class="hero_img">
      <img src="../img/quem-somos-img.png" alt="Perfis de Alumínio Alquima">
    </div>
  </div>
</section>

<!-- FILTROS DE CATEGORIA -->
<section class="produtos_filtros wrapper-margin">
  <h2>Encontre o Perfil Ideal</h2>
  <div class="filtros_lista">
    <button class="filtro_btn active" data-target="tubos">Tubos</button>
    <button class="filtro_btn" data-target="barras">Barras</button>
    <button class="filtro_btn" data-target="cantoneiras">Cantoneiras</button>
    <button class="filtro_btn" data-target="linha-gold">Linha Gold</button>
    <button class="filtro_btn" data-target="fachada">Fachada</button>
    <button class="filtro_btn" data-target="engenharia">Engenharia</button>
    <button class="filtro_btn" data-target="kit-pia">Kit Pia</button>
    <button class="filtro_btn" data-target="lambril">Lambris</button>
    <button class="filtro_btn" data-target="guarda-corpo">Guarda Corpo</button>
    <button class="filtro_btn" data-target="telas">Tela Mosquiteira</button>
  </div>
</section>

<!-- CONTEÚDO DOS PRODUTOS -->
<main class="produtos_conteudo wrapper-margin">
<!-- TUBOS -->
<div class="conteudo_categoria show" id="tubos">
  <h2>Tubos Redondos</h2>
  <div class="tabela_wrapper">
    <table>
      <thead>
        <tr>
          <th>Código</th><th>Ref.</th><th>Ø (mm)</th><th>Esp. (mm)</th><th>Ø (pol)</th><th>Esp. (pol)</th><th>Peso (kg/m)</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>TUB-003</td><td>TTR-002</td><td>9,53</td><td>1,59</td><td>3/8”</td><td>1/16”</td><td>0,107</td></tr>
        <tr><td>TUB-009</td><td>TTR-005</td><td>12,7</td><td>1,59</td><td>1/2”</td><td>1/16”</td><td>0,15</td></tr>
        <tr><td>TUB-019L</td><td>TTR-011</td><td>15,88</td><td>1</td><td>5/8”</td><td>-</td><td>0,127</td></tr>
        <tr><td>TUB-019</td><td>TTR-014</td><td>15,88</td><td>1,59</td><td>5/8”</td><td>1/16”</td><td>0,193</td></tr>
        <tr><td>TUB-027</td><td>TTR-019</td><td>19,05</td><td>1,2</td><td>3/4”</td><td>-</td><td>0,182</td></tr>
        <tr><td>TUB-069</td><td>TTR-300</td><td>38,1</td><td>1,2</td><td>1.1/2”</td><td>-</td><td>0,377</td></tr>
      </tbody>
    </table>
  </div>
</div>

<!-- CANTONEIRAS -->
<div class="conteudo_categoria" id="cantoneiras">
  <h2>Cantoneiras de Abas Iguais</h2>
  <div class="tabela_wrapper">
    <table>
      <thead>
        <tr>
          <th>Código</th><th>Ref.</th><th>A (mm)</th><th>Esp. (mm)</th><th>A (pol)</th><th>Esp. (pol)</th><th>Peso (kg/m)</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>L-002</td><td>TCT-001</td><td>12,7</td><td>1,59</td><td>1/2”</td><td>1/16”</td><td>0,102</td></tr>
        <tr><td>L-405</td><td>TCT-005</td><td>15,88</td><td>1,59</td><td>5/8”</td><td>1/16”</td><td>0,128</td></tr>
        <tr><td>L-014</td><td>TCT-019</td><td>25,4</td><td>3,18</td><td>1”</td><td>1/8”</td><td>0,410</td></tr>
      </tbody>
    </table>
  </div>
</div>

<!-- BARRAS -->
<div class="conteudo_categoria" id="barras">
  <h2>Barras Chatas</h2>
  <div class="tabela_wrapper">
    <table>
      <thead>
        <tr>
          <th>Código</th><th>Ref.</th><th>A (mm)</th><th>B (mm)</th><th>A (pol)</th><th>B (pol)</th><th>Peso (kg/m)</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>BAR-012</td><td>TBC-002</td><td>12,7</td><td>3,17</td><td>1/2”</td><td>1/8”</td><td>0,109</td></tr>
        <tr><td>BAR-013</td><td>TBC-008</td><td>15,87</td><td>3,18</td><td>5/8”</td><td>1/8”</td><td>0,137</td></tr>
        <tr><td>BAR-049</td><td>TBC-009</td><td>15,87</td><td>4,76</td><td>5/8”</td><td>3/16”</td><td>0,205</td></tr>
      </tbody>
    </table>
  </div>
</div>

  <!-- LINHA GOLD -->
  <div class="conteudo_categoria" id="linha-gold">
    <h2>Linha Gold</h2>
    <p>Desenvolvida para projetos de alto padrão, a Linha Gold oferece perfis sofisticados com excelente acabamento, resistência e estética refinada para portas, janelas e fachadas.</p>
    <ul>
      <li><strong>Modelos:</strong> LG-002, LG-027, LG-058, LG-083...</li>
    </ul>
  </div>

  <!-- FACHADA -->
  <div class="conteudo_categoria" id="fachada">
    <h2>Perfis para Fachada</h2>
    <p>Perfeitos para projetos arquitetônicos modernos, os perfis para fachada da Alquima unem design e desempenho estrutural, com acabamento impecável para obras comerciais e residenciais.</p>
    <ul>
      <li><strong>Modelos:</strong> FA-200, FA-204, FA-207, FA-294...</li>
    </ul>
  </div>

  <!-- Adicione os outros conforme necessário seguindo a mesma lógica... -->

</main>

<!-- CALL TO ACTION FINAL -->
<section class="produtos_cta wrapper-padding">
  <div class="cta_container">
    <div class="cta_textos">
      <h2>Precisa de ajuda para escolher o perfil ideal?</h2>
      <p>Baixe nosso catálogo completo ou solicite um orçamento personalizado agora mesmo. Nossa equipe está pronta para atender seu projeto com agilidade e qualidade.</p>
      <div class="cta_botoes">
        <a href="../arquivos/catalogo-alquima.pdf" target="_blank" class="btn_primary">Baixar Catálogo</a>
        <button class="btn_outline" onclick="abrirForm()">Solicitar Orçamento</button>
      </div>
    </div>
    <div class="cta_imagem">
      <img src="../img/cta-produtos.png" alt="Solicite um orçamento de perfis de alumínio">
    </div>
  </div>
</section>

<!-- SECTION: CATÁLOGO EM TELA CHEIA -->
<section class="catalogo_pdf_fullscreen">
  <iframe 
    src="../arquivos/catalogo-alquima.pdf#toolbar=1&zoom=page-width&navpanes=0&scrollbar=0" 
    width="100%" 
    height="100%" 
    title="Catálogo Digital Alquima"
    style="border: none;">
  </iframe>
</section>

<?php include "../components/footer.php"; ?>
<script src="../js/produtos.js"></script>
</body>

