<link rel="stylesheets" type="text/css" href="/styles2.css">
<div id="pie">
<canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Finished', 'In progress'],
            datasets: [
                {
                    label: 'Dataset 1',
                    data: [70, 30],
                    borderColor: '#36A2EB',
                    backgroundColor: [
                        'rgb(250,165,50)',
                        'rgb(54, 162, 235)',
                    ],
                },
            ]
        },
        options: {



        }
    });
</script>