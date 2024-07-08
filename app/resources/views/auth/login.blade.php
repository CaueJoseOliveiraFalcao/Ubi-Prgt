<x-logo/>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="fix">
            <h2>Login</h2>
            <h4>Ainda não tem uma conta? Crie <a href="Cadastro.html">aqui.</a></h4>
            <div class="login-container">
                <input type="email" name="email" class="email-input" placeholder="Digite seu email">
            </div>
            <div class="login-container">
                <input type="password" id="password" name="password" class="password-input" placeholder="Digite sua senha">
            </div>
            <button class="botao2" type="submit">Logar</button>
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
            margin-top: 20rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .email-input,
        .password-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .botao2 {
            background-color: #280162;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .forgot-password,
        .register {
            color: #888;
            text-decoration: none;
            margin-top: 10px;
            display: block;
        }
        