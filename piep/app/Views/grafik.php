<!DOCTYPE html>
<html>

<head>
    <title>LINE CHART</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Views'],
                ['Jan', Math.floor(Math.random() * 10)],
                ['Feb', Math.floor(Math.random() * 10)],
                ['Mar', Math.floor(Math.random() * 10)],
                ['Apr', Math.floor(Math.random() * 10)],
                ['Mei', Math.floor(Math.random() * 10)],
                ['Jun', Math.floor(Math.random() * 10)],
                ['Jul', Math.floor(Math.random() * 10)],
                ['Aug', Math.floor(Math.random() * 10)],
                ['Sep', Math.floor(Math.random() * 10)],
                ['Oct', Math.floor(Math.random() * 10)],
                ['Nov', Math.floor(Math.random() * 10)],
                ['Dec', Math.floor(Math.random() * 10)]
            ]);

            var options = {
                hAxis: {
                    title: 'Time'
                },
                vAxis: {
                    title: 'Popularity'
                },
                colors: ['#17a2b8', '#097138'],
                crosshair: {
                    color: '#000',
                    trigger: 'selection'
                },
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            //css 
            options.chartArea = {
                left: '10%',
                top: '5%',
                width: "85%",
                height: "80%"
            };

            //create trigger to resizeEnd event     
            $(window).resize(function() {
                if (this.resizeTO) clearTimeout(this.resizeTO);
                this.resizeTO = setTimeout(function() {
                    $(this).trigger('resizeEnd');
                }, 500);
            });

            //redraw graph when window resize is completed  
            $(window).on('resizeEnd', function() {
                drawChart(data);
            });
            //end

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>


</head>

<body>

    <div id="curve_chart" style="width: 1200px; height: 500px"></div>


    </div>
</body>

</html>