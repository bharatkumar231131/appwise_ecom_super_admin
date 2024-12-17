<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Report</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <h1>Sales Reports</h1>
    <canvas id="salesChart" width="400" height="200"></canvas>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Controller se data ko JSON format me pass karein
            const salesData = @json($salesData);

            const ctx = document.getElementById('salesChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar', // Or 'line' for line chart
                data: {
                    labels: salesData.labels, // X-axis ke labels
                    datasets: [{
                        label: 'Sales (in R)',
                        data: salesData.data, // Sales ka data
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>