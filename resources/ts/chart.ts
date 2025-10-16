import Chart from "chart.js/auto";

// Plugin custom untuk panah di ujung garis
const arrowPlugin = {
    id: "arrowPlugin",
    afterDraw(chart: any) {
        const ctx = chart.ctx;
        chart.data.datasets.forEach((dataset: any, i: number) => {
            const meta = chart.getDatasetMeta(i);
            if (!meta.hidden) {
                const points = meta.data;
                if (points.length < 2) return;

                const last = points[points.length - 1];
                const prev = points[points.length - 2];

                const { x: x1, y: y1 } = prev.tooltipPosition();
                const { x: x2, y: y2 } = last.tooltipPosition();

                const angle = Math.atan2(y2 - y1, x2 - x1);
                const arrowLength = 12;

                ctx.fillStyle = dataset.borderColor;
                ctx.beginPath();
                ctx.moveTo(x2, y2);
                ctx.lineTo(
                    x2 - arrowLength * Math.cos(angle - Math.PI / 6),
                    y2 - arrowLength * Math.sin(angle - Math.PI / 6)
                );
                ctx.lineTo(
                    x2 - arrowLength * Math.cos(angle + Math.PI / 6),
                    y2 - arrowLength * Math.sin(angle + Math.PI / 6)
                );
                ctx.closePath();
                ctx.fill();
            }
        });
    },
};

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
                    backgroundColor: "rgba(249, 115, 22, 0.1)",
                    borderWidth: 3,
                    fill: true,
                    tension: 0,
                    pointRadius: 0, // 🔥 bulatan disembunyikan
                    pointHitRadius: 10, // 👉 area hover tetap aktif
                    pointHoverRadius: 5, // muncul bulatan kecil saat hover
                    pointHoverBackgroundColor: "#f97316",
                },
                {
                    label: "Peserta Diterima",
                    data: chartData.diterima,
                    borderColor: "#3b82f6",
                    backgroundColor: "rgba(59, 130, 246, 0.1)",
                    borderWidth: 3,
                    fill: true,
                    tension: 0,
                    pointRadius: 0,
                    pointHitRadius: 10,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#3b82f6",
                },
            ],
        },
       options: {
    responsive: true,
    maintainAspectRatio: false,
    interaction: {
        mode: "nearest",
        intersect: false,
    },
    scales: {
        y: {
            beginAtZero: false, // jangan mulai dari nol
            min: 250,           // mulai dari 400
            ticks: {
                stepSize: 50,  // naik setiap 100
            },
            grid: {
                color: "rgba(0,0,0,0.05)",
            },
            title: {
                display: true,
                text: "Jumlah Siswa",
                color: "#374151",
                font: { weight: "bold" },
            },
        },
        x: {
            grid: {
                color: "rgba(0,0,0,0.05)",
            },
        },
    },
    plugins: {
        tooltip: {
            enabled: true,
            backgroundColor: "#111827",
            titleColor: "#fff",
            bodyColor: "#f3f4f6",
            padding: 10,
            displayColors: false,
        },
        legend: {
            labels: {
                usePointStyle: true,
            },
        },
    },
},

        plugins: [arrowPlugin],
    });
}
