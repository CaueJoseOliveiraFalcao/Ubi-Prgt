<x-header/>
  <!-- conteúdo -->
  <body>
    <main>
    <form method="POST" action="{{ route('register') }}">
         @csrf
      <div class="register-container">
        <h2>Criar uma nova conta</h2>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <label for="name">Nome:</label>
          <input
            type="text"
            id="name"
            name="name"
            class="input-no-border nome"
            required
            placeholder="Digite seu nome"
          />
          <label for="telefone">Telefone:</label>
          <input
            type="text"
            id="telefone"
            name="telefone"
            class="input-no-border email"
            required
            placeholder="Digite seu telefone"
          />

          <label for="email">Email:</label>
          <input
            type="email"
            id="email"
            name="email"
            class="input-no-border email"
            required
            placeholder="Digite seu email"
          />

          <label for="password">Senha:</label>
          <input
            type="password"
            id="password"
            name="password"
            class="input-no-border senha"
            required
            placeholder="Digite sua senha"
          />

          <input type="submit" class="botao">

        <div class="links">
          <a href="/login" class="login-link"
            >Já tem uma conta? Faça login</a
          >
        </div>
      </div>
</form>
    </main>
  </body>
</html>
<style>
          .bg-gradiente {
        background-image: linear-gradient(
          to bottom,
          black 0%,
          #280162 50%,
          #04000a 100%
        );
      }

      body {
        color: white;
        background-image: linear-gradient(
          to bottom,
          black 0%,
          #280162 50%,
          #04000a 100%
        );
        margin: 0;
        font-family: Arial, sans-serif;
      }
    img {
  margin-top: 40px;
  margin-left: 60px;
}
/* Estilo para o contêiner de cadastro */
.register-container {
  max-width: 400px;
  margin: 50px auto;
  padding: 20px;
  border-radius: 20px;
  box-shadow: 0 0 10px darkviolet;
  text-align: center;
  color: white;
}

/* Estilo para o título */
.register-container h2 {
  margin-bottom: 20px;
}

/* Estilo para os campos de entrada sem bordas */
.input-no-border {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-bottom: 2px solid darkviolet;
  border-radius: 20px;
  outline: none;
  font-size: 16px;
  box-sizing: border-box;
  transition: border-color 0.3s ease;
}

.input-no-border:focus {
  border-bottom-color: darkviolet;
}

/* Estilo para os rótulos */
.register-container label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
  text-align: left;
}

/* Estilo para o botão */
.btn-primary {
  width: 100%;
  padding: 10px;
  background-color: black;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.btn-primary:hover {
  background-color: darkviolet;
}

/* Estilo para os links */
.links {
  text-align: center;
  margin-top: 20px;
}

.links a {
  display: block;
  color: white;
  text-decoration: none;
  margin-bottom: 10px;
  transition: color 0.3s ease;
}

.links a:hover {
  color: darkviolet;
  text-decoration: underline;
}

.email {
  background-color: darkviolet;
}

.nome {
  background-color: darkviolet;
}

.senha {
  background-color: darkviolet;
}

.confirme {
  background-color: darkviolet;
}

.botao {
  width: 300px; /* Largura do campo de entrada */
  height: 50px; /* Altura do campo de entrada */
  padding: 10px; /* Espaçamento interno */
  border: 2px solid; /* Borda */
  border-radius: 25px; /* Tornando o campo redondo */
  outline: none; /* Removendo o outline padrão */
  font-size: 17px; /* Tamanho da fonte */
  transition: border-color 0.3s, box-shadow 0.3s; /* Transição para foco */
  background-color: black;
  color: white;
  font-weight: 600;
  margin-left: -10px;
  margin-top: 20px;
}

.botao:hover {
  text-decoration: none;
  color: white;
  font-weight: 600;
  background-color: darkviolet;
}

* {
  color: #fff;
}

.linha-rosa {
  background-color: #9b1f53;
  margin: 0;
  height: 3px;
}

.register-container input::placeholder {
  color: #fff; /* Cor branca para o placeholder */
}
</style>