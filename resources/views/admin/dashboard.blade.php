<x-admin-layout>
    <div class="space-y-6">
        <div class="inline-flex items-center justify-between bg-white rounded-xl shadow p-6 text-gray-800 w-full">
            <h2 class="text-2xl font-bold mb-2">
                Total Pengunjung: <span id="totalVisitors" class="text-blue-600 font-semibold">0</span>
            </h2>
            <h2>
                Pengunjung Aktif: <span id="activeVisitors" class="text-blue-600 font-semibold">0</span>
            </h2>
            <h2>
                Pengunjung hari ini: <span id="todayVisitors" class="text-green-600 font-semibold">0</span>
            </h2>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <canvas id="visitorsChart"></canvas>
            <p id="loadingText" class="text-center text-gray-500 mt-4">Memuat data pengunjung...</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let chart;

        async function fetchVisitorData() {
            try {
                const res = await fetch('/admin/api/visitors');
                const data = await res.json();

                // Update angka-angka di dashboard
                document.getElementById('totalVisitors').innerText = data.totalVisitors;
                document.getElementById('activeVisitors').innerText = data.activeVisitors;
                document.getElementById('todayVisitors').innerText = data.todayVisitors;

                // Sembunyikan teks loading kalau sudah ada data
                document.getElementById('loadingText').style.display = 'none';

                const labels = data.weeklyVisitors.map(v => v.date);
                const totals = data.weeklyVisitors.map(v => v.total);

                if (!chart) {
                    const ctx = document.getElementById('visitorsChart');
                    chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Jumlah Pengunjung',
                                data: totals,
                                borderColor: 'rgb(37, 99, 235)',
                                backgroundColor: 'rgba(37, 99, 235, 0.1)',
                                tension: 0.3,
                                fill: true,
                                pointRadius: 5,
                                pointHoverRadius: 7,
                            }],
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: { display: false },
                            },
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: { precision: 0 },
                                },
                            },
                        },
                    });
                } else {
                    chart.data.labels = labels;
                    chart.data.datasets[0].data = totals;
                    chart.update();
                }

            } catch (err) {
                console.error('Gagal fetch data visitor:', err);
                document.getElementById('loadingText').innerText = 'Gagal memuat data.';
            }
        }

        // Jalankan pertama kali + auto-refresh tiap 10 detik
        fetchVisitorData();
        setInterval(fetchVisitorData, 10000);
    </script>
</x-admin-layout>
