<?php 
$title = "Perfis de Alumínio para Esquadrias e Fachadas";
$description = "Perfis de alumínio Alquima: tubos, barras, cantoneiras, linha gold, fachada e muito mais. Qualidade e resistência em cada perfil.";

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
      <img src="../img/img-alquima3.png" alt="Perfis de Alumínio Alquima">
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
    <!-- <button class="filtro_btn" data-target="engenharia">Engenharia</button>
    <button class="filtro_btn" data-target="kit-pia">Kit Pia</button>
    <button class="filtro_btn" data-target="lambril">Lambris</button>
    <button class="filtro_btn" data-target="guarda-corpo">Guarda Corpo</button>
    <button class="filtro_btn" data-target="telas">Tela Mosquiteira</button> -->
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

  <div class="conteudo_categoria" id="linha-gold">
  <h2>Linha Gold</h2>
  <p>
    Desenvolvida para projetos de alto padrão, a Linha Gold oferece perfis sofisticados com excelente acabamento, resistência e estética refinada para portas, janelas e fachadas.
  </p>
  <div class="tabela_wrapper">
    <table>
      <thead>
        <tr>
          <th>Código</th><th>Ref.</th><th>Página</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>LG-002</td><td>32C-001</td><td>76</td></tr>
        <tr><td>LG-003</td><td>32C-002</td><td>76</td></tr>
        <tr><td>LG-026</td><td>32C-003</td><td>76</td></tr>
        <tr><td>LG-027</td><td>32C-004</td><td>76</td></tr>
        <tr><td>LG-028</td><td>32C-005</td><td>76</td></tr>
        <tr><td>LG-006</td><td>32C-006</td><td>76</td></tr>
        <tr><td>LG-044</td><td>32C-007</td><td>76</td></tr>
        <tr><td>LG-045</td><td>32C-008</td><td>76</td></tr>
        <tr><td>LG-046</td><td>32C-009</td><td>77</td></tr>
        <tr><td>LG-048</td><td>32C-010</td><td>77</td></tr>
        <tr><td>LG-049</td><td>32C-011</td><td>77</td></tr>
        <tr><td>LG-056</td><td>32C-012</td><td>77</td></tr>
        <tr><td>LG-007</td><td>32C-013</td><td>77</td></tr>
        <tr><td>LG-004</td><td>32C-014</td><td>77</td></tr>
        <tr><td>LG-017</td><td>32C-015</td><td>78</td></tr>
        <tr><td>LG-019</td><td>32C-016</td><td>78</td></tr>
        <tr><td>LG-021</td><td>32C-017</td><td>78</td></tr>
        <tr><td>LG-024</td><td>32C-018</td><td>78</td></tr>
        <tr><td>LG-050</td><td>32C-019</td><td>78</td></tr>
        <tr><td>LG-058</td><td>32C-020</td><td>78</td></tr>
        <tr><td>LG-051</td><td>32C-021</td><td>79</td></tr>
        <tr><td>LG-055</td><td>32C-023</td><td>79</td></tr>
        <tr><td>LG-076</td><td>32C-024</td><td>79</td></tr>
        <tr><td>LG-085</td><td>32C-025</td><td>79</td></tr>
        <tr><td>LG-068</td><td>32C-026</td><td>79</td></tr>
        <tr><td>LG-043</td><td>32C-027</td><td>79</td></tr>
        <tr><td>LG-053</td><td>32C-027</td><td>80</td></tr>
        <tr><td>LG-018</td><td>32C-031</td><td>80</td></tr>
        <tr><td>LG-022</td><td>32C-033</td><td>80</td></tr>
        <tr><td>LG-020</td><td>32C-034</td><td>80</td></tr>
        <tr><td>LG-015</td><td>32C-035</td><td>80</td></tr>
        <tr><td>LG-047</td><td>32C-036</td><td>80</td></tr>
        <tr><td>LG-063</td><td>32C-037</td><td>81</td></tr>
        <tr><td>LG-042</td><td>32C-038</td><td>81</td></tr>
        <tr><td>LG-016</td><td>32C-039</td><td>81</td></tr>
        <tr><td>LG-061</td><td>32C-040</td><td>81</td></tr>
        <tr><td>LG-023</td><td>32C-041</td><td>81</td></tr>
        <tr><td>LG-074</td><td>32C-074</td><td>81</td></tr>
        <tr><td>LG-062</td><td>32C-028</td><td>82</td></tr>
        <tr><td>LG-066</td><td>32C-029</td><td>82</td></tr>
        <tr><td>LG0-64</td><td>32C-030</td><td>82</td></tr>
        <tr><td>LG-065</td><td>32C-078</td><td>82</td></tr>
        <tr><td>LG-070</td><td>32C-070</td><td>83</td></tr>
        <tr><td>LG-071</td><td>32C-071</td><td>83</td></tr>
        <tr><td>LG-072</td><td>32C-072</td><td>83</td></tr>
        <tr><td>LG-005</td><td>32C-075</td><td>83</td></tr>
        <tr><td>LG-052</td><td>32C-076</td><td>83</td></tr>
        <tr><td>LG-158</td><td>32C-158</td><td>84</td></tr>
        <tr><td>LG-077</td><td>32C-077</td><td>84</td></tr>
        <tr><td>LG-079</td><td>32C-079</td><td>84</td></tr>
        <tr><td>LG-083</td><td>32C-083</td><td>84</td></tr>
        <tr><td>LG-091</td><td>32C-091</td><td>84</td></tr>
        <tr><td>LG-129</td><td>32C-129</td><td>85</td></tr>
        <tr><td>LG-092</td><td>32C-092</td><td>85</td></tr>
        <tr><td>SI-348</td><td>32C-348</td><td>85</td></tr>
        <tr><td>SI-349</td><td>32C-349</td><td>85</td></tr>
        <tr><td>LG-054</td><td>LG-054</td><td>85</td></tr>
        <tr><td>BG-057</td><td>TBG-057</td><td>85</td></tr>
      </tbody>
    </table>
  </div>
