<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="logo_branca.png" type="image/x-icon"/>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
          <!-- Fonts -->
          <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
        </head>
<title>Tucandeira Web</title>
<style>
  /* gradiente */
  
.bg-gradiente {
    background-image: linear-gradient(to bottom, black 0%, #280162 50%,#04000A 100%);} 
body{
  color:white;
  background-image: linear-gradient(to bottom, black 0%, #280162 50%, #04000A 100%);}
    /* Definições gerais */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-optical-sizing: auto;
  font-style: normal;
}

body {
  color: white;
}
  /* Header Style */
  
header {
  background-color: #000000;
  /*display: flex;  Propriedade p/ deixar ao lado na barra de nav 
  justify-content: space-between;  justifica a direita, adiciona espaço, precisa ter o 'display: flex', alinhamento horizantal
  align-items: center; alinhamento vertical ao centro */
  /* Espaçamento interno*/
  padding-top: 24px;
  padding-bottom: 24px;
  padding-left: 80px;
  padding-right: 80px;
}
  
header {
  background-color: black;
}

header nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 24px;
  padding-bottom: 24px;
  padding-left: 60px;
  padding-right: 100px;
}

header a {
  color: white;
  font-weight: 600;
  text-decoration: none;
  font-size: 18px;
  margin-left: -20px;
}

header nav a:hover {
  text-transform: uppercase;
  color: #9b1f53;
}

.botaologin:hover {
  background-color: #9b1f53;
  border-color: #9b1f53;
  border-radius: 30px;
}

/* Botão de login  */

.botaologin:hover,
.botaowhatsapp:hover {
  background-color: 
  #9b1f53;
}
.botaologin
 {
  background-color:black;
  color:white;
  border-color: #9b1f53;
  border-radius: 20px;
  padding: 10px 20px;
  font-size: 18px;
  cursor: pointer;
  color: white;
  transition: background-color 0.3s;
}
/* FIM STYLE HEADER */
/* ///////////////////////////STYLE TELA 1 HOME */

/* Seção "Início" */
.inicio {
  margin-top: 70px;
  margin-left: 150px;
}

.inicioh3 {
  margin-left: -130px;
  font-size: medium;
}

.orcamento {
  margin-left: 10px;
}

.botaozap1 {
  height: 60px;
  width: fit-content;
}

.pergunta {
  font-weight: 600;
  text-align: center;
}

h1{
    font-weight:600;
    font-size:50px
   
}

h3{
font-weight:600;
font-size:40px;
margin-left:130px;
margin-top:30px;
}

/* Botão  WhatsApp */

.botaowhatsapp {
  background-color: #9b1f53;
  border-color: #9b1f53;
  border-radius: 20px;
  padding: 10px 20px;
  font-size: 18px;
  cursor: pointer;
  color: white;
  transition: background-color 0.3s;
}




/* Botão WhatsApp no índice */
.botao {
  display: inline-block;
  padding: 5px 10px;
  margin-top:50px;
  border: none;
  border-radius: 15px;
  font-size: 18px;
  text-align: left;
  cursor: pointer;
  color: white;
  background-color: #81039b;
  margin-left:-15px;
}
.botao:hover{
  background-color: #9b1f53;
}

.botao img {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  max-width: 100%;
  height: auto;
}
/* CARROSSEL HOME */
.carousel-wrapper {
    display: flex; /* Utilizando flexbox para alinhar itens lado a lado */
    align-items: flex-start; /* Alinhar itens no topo */
}

.carousel {
    position: relative;
    width: 80%; /* Aumentando a largura para 80% da largura do container pai */
    max-width: 1000px; /* Definindo um max-width para o carrossel */
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin: 0 auto; /* Centralizando horizontalmente */
    margin-right:45px;
    margin-top:-495px;
}

.carousel-inner {
    display: flex;
    transition: transform 0.5s ease;
}

.carousel-item {
    flex: 0 0 auto; /* Deixando os itens flexíveis */
    box-sizing: border-box;
    width: 100%; /* Ocupando toda a largura do carrossel */
}

.carousel-item img {
    width: 100%; /* Imagens ocupando toda a largura dos itens */
    display: block;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 5px;
    cursor: pointer;
    z-index: 1;
    border-radius: 50%;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}
/* //////////////////////CRIAÇÃO DE WEBSITE///////////////////// */

.website{
  margin-top:500px;
h3{
  color:#BE6AD1;
  margin-top:70px;
  margin-left:20px;
  font-weight:600;
}
.p-website{
font-weight:500;
font-size:35px;
margin-top:15px;
}
}
.container {
  display: flex;
  justify-content: center; /* Centraliza os elementos na horizontal */
  align-items: center; /* Centraliza os elementos na vertical */
  gap: 10px; /* Espaço entre as imagens */
  margin-left:300px;
  margin-top:70px;
}

.container img {
  width: 700px;
  height: 394px;
  padding: 20px; /* Espaçamento interno das imagens */
}
.globo {
  display: flex;
  justify-content: center; /* Centraliza a imagem dentro de .globo */
}

.globo img {
  width: 810px;
  padding: 20px; /* Espaçamento interno da imagem dentro de .globo */
}
/* ///////////////////////////////FIM CRIAÇÃO DE WEBSITE///////////////////// */
/* GESTÃO DE MÍDIAS SOCIAIS */
 
.gestao-midias {
  display: flex;
  flex-direction: column; /* Para alinhar o conteúdo verticalmente */
  align-items: center; /* Centraliza os elementos na vertical */
  gap: 30px; /* Aumenta o espaço entre os elementos dentro de .gestao-midias */
}

.gestao-midias .container {
  display: flex;
  justify-content: center; /* Centraliza os elementos na horizontal */
  align-items: center; /* Centraliza os elementos na vertical */
  gap: 100px; /* Mantém o espaço entre as imagens dentro de .container */
}

.gestao-midias .p-midias {
  font-weight: 500;
  font-size: 30px;
  margin-top: 15px;

  text-align: center; /* Centraliza o texto */
}


.gestao-midias{
  h3{
  color:#BE6AD1;
  margin-top:70px;
  margin-left:20px;
  font-weight:600;
}
.p-midias{
font-weight:500;
font-size:30px;
margin-top:15px;
margin-left:-200px;
}
img{
  
width:30%;
height:45%;

}
   }
/* ANIMAÇÃO IMAGEM BRAYAN CSS */
/* IMAGEM DEVE VIM DA DIREITA PARA A ESQUERDA E O PONTO FINAL É ONDE ESTÁ PARADO NO HTML */
/* GLOBO MIDIAS */

.globo-midias {
  display: flex;
  flex-direction: column; /* Para alinhar o conteúdo verticalmente */
  align-items: center; /* Centraliza os elementos na vertical */
  gap: 30px; /* Aumenta o espaço entre os elementos dentro de .gestao-midias */
  margin-top:-70px;
}

.globo-midias .container {
  display: flex;
  justify-content: center; /* Centraliza os elementos na horizontal */
  align-items: center; /* Centraliza os elementos na vertical */
  gap: 100px; /* Mantém o espaço entre as imagens dentro de .container */
}

.globo-midias .pglobo-midias {
  font-weight: 500;
  font-size: 30px;
  margin-top: 15px;

  text-align: center; /* Centraliza o texto */
}


.globo-midias{
  h3{
  color:#BE6AD1;
  margin-top:70px;
  margin-left:20px;
  font-weight:600;
}
.globo-midias{
font-weight:500;
font-size:30px;
margin-top:15px;
margin-left:-200px;
}
img{
  
width:35%;
height:45%;
margin-left:50px;
}
}
/* GESTÃO MÍDIA PAGINA 2 */



/* GESTÃO MÍDIA PÁGINA 3 */



/* Estilos CSS modificados para o carrossel e seção de landing pages */

/* Estilo para a seção de landing pages */
.landing-pages {
    display: flex;
    align-items: center;
    margin-top: 15px;
    margin-left: -200px; /* Ajuste conforme necessário para alinhar à direita do parágrafo */
}

.landing-pages p {
    font-weight: 500;
    font-size: 30px; /* Ajuste o tamanho da fonte conforme necessário */
    margin-right: 20px; /* Espaçamento entre o parágrafo e o carrossel */
}

/* Estilo para o carrossel pequeno */
.carousel-small {
    position: relative;
    width: 550px; /* Ajuste conforme necessário */
    height: 350px; /* Ajuste conforme necessário */
    overflow: hidden;
    margin-top: 20px;
}

.carousel-small .carousel-inner {
    display: flex;
    transition: transform 0.5s ease;
    width: 100%; /* Garante que a largura do conteúdo seja 100% */
}

.carousel-small .carousel-item {
    width: 300px; /* Ajuste conforme necessário */
    flex: 0 0 auto;
}

.carousel-small .carousel-item img {
    width: 100%;
    height: 100%; /* Garante que a imagem ocupe a altura completa do item */
    object-fit: cover; /* Redimensiona a imagem para cobrir todo o espaço do item */
    display: block;
}

.carousel-small .prev, .carousel-small .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 5px;
    cursor: pointer;
    z-index: 1;
    border-radius: 50%;
}

.carousel-small .prev {
    left: 10px;
}

.carousel-small .next {
    right: 10px;
}

/* SOBRE */
.sobre-section {
    padding: 20px; /* Espaçamento interno para melhor visualização */
}

.sobre-content {
    display: flex; /* Utilizando flexbox para alinhar itens lado a lado */
    align-items: center; /* Alinhar verticalmente os itens */
}

.sobre-text {
    flex: 1; /* Ocupa todo o espaço disponível no flex container */
    font-size:30px;
    margin-left:60px;
    margin-top:130px;
}

.sobre-image {
    margin-left: 30px; /* Espaçamento entre o texto e a imagem */
}

.sobre-image img {
    display: block; /* Garante que a imagem seja exibida como bloco */
    max-width: 100%; /* Garante que a imagem não ultrapasse o seu contêiner */
    height: auto; /* Mantém a proporção da imagem */
}

.sobre-text p {
    margin-bottom: 40px; /* Espaçamento entre parágrafos de texto */
}



</style>
<body>
    <!-- Gradiente -->
    <div class="gradient-container">
    <header>
      <!-- NavBar -->
      <nav class="navbar mr-auto">
        <!-- Logo Index -->
        <a href="index.html"
          ><img
            src="/logo_branca.png"
            width="150"
            height="130"
            alt="Logo"
        /></a>
        <!-- Inicio navbar -->
        <a href="#inicio">Início</a>
        <a href="#nichos">Nichos</a>
        <a href="#serviços">Serviços</a>
        <a href="#sobre">Sobre</a>
        <a href="contato">Contato</a>
      <!-- Login Button -->
      <a href="/login">
        <button type="submit" class="btn btn-outline-light botaologin">
          Login
        </button>
      </a>
      </nav>
    </header>
    <!-- Conteúdo -->
     <main>
     <section class="inicio">
        <div class="row">
          <div class="col-12"> 
            <!-- Titulo -->
            <h1>
              Transforme sua
              visão<br> em realidade
              digital
            </h1>
          </div>
        </div>
        <div class="inicioh3">
          <h3>
            Criamos sites que não só impressionam,<br> mas também geram resultados para o<br>  seu negócio!
          </h3>
        </div>
        <div class="orcamento">
          <a target="_blank" href="https://wa.me/559298113525">
            <button class="botao">  
            <img src="/whatsapp-white-icon.svg" width="40px" height="40px" alt="Ícone do botão"/>FAZER ORÇAMENTO
            </button>
          </a>
        </div>
      </section>
      <div class="linha-rosa linha2"></div>


      <div class="linha-rosa linha2"></div>
<!-- seção carrossel -->
<section>
<div class="carousel-wrapper">
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Home_2.png" alt="Imagem 1">
                </div>
                <div class="carousel-item">
                    <img src="Home_1_1.png" alt="Imagem 2">
                </div>
                <div class="carousel-item">
                    <img src="1img (1).png" alt="Imagem 3">
                </div>
            </div>
            <button class="prev" onclick="moveCarousel(-1)">&#10094;</button>
            <button class="next" onclick="moveCarousel(1)">&#10095;</button>
        </div>
    </div>
</section>
<!-- Criação de Website -->
<section class="website">
  <div class="text-center ">
<h3>Criação de web site</h3>
</div>
<div class="text-center p-website">
<p>Na TucandeiraWeb, trabalhamos de forma completa na criação de<br> websites, oferecendo soluções personalizadas que atendem às<br> necessidades específicas de cada cliente. Nossa equipe de especialistas<br> se dedica a desenvolver sites modernos, responsivos e otimizados,<br> garantindo uma experiência de usuário excepcional e uma presença<br> online impactante. Desde o design até a implementação e manutenção,<br> cuidamos de cada detalhe para que seu site se destaque e alcance seus<br> objetivos.</p>
<div class="text-center">
<div class="container">
<img src="Home_2.png" alt="Imagem 1">
<div class="globo">
<img src="globo.png" alt="Imagem 3">
</div>
<img src="Home_1_1.png" alt="Imagem 3">
</div>
</section>
<section class="">
<!-- Gestão de mídias sociais -->
<div class="text-center gestao-midias">
<h3>Gestão de mídias sociais</h3>
</div>
<div class="p-midias gestao-midias">
<div class="container p-midias">
<p>A gestão de mídias sociais é crucial para construir e manter a<br> presença online de uma marca. Envolve a criação, publicação e<br> análise de conteúdos nas plataformas sociais, com o objetivo de<br> engajar o público e fortalecer a identidade da marca. Uma<br> estratégia bem executada aumenta o alcance, a interação e a<br> fidelidade dos seguidores.</p>
<img src="brayan.png" alt="Imagem 3">

</div>
<div class="globo-midias pglobo-midias">
<div class="container pglobo-midias ">
<img src="GLOBOMIDIAS.png" alt="Imagem 3">
<p> A gestão eficaz de mídias sociais permite segmentar públicos, personalizar mensagens e adaptar conteúdos para diferentes plataformas, maximizando o impacto das campanhas. Além disso, o monitoramento contínuo do desempenho permite ajustes estratégicos, garantindo que a comunicação seja sempre relevante e alinhada com as expectativas do público.
Investir na gestão de mídias sociais fortalece a conexão com o público, aumenta a visibilidade da marca e torna as estratégias de marketing digital mais eficientes e impactantes.
</p>
</div>
</section>
<!-- SEÇÃO MÍDIAS PÁGINA 2 -->
<section>

<!-- ////CONTEÚDO -->

</section>
<!-- SEÇÃO MÍDIAS PÁGINA 3 -->
<section>
<!-- ////CONTEÚDO -->

</section>
<!-- CRIAÇÃO DE LANDING PAGES -->
 <section>
<div class="text-center gestao-midias">
    <h3>Criação de Landing Pages</h3>
    <div class="container">
        <div class="landing-pages">
            <p>
                Uma landing page, ou página de destino, é essencial para converter<br> visitantes em leads ou clientes. Diferente das páginas comuns de um<br> site, ela é projetada com um único objetivo: a conversão. Ao focar na<br> proposta de valor e eliminar distrações, as landing pages aumentam<br> significativamente as taxas de conversão.
            </p>
            <div class="flex items-center">
              
                <div class="mr-4">
                    <!-- Novo carrossel pequeno -->
                    <div class="carousel-small">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="1img (1).PNG" alt="Imagem 1">
                            </div>
                            <div class="carousel-item">
                                <img src="1img (2).PNG" alt="Imagem 2">
                            </div>
                            <div class="carousel-item">
                                <img src="1img (3).PNG" alt="Imagem 3">
                            </div>
                        </div>
                        <button class="prev" onclick="moveCarouselSmall(-1)">&#10094;</button>
                        <button class="next" onclick="moveCarouselSmall(1)">&#10095;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SOBRE -->
<section class="sobre-section">
    <div class="sobre-content">
        <div class="sobre-text">
            <p>Descubra a essência da Tucandeira Webtech, onde a criatividade se une à estratégia para impulsionar o sucesso do seu negócio no mundo digital.</p>
            <p>Oferecemos serviços que vão desde a criação de sites intuitivos e impactantes até a gestão de mídias sociais e anúncios, visando converter visitantes em clientes. Transformamos desafios em oportunidades, tornando marcas protagonistas no cenário digital. Seja bem-vindo ao seu novo parceiro estratégico em marketing digital, onde a "Webtech" é a nossa base para oferecer soluções abrangentes em design, programação, automação, gerenciamento de conteúdo e hospedagem.</p>
        </div>
        <div class="sobre-image">
            <a href="index.html">
                <img src="/logo_branca.png" width="500" height="350" alt="Logo">
            </a>
        </div>
    </div>
</section>
<!-- SEÇÃO DE PERGUNTAS -->
 







</main>
      

</body>

</html>
<script>
          let currentIndex = 0;

function moveCarousel(direction) {
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    currentIndex += direction;
    if (currentIndex < 0) {
        currentIndex = totalItems - 1;
    } else if (currentIndex >= totalItems) {
        currentIndex = 0;
    }

    const offset = -currentIndex * 100;
    document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
}
   // Script para o novo carrossel pequeno
   let currentIndexSmall = 0;

function moveCarouselSmall(direction) {
    const itemsSmall = document.querySelectorAll('.carousel-small .carousel-item');
    const totalItemsSmall = itemsSmall.length;

    currentIndexSmall += direction;
    if (currentIndexSmall < 0) {
        currentIndexSmall = totalItemsSmall - 1;
    } else if (currentIndexSmall >= totalItemsSmall) {
        currentIndexSmall = 0;
    }

    const offsetSmall = -currentIndexSmall * 100;
    document.querySelector('.carousel-small .carousel-inner').style.transform = `translateX(${offsetSmall}%)`;
}
</script>



</main>
      





