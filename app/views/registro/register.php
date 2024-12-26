<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Dashbord/public/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="register_sect">
        <div class="container_register">
                            <h2>Registro</h2>
                        <form id="register-form" name="register" action="/Dashbord/public/register/store" method="POST">
                        <div class="input_group_register">    

                            <label for="user_Register">Usuário:</label>
                            <input type="text" name="user" id="user_Register">

                            <label for="email_register">Seu email:</label>
                            <input type="text" name="email_register" id="email_register" pattern=".*">

                            <label for="register_pass">Senha:</label>
                            <button type="button" class="mostrar_senha_register" id="revel_senha" onclick="togglePassword()">👁️</button>
                            <input type="password" name="register_password" id="register_pass">

                            <label for="confirm_pass">Confirmar senha:</label>
                            <input type="password" name="confirm_password" id="confirm_pass">



                            <input id="submit_register" type="submit" value="Registrar">
                            </div>
                        </form>
                        </div> 
                        <script src="/Dashbord/public/assets/js/functions.js"></script>
            
            </section>
   </body>            
</html>