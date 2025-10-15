import Chart from "chart.js/auto";

export function initChartGabungan(): void {
    const canvas = document.getElementById("chartGabungan") as HTMLCanvasElement | null;
    if (!canvas) return;

    // Pastikan parent-nya punya tinggi tetap
    if (canvas.parentElement) {
        canvas.parentElement.style.height = "420px"; // atur tinggi chart di sini
    }

    const arrowPlugin = {
        id: 'arrowPlugin',
        afterDraw(chart: any) {
            const ctx = chart.ctx;
            const datasets = chart.data.datasets;

            datasets.forEach((dataset: any, datasetIndex: number) => {
                const meta = chart.getDatasetMeta(datasetIndex);
                if (meta.hidden) return;

                const lastElement = meta.data[meta.data.length - 1];
                if (!lastElement) return;

                const x = lastElement.x;
                const y = lastElement.y;

                ctx.save();
                ctx.translate(x, y);

                const secondLastElement = meta.data[meta.data.length - 2];
                if (secondLastElement) {
                    const angle = Math.atan2(y - secondLastElement.y, x - secondLastElement.x);
                    ctx.rotate(angle);
                }

                ctx.fillStyle = dataset.borderColor;
                ctx.beginPath();
                ctx.moveTo(0, 0);
                ctx.lineTo(-15, -8);
                ctx.lineTo(-15, 8);
                ctx.closePath();
                ctx.fill();

                ctx.restore();
            });
        }
    };

    new Chart(canvas, {
        type: "line",
        plugins: [arrowPlugin],
        data: {
            labels: ["2021", "2022", "2023", "2024", "2025"],
            datasets: [
                {
                    label: "Pendaftar",
                    data: [200, 350, 400, 500, 620],
                    borderColor: "#f97316",
                    backgroundColor: "rgba(249, 115, 22, 0.05)",
                    borderWidth: 4,
                    pointRadius: 0,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: "#f97316",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 2,
                    fill: true,
                    tension: 0,
                },
                {
                    label: "Peserta Diterima",
                    data: [150, 300, 320, 450, 560],
                    borderColor: "#3b82f6",
                    backgroundColor: "rgba(59, 130, 246, 0.05)",
                    borderWidth: 4,
                    pointRadius: 0,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: "#3b82f6",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 2,
                    fill: true,
                    tension: 0,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // biar tinggi dari parent (320px) dipakai
            interaction: {
                intersect: false,
                mode: 'index',
            },
            plugins: {
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        font: { size: 16, weight: 'bold' },
                        usePointStyle: true,
                        padding: 20,
                    },
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.9)',
                    titleFont: { size: 14, weight: 'bold' },
                    bodyFont: { size: 13, weight: 'bold' },
                    padding: 12,
                    cornerRadius: 8,
                    displayColors: true,
                    callbacks: {
                        label: (context) => `${context.dataset.label}: ${context.parsed.y.toLocaleString('id-ID')}`,
                    },
                },
            },
            scales: {
                x: {
                    grid: { display: false, drawBorder: false },
                    ticks: {
                        font: { size: 14, weight: 'bold' },
                        color: '#374151',
                    },
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.08)',
                        drawBorder: false,
                    },
                    ticks: {
                        font: { size: 13, weight: 'bold' },
                        color: '#374151',
                        callback: (value) => value.toLocaleString('id-ID'),
                    },
                },
            },
            elements: {
                line: {
                    tension: 0,
                    borderCapStyle: 'round' as const,
                },
            },
        },
    });
}
