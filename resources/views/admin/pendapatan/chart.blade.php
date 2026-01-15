@extends('admin.layout')

@section('title', 'Laporan Pendapatan')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Grafik Pendapatan</h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <canvas id="pendapatanChart" width="400" height="200"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('pendapatanChart');

    new Chart(ctx, {
        type: 'bar', 
        data: {
            labels: {!! json_encode($labels) !!},   
            datasets: [{
                label: 'Pendapatan',
                data: {!! json_encode($totals) !!},  
                backgroundColor: 'rgba(74, 52, 40, 0.7)', 
                borderColor: 'rgba(74, 52, 40, 1)',         
                borderWidth: 1
            }]
        },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                    position: 'top'
                },
                tooltip: {
                    enabled: true,
                    mode: 'index',
                    intersect: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return 'Rp ' + value.toLocaleString(); 
                        }
                    }
                },
                x: {
                    ticks: {
                        autoSkip: false
                    }
                }
            }
        }
    });
</script>
@endsection
