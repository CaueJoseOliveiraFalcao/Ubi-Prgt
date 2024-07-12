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
              Transforme sua<br>
              visão em realidade<br>
              digital
            </h1>
          </div>
        </div>
        <div class="inicioh3">
          <h3>
            Criamos sites que não só<br> impressionam, mas também<br> geram resultados para o seu<br> negócio!
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






</main>
      





