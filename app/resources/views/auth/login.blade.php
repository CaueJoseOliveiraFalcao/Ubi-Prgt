
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="Conta">
            <h2>Login</h2>
            <h4>Ainda não tem uma conta? Crie <a class="aqui" href="/register">aqui.</a></h4>
            <div class=" text-center ">
<p>EMAIL</p>
    </div>
            <div class="login-container">
                <input type="email" name="email" class="email-input" placeholder="Digite seu email">
            </div>
            <div class=" text-center ">
            <p>SENHA</p>
            <div class="login-container">
                <input type="password" id="password" name="password" class="password-input" placeholder="Digite sua senha">
            </div>
            <button class="botao2" type="submit">Logar</button>
            <div class="links">
            <a href="esqueci.html" class="forgot-password">Esqueceu sua senha?</a>
            <a href="Cadastro.html" class="register">Cadastro</a>
        </div>

    </form>
</body>
    </form>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding : 0;
            min-height: 100vh;
            background-image: linear-gradient(to bottom, #000000, #280162, #04000a);
            color: white;
            padding: 20px;
            text-align: center;
        }
        form{
            margin-top: 15rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h2 {
           font-size:30px;
     
           .conta{
            margin-top:40px;
           }






        }
h4{
    font-size:25px;
    margin-top:20px;
}

.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;

}



.email-input {
    width: 300px; /* Largura do campo de entrada */
    height: 50px; /* Altura do campo de entrada */
  padding: 10px; /* Espaçamento interno */
  border: 2px solid; /* Borda */
  border-radius: 30px; /* Tornando o campo redondo */
  outline: none; /* Removendo o outline padrão */
  font-size: 12px; /* Tamanho da fonte */
  transition: border-color 0.3s, box-shadow 0.3s; /* Transição para foco */
  background-color: darkviolet;

}

.email-input:focus {
  border-color: #81039b; /* Cor da borda ao focar */
  box-shadow: 0 0 0px; /* Sombra ao focar */
}
.password-input {
  width: 300px;
  height: 50px;
  padding: 10px;
  border: 2px solid;
  border-radius: 30px; /* Bordas arredondadas  */
  outline: none;
  font-size: 14px;
  transition: border-color 0.3s, box-shadow 0.3s;
  background-color: darkviolet;
}

.password-input:focus {
  border-color: #81039b;
  box-shadow: 0 0 5px #81039b;
}

.toggle-password {
  height: 40px;
  padding: 0 10px;
  border: 2px solid;
  border-radius: 0 20px 20px 0; /* Bordas arredondadas à direita */
  border-left: none;
  background-color: #81039b;
  color: white;
  cursor: pointer;
  font-size: 14px;
  transition: background-color 0.3s;
}

.toggle-password:hover {
  background-color: #81039b;
}

.aqui {
  color: white;
  text-decoration: underline;
  transition: color 0.3s, text-decoration 0.3s; /* Transição suave */
}

.aqui:hover {
  text-decoration: underline;
  color: #81039b;
  font-weight: 800;
}

.botao2 {
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
  margin-left: -40px;
  margin-top: 20px;
}

.botao2:hover {
  text-decoration: none;
  color: white;
  font-weight: 600;
  background-color: darkviolet;
}

.links {
  text-align: center;
  margin-top: 20px;
  margin-right: 38px;
}

.links a {
  display: block;
  color: white;
  text-decoration: none;
  margin-bottom: 10px;
  transition: color 0.3s ease;
}

.links a:hover {
  color: #81039b;
  text-decoration: underline;
}
        
        