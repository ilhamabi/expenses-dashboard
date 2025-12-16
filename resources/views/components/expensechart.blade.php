<div class="chart-container">
    <canvas id="expenseChart"></canvas>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('expenseChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['','','','','','','','','','','','','','','','','','','','',''],
        datasets: [{
            data: [40, 60, 35, 50, 40, 60, 70, 40, 50, 60, 75, 50, 45, 60, 70, 60, 50, 65, 80, 50, 60],
            backgroundColor: function(context) {
                const index = context.dataIndex;
                return index === 18 ? '#1565ff' : '#dbeafe';
            },
            borderRadius: 4,
            borderSkipped: false,
            barPercentage: 0.6,
            categoryPercentage: 0.8
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
            tooltip: { enabled: false }
        },
        scales: {
            y: {
                display: false,
                grid: { display: false },
                beginAtZero: true
            },
            x: {
                display: false,
                grid: { display: false }
            }
        }
    }
});
</script>
@endpush
