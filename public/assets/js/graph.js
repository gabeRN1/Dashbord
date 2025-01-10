


//API EXCHANGE RATE LOGICA///

const apiUrl = `https://v6.exchangerate-api.com/v6/7f70e76d00431e58b717eccc/latest/`;

const currencySelector = document.getElementById("currencySelector");

// Elementos canvas e configurações das moedas
const chartsConfig = [
    {
        canvas: document.getElementById("chartEuro").getContext("2d"),
        currency: "EUR",
        backgroundColor: "rgba(54, 162, 235, 0.2)",
        borderColor: "rgba(54, 162, 235, 1)"
    },
    {
        canvas: document.getElementById("chartUSD").getContext("2d"),
        currency: "USD",
        backgroundColor: "rgba(255, 99, 132, 0.2)",
        borderColor: "rgba(255, 99, 132, 1)"
    },
    {
        canvas: document.getElementById("chartJPY").getContext("2d"),
        currency: "JPY",
        backgroundColor: "rgba(75, 192, 192, 0.2)",
        borderColor: "rgba(75, 192, 192, 1)"
    },
    {
        canvas: document.getElementById("chartGBP").getContext("2d"),
        currency: "GBP",
        backgroundColor: "rgba(153, 102, 255, 0.2)",
        borderColor: "rgba(153, 102, 255, 1)"
    }
];

let charts = {}; // Objeto para armazenar instâncias dos gráficos

async function updateCharts(baseCurrency) {
    try {
        // Obter dados da API
        const response = await fetch(apiUrl + baseCurrency);
        const data = await response.json();

        // Iterar sobre as configurações e atualizar os gráficos
        chartsConfig.forEach(({ canvas, currency, backgroundColor, borderColor }) => {
            const value = 1 / data.conversion_rates[currency]; // Valor da moeda
            
            // Destruir gráfico existente
            if (charts[currency]) charts[currency].destroy();

            // Criar novo gráfico
            charts[currency] = new Chart(canvas, {
                type: "bar",
                data: {
                    labels: [`${currency}`],
                    datasets: [{
                        label: `Valor em ${baseCurrency}`,
                        data: [value],
                        backgroundColor: backgroundColor,
                        borderColor: borderColor,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
        });
    } catch (error) {
        console.error("Erro ao buscar dados da API:", error);
    }
}

// Evento para mudar a moeda base
currencySelector.addEventListener("change", () => {
    const selectedCurrency = currencySelector.value;
    updateCharts(selectedCurrency);
});

// Inicializar com a moeda padrão (BRL)
updateCharts(currencySelector.value);

// Evento para mudar a moeda base
currencySelector.addEventListener("change", () => {
    const selectedCurrency = currencySelector.value;
    updateCharts(selectedCurrency);
});

// Inicializar com a moeda padrão (BRL)
updateCharts(currencySelector.value);

///navbar

const menuToggle = document.getElementById('menuToggle');
const toggleMenuNavbar = document.getElementById('togglemenu_navbar');
const navbar = document.getElementById('navbar');
const pageContent = document.querySelector('.sect_graficos');

function toggleNavbar() {
    navbar.classList.toggle('expanded');
    pageContent.classList.toggle('blurred');
}

// Adiciona os eventos de clique para os dois botões
menuToggle.addEventListener('click', toggleNavbar);
toggleMenuNavbar.addEventListener('click', toggleNavbar);