<?php 
$title = "Catálogo completo de perfis em alumínio PDF";
$description = "Baixe o catálogo de perfis em alumínio com medidas, modelos e aplicações. Tudo o que você precisa em um só lugar.";

include "../assets/head.php";
?>

<body>
<?php include "../components/header.php"; ?>

<!-- SECTION 1: Apresentação -->
<section class="catalogo_intro wrapper-padding">
  <div class="intro_container">
    <div class="intro_texto">
      <h1>Catálogo Digital Alquima</h1>
      <p>Conheça nossa linha completa de perfis de alumínio com acabamento impecável, ideal para esquadrias, fachadas e estruturas modernas. A Alquima oferece soluções inovadoras e duráveis para cada etapa da sua obra.</p>
      <a class="btn_primary" href="../arquivos/catalogo-alquima.pdf" target="_blank">Baixar Catálogo</a>
    </div>
    <div class="intro_pdf">
    <iframe 
  src="../arquivos/catalogo-alquima.pdf#toolbar=1" 
  width="100%" 
  height="800px" 
  style="border: none;"
  title="Catálogo Alquima">
</iframe>
    </div>
  </div>
</section>

<!-- SECTION 2: Linhas de Produtos -->
<section class="catalogo_linhas wrapper-padding">
  <h2>Linhas de Perfis de Alumínio</h2>
  <p class="sub">Encontre o que você precisa para o seu projeto com a variedade e a qualidade que só a Alquima oferece.</p>
  <div class="linhas_grid">
    <?php
    $linhas = [
      "Linha GOLD" => "",
      "Linha SUPREMA" => "",
      "FACHADA" => "",
      "Linha 16 / 25 / 30 / 42" => "",
      "Guarda-corpo" => "",
      "Lambris" => "",
      "Sacadas" => "",
      "Portões" => "",
      "Kit Pia" => "",
      "Engenharia" => "",
      "Tubos e Barras" => "",
      "Tela Mosquiteiro" => ""
    ];
    foreach ($linhas as $linha => $icone) {
      echo "
        <div class='linha_card'>
          <i class='fas $icone'></i>
          <h3>$linha</h3>
        </div>
      ";
    }
    ?>
  </div>
</section>

<!-- SECTION 3: CTA -->
<section class="catalogo_cta">
  <div class="cta_container wrapper-padding">
    <h2>Solicite uma cotação personalizada</h2>
    <p>Nossos especialistas estão prontos para atender sua necessidade com rapidez e qualidade. Clique no botão abaixo para solicitar um orçamento.</p>
    <button class="btn_header_home" id="btn-home1">Solicitar orçamento</button>
  </div>
</section>

<?php 
include "../components/footer.php"; 
include "../chatbox.php";
?>
</body>
