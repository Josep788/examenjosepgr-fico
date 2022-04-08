<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ventas producto z 2020-2021') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
            var btx = document.getElementById("myChart");
        var myChart = new Chart(btx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($meses);?>,
        datasets: [{
            label: 'Ventas del producto z 2020',
            data: <?php echo json_encode($ventas2020);?>,
            pointStyle: 'rectRot',
            pointRadius: 10,
            pointHoverRadius: 15,
            pointBorderColor: 'rgb(0, 0, 0)',
            borderDash: [5, 5],
            backgroundColor: [
                'rgba(255, 99, 32, 0.5)',
            ],
            
            borderColor: [
                'rgba(255, 99, 32, 1)',
            ],
            borderWidth: 2
        },
    
        {
            label: 'Ventas del producto z 2021',
            data: <?php echo json_encode($ventas2021);?>,
            pointStyle: 'rectRot',
            pointRadius: 10,
            pointHoverRadius: 15,
            pointBorderColor: 'rgb(0, 0, 0)',
            backgroundColor: [
                'rgba(0, 0, 532, 0.5)',
            ],
            borderColor: [
                'rgba(0, 0, 532, 1)',
            ],
            borderWidth: 2
        }]

    },
    options: {
      plugins: {
        title: {
        display: true,
        text: 'Comparativo ventas 2020-2021',
      }
      },
        scales: {
            y:{
                beginAtZero: true,
            }

        }
        
    }
});
    </script>
</x-app-layout>