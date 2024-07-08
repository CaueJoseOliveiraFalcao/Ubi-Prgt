<div class="gradient-container">
    <!-- Cabeçalho da Página -->

    <header>
      <!-- NavBar -->
       <nav class="navbar">
      <!-- Logo Index -->
      <a  href="/"><img src="/logo_branca.png" class=imgnav width="120" height="100" alt="Logo"/></a>

      <!-- Inicio navbar -->
      <a href="#inicio">Início</a>
      <a href="#nichos">Nichos</a>
      <a href="#servicos">Serviços</a>
      <a href="#sobre">Sobre</a>
      <a href="#contato">Contato</a>
      <!-- Login Button -->
     <a href="/login"> <button  type="submit" class="btn btn-outline-light botaologin">Login</button> </a>
    </nav>
    <div class="linha-rosa"></div>
  </header>
  <style>
    
header {
  background-color: #000000;
  /*display: flex;  Propriedade p/ deixar ao lado na barra de nav 
    justify-content: space-between;  justifica a direita, adiciona espaço, precisa ter o 'display: flex', alinhamento horizantal
    align-items: center; alinhamento vertical ao centro */
  /* Espaçamento interno*/
  padding-top: 24=px;
  padding-bottom: 24px;
  padding-left: 80px;
  padding-right: 80px;
}

/* Estilização específica da tag <a> dentro de header. Barra de navegação*/
header a {
  font-weight: 600;
  padding: 0 80px; /*espaçamento entre eles tava 0 10px*/
  font-size: 18px;
}

/* Estilização específica do ponteiro do mouse na tag <header nav a: > dentro de header. 'hover' propriedade do mouse*/
header nav a:hover {
  text-transform: uppercase;
  color: #9b1f53;
}

.botaologin {
  background-color: #9b1f53;
  border-color: #9b1f53;
  border-radius: 20px;
}

.botaologin:hover{
    color:black;
    background-color: white;
}


nav{
    display:flex;
}

.imgnav{
  margin-left:-40px;
}
  </style>

  