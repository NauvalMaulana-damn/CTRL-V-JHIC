import Chart from "chart.js/auto";

export async function initChartGabungan(): Promise<void> {
    const canvas = document.getElementById("chartGabungan") as HTMLCanvasElement | null;
    if (!canvas) return;

    const response = await fetch("/api/chart-data");
    const chartData = await response.json();

    new Chart(canvas, {
        type: "line",
        data: {
            labels: chartData.labels,
            datasets: [
                {
                    label: "Pendaftar",
                    data: chartData.pendaftar,
                    borderColor: "#f97316",
                    backgroundColor: "rgba(249, 115, 22, 0.05)",
                    borderWidth: 4,
                    fill: true,
                    tension: 0,
                },
                {
                    label: "Peserta Diterima",
                    data: chartData.diterima,
                    borderColor: "#3b82f6",
                    backgroundColor: "rgba(59, 130, 246, 0.05)",
                    borderWidth: 4,
                    fill: true,
                    tension: 0,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        },
    });
}
