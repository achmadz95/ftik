<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Highcharts Example</title>

        <style type="text/css">
#container {
    min-width: 310px;
    max-width: 800px;
    height: 400px;
    margin: 0 auto
}
        </style>
    </head>
    <body>
<script src="<?php echo base_url()?>code/highcharts.js"></script>
<script src="<?php echo base_url()?>code/modules/series-label.js"></script>
<script src="<?php echo base_url()?>code/modules/exporting.js"></script>

<div id="container"></div>



        <script type="text/javascript">

Highcharts.chart('container', {

    title: {
        text: 'Jumlah User , 2018'
    },

    subtitle: {
        text: 'Source: localhost/ftik-its'
    },

    yAxis: {
        title: {
            text: 'Data User'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2018
        }
    },

    series: [{
        name: 'User',
        data: [<?php echo $jumlah_all['id_user']; ?>, 2, 3, 4, 5, 6, 7, 8]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
        </script>
    </body>
</html>