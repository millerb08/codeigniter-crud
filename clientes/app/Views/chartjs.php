<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <br>
<div class="container">
    <a href="<?php echo base_url()?>" class="btn btn-success">Atras</a>
    <canvas id="pie" width="400" height="150"></canvas>
    <script>


    var valores = [<?php echo $cantidad['hombres']?>,<?php echo $cantidad['mujeres']?>];


    
    var ctx = document.getElementById('pie').getContext('2d');
    var polar = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Hombres', 'Mujeres'],
            datasets: [{
                label: 'Numero de hombres y mujeres',
                data: valores,
                backgroundColor: [
                    'rgba(255, 159, 64, 1)',
                    'rgba(75, 192, 192, 1)',
                ]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Cantiad de hombres y mujeres'
            }
        }
    });
    </script>


<br>
<br>
<br>
    <canvas id="bar" width="400" height="150"></canvas>
    <script>
    
    var valores = <?php echo json_encode($edad); ?>;
    var hombres = valores.hombres;
    var mujeres = valores.mujeres;



    
    var ctx = document.getElementById('bar').getContext('2d');
    var bar = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ["18-29", "30-39", "40-49", "50-59", "60-69", "70+"],
        datasets: [
            {
            label: "Hombres",
            backgroundColor: "rgba(255, 159, 64, 1)",
            data: hombres
            }, {
            label: "Mujeres",
            backgroundColor: "rgba(75, 192, 192, 1)",
            data: mujeres
            }
        ]
        },
        options: {
        title: {
            display: true,
            text: 'Hombres y mujeres por edad'
        }
        }
    });
    </script>
</div>




</body>
</html>