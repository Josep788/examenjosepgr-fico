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
            backgroundColor: [
                'rgba(255, 99, 32, 0.5)',
                'rgba(54, 162, 35, 0.5)',
                'rgba(255, 206, 6, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 10, 25, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 32, 1)',
                'rgba(54, 162, 35, 1)',
                'rgba(255, 206, 6, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 10, 25, 1)',
            ],
            borderWidth: 2
        },
    
        {
            label: 'Ventas del producto z 2021',
            data: <?php echo json_encode($ventas2021);?>,
            backgroundColor: [
                'rgba(0, 0, 532, 0.5)',
                'rgba(324, 3, 235, 0.5)',
                'rgba(215, 196, 16, 0.5)',
                'rgba(75, 250, 10, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.2)',
            ],
            borderColor: [
                'rgba(0, 0, 532, 1)',
                'rgba(324, 3, 235, 1)',
                'rgba(215, 196, 16, 1)',
                'rgba(75, 250, 10, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
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