<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Dashbord/public/assets/css/style.css">
    <title>Dashboard Finacers</title>
</head>
<body>
    <section id="login_sect">
        <div class="container_login">
            <h2>Login</h2>
            <form id="login_form" name="login" method="POST" action="/Dashbord/public/login/login">
                <div class="input_group">
                    <label for="user_Login">Usuário</label>
                    <div class="underline"></div>
                    <input type="text" name="username" id="user_Login" required>

                    <label for="login_pass">Senha</label>
                    <input type="password" name="password" id="login_pass" required>

                    <a href="#">Esqueceu sua senha?</a>
                    <button type="button" class="mostrar_senha" id="revel_senha" onclick="togglePassword()">👁️</button>

                    <input type="radio" name="Manter Conectado" id="remeber_login"><p>Manter Conectado?</p>

                    <input id="submit_login" type="submit" value="Entrar">
                </div>
            </form>
        </div>
        <div class="create_account">
            <h2>Ainda não é cliente?</h2>
         
             <button type="button" onclick="window.location.href='/Dashbord/public/register'">Crie sua conta!</button>




        </div>
    </section>
    <script src="/Dashbord/public/assets/js/functions.js"></script>
</body>
</html>