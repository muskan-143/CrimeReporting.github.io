<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js" integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div id="reportsChart" style="color:white;">
    <canvas id="report"></canvas>

</div>
<div>helelo</div>
<script>
    (async function() {
        const data = [{
                year: 2010,
                count: 10
            },
            {
                year: 2011,
                count: 20
            },
            {
                year: 2012,
                count: 15
            },
            {
                year: 2013,
                count: 25
            },
            {
                year: 2014,
                count: 22
            },
            {
                year: 2015,
                count: 30
            },
            {
                year: 2016,
                count: 28
            },
        ];

        new Chart(
            document.getElementById('report'), {
                type: 'bar',
                data: {
                    labels: data.map(row => row.year),
                    datasets: [{
                        label: 'Acquisitions by year',
                        data: data.map(row => row.count)
                    }]
                }
            }
        );
    })();
</script>