import Chart from "chart.js/auto";

export function initChartGabungan(): void {
    const canvas = document.getElementById(
        "chartGabungan"
    ) as HTMLCanvasElement | null;
    if (!canvas) return;

    const chart = new Chart(canvas, {
        type: "line",
        data: {
            labels: ["2021", "2022", "2023", "2024", "2025"],
            datasets: [
                {
                    label: "Pendaftar",
                    data: [200, 350, 400, 500, 620],
                    borderColor: "#f97316",
                    backgroundColor: "#f97316",
                    fill: false,
                    tension: 0.4,
                },
                {
                    label: "Peserta Diterima",
                    data: [150, 300, 320, 450, 560],
                    borderColor: "#3b82f6",
                    backgroundColor: "#3b82f6",
                    fill: false,
                    tension: 0.4,
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        font: {
                            size: 20,
                        },
                    },
                },
            },
            scales: {
                x: {
                    ticks: {
                        font: {
                            size: 18,
                        },
                    },
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        font: {
                            size: 18,
                        },
                    },
                },
            },
        },
    });
}
