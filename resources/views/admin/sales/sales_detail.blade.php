<?php

// Assuming this data is coming from your API call
$labels = json_encode(["March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]);
$data = json_encode([192070.5, 42050, 16040, 4820, 2000, 29740, 8776, 860018.95, 1348498.05, 262411.39]);

// Call the function to create the HTML file
createGraphHTML($labels, $data);

// Function to create the HTML file with chart
function createGraphHTML($labels, $data)
{
    // Create the HTML content with chart.js
    $htmlContent = <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sales Reports</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body>
        <h1>Sales Reports for 2024</h1>
        <canvas id="salesChart" width="400" height="200"></canvas>
        <script>
            var ctx = document.getElementById('salesChart').getContext('2d');
            var salesChart = new Chart(ctx, {
                type: 'line', // You can change this to 'bar' or 'pie' if needed
                data: {
                    labels: $labels, // Passing the labels
                    datasets: [{
                        label: 'Sales Amount ($)',
                        data: $data, // Passing the sales data
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 2,
                        tension: 0.4 // smooth curve for the line chart
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Months'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Sales ($)'
                            },
                            beginAtZero: false // Sales data may not start at zero, adjust as needed
                        }
                    }
                }
            });
        </script>
    </body>
    </html>
HTML;

    // Save the generated HTML to a file
    file_put_contents('sales_report_graph.html', $htmlContent);

    echo "HTML file created successfully: <a href='sales_report_graph.html' target='_blank'>View Sales Report Graph</a>";
}
?>
