<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Prueba</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  </head>
  <body>
    <canvas id="myChart" width="100%"></canvas>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
            label: 'Total recaudado',
            backgroundColor: [
                'rgba(0, 0, 0, 0)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            pointBackgroundColor: [
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)',
                'rgba(205, 99, 132, 1)'
            ],
            borderWidth: 2,
            pointRadius: 3.5,
            data: [30, 50, 10, 5, 10, 40, 35, 25, 15, 10, 35, 55]
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





<!-- AUTOREFRESH 1MIN

    <script type="text/javascript">
      setTimeout(function(){location = ''},60000)
    </script>

  </body>
</html>