</div>


 <!-- FACHADA -->
<div class="conteudo_categoria" id="fachada">
  <h2>Perfis para Fachada</h2>
  <p>
    Perfeitos para projetos arquitetônicos modernos, os perfis para fachada da Alquima unem design e desempenho estrutural, com acabamento impecável para obras comerciais e residenciais.
  </p>
  <div class="tabela_wrapper">
    <table>
      <thead>
        <tr>
          <th>Código</th><th>Ref.</th><th>Página</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>FA-200</td><td>TFA-200</td><td>90</td></tr>
        <tr><td>FA-204</td><td>TFA-204</td><td>90</td></tr>
        <tr><td>FA-207</td><td>TFA-207</td><td>90</td></tr>
        <tr><td>FA-206</td><td>TFA-206</td><td>90</td></tr>
        <tr><td>FA-211</td><td>TFA-211</td><td>90</td></tr>
        <tr><td>FA-233</td><td>TFA-233</td><td>90</td></tr>
        <tr><td>FA-228</td><td>TFA-228</td><td>91</td></tr>
        <tr><td>FA-230</td><td>TFA-230</td><td>91</td></tr>
        <tr><td>FA-223</td><td>TFA-223</td><td>91</td></tr>
        <tr><td>FA-232</td><td>TFA-232</td><td>91</td></tr>
        <tr><td>FA-226</td><td>TFA-226</td><td>91</td></tr>
        <tr><td>FA-227</td><td>TFA-227</td><td>92</td></tr>
        <tr><td>FA-237</td><td>TFA-237</td><td>92</td></tr>
        <tr><td>FA-231</td><td>TFA-231</td><td>92</td></tr>
        <tr><td>FA-247</td><td>TFA-247</td><td>92</td></tr>
        <tr><td>FA-235</td><td>TFA-235</td><td>92</td></tr>
        <tr><td>FA-236</td><td>TFA-236</td><td>92</td></tr>
        <tr><td>FA-238</td><td>TFA-238</td><td>92</td></tr>
        <tr><td>FA-245</td><td>FA-245</td><td>92</td></tr>
        <tr><td>FA-294</td><td>TFA-294</td><td>93</td></tr>
        <tr><td>FA-243</td><td>TFA-243</td><td>93</td></tr>
        <tr><td>FA-278</td><td>TFA-278</td><td>93</td></tr>
        <tr><td>FA-397</td><td>TFA-397</td><td>93</td></tr>
        <tr><td>FA-265</td><td>TFA-265</td><td>93</td></tr>
        <tr><td>FA-299</td><td>TFA-299</td><td>93</td></tr>
        <tr><td>FA-331</td><td>TFA-331</td><td>94</td></tr>
        <tr><td>FA-375</td><td>TFA-375</td><td>94</td></tr>
        <tr><td>FA-515</td><td>TFA-515</td><td>94</td></tr>
        <tr><td>FA-258</td><td>TFA-258</td><td>94</td></tr>
        <tr><td>FA-516</td><td>TFA-516</td><td>94</td></tr>
        <tr><td>FA-255</td><td>TFA-255</td><td>94</td></tr>
        <tr><td>FA-400</td><td>TFA-400</td><td>95</td></tr>
        <tr><td>FA-347</td><td>TFA-347</td><td>95</td></tr>
      </tbody>
    </table>
  </div>
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
      <img src="../img/logo-site/logo-site-black.png" alt="Solicite um orçamento de perfis de alumínio">
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

<?php 
include "../components/footer.php"; 
include "../chatbox.php";
?>
<script src="../js/produtos.js"></script>
</body>

