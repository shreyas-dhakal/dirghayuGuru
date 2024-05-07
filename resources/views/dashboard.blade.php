<x-app-layout>
    <div>
        <div class="container">
            <canvas id="appointmentChart" width="500" height="500"></canvas>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('appointmentChart').getContext('2d');
            var appointmentCounts = @json($appointmentCounts);
    
            var labels = [];
            var data = [];
            var backgroundColors = []; // Array to hold background colors
    
            // Extract labels and data from appointmentCounts object
            for (var departmentName in appointmentCounts) {
                labels.push(departmentName);
                data.push(appointmentCounts[departmentName]);
                // Generate a random color for each bar
                backgroundColors.push('rgba(' + Math.floor(Math.random() * 256) + ', ' + Math.floor(Math.random() * 256) + ', ' + Math.floor(Math.random() * 256) + ', 0.2)');
            }
    
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label:"Total Appointments last month",
                        data: data,
                        backgroundColor: backgroundColors, // Use the array of background colors
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    </div>
    <div><p>Total Appointments: {{ $totalAppointments }}</p>
    </div>
</x-app-layout>
