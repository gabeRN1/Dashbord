<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/Dashbord\public\assets\css\canvas.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
     <!--navbar-->
    <div class="button_container">
    <button id="menuToggle" class="menu_button">☰</button>
    </div>
   
        <nav class="navbar" id="navbar">
        <button id="togglemenu_navbar" class="menu_button">☰</button>

        <div class="perfil_container">
            <img src="../../../Dashbord/public/assets/images/user-icon.png" alt="Ícone do User" class="user_icon">
            <button class="profile_button">Seu Perfil</button>
            <button onclick="window.location.href='/Dashbord/public/logout'" class="logout_button">Sair</button>

        </div>
            <ul class="ul_style" id="navlinks">
                <li class="li_hover"><a href="graphics">Home</a></li>
                <li class="li_hover"><a href="calculadora">Calculadora</a></li>
                <li class="li_hover"><a href="economias">Econômias</a></li>
                <li class="li_hover"><a href="seudashbord">Seu Gráfico</a></li>
            </ul>
        </nav>
    <!--navbar--end-->
    <section class="sect_graficos">
        <h1>Seja bem vindo!🚀</h1>
        <h2>Qual são os planos de hoje?</h2>
        <h3>Selecione a Moeda principal:</h3>
        <select id="currencySelector">
            <option value="BRL">Real Brasileiro (BRL)</option>
            <option value="USD">Dólar Americano (USD)</option>
            <option value="EUR">Euro (EUR)</option>
            <option value="GBP">Libra Esterlina (GBP)</option>
            <option value="JPY">Iene Japonês (JPY)</option>
            <option value="AUD">Dólar Australiano (AUD)</option>
        </select>
            <div class="container_grafico">
                <div class="grafico">
                    <canvas id="chartEuro" width="400" height="200"></canvas>
                </div>

                <div class="grafico">
                    <canvas id="chartUSD"width="400" height="200"></canvas>
                </div>

                <div class="grafico">
                    <canvas id="chartJPY"width="400" height="200"></canvas>
                </div>

                <div class="grafico">
                    <canvas id="chartGBP"width="400" height="200"></canvas>
                </div>

            </div>
    </section>
    <script src="/Dashbord/public\assets\js\graph.js"></script>
</body>
</html>