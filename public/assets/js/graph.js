


//API EXCHANGE RATE LOGICA///

const apiUrl = `https://v6.exchangerate-api.com/v6/7f70e76d00431e58b717eccc/latest/`;

const currencySelector = document.getElementById("currencySelector");
const euroChartCanvas = document.getElementById("chartEuro").getContext("2d");
const usdChartCanvas = document.getElementById("chartUSD").getContext("2d");
const timeRangeSelector = document.getElementById("timeRange");

let euroChart;
let usdChart;

async function updateCharts(baseCurrency) {
    try {
        // Obter dados da API
        const response = await fetch(apiUrl + baseCurrency);
        const data = await response.json();

        // Valores das moedas em relação à moeda base
        const euroValue = 1 / data.conversion_rates["EUR"]; // Valor do Euro
        const usdValue = 1 / data.conversion_rates["USD"]; // Valor do Dólar

        // Atualizar gráfico do Euro
        if (euroChart) euroChart.destroy();
        euroChart = new Chart(euroChartCanvas, {
            type: "bar",
            data: {
                labels: ["Euro (EUR)"],
                datasets: [{
                    label: `Valor em ${baseCurrency}`,
                    data: [euroValue],
                    backgroundColor: "rgba(54, 162, 235, 0.2)",
                    borderColor: "rgba(54, 162, 235, 1)",
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

        // Atualizar gráfico do Dólar
        if (usdChart) usdChart.destroy();
        usdChart = new Chart(usdChartCanvas, {
            type: "bar",
            data: {
                labels: ["Dólar (USD)"],
                datasets: [{
                    label: `Valor em ${baseCurrency}`,
                    data: [usdValue],
                    backgroundColor: "rgba(255, 99, 132, 0.2)",
                    borderColor: "rgba(255, 99, 132, 1)",
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