<?php
require_once "src/Controllers/Graf_pruebaController.php";
$dataarray  =   Graf_pruebaController::GranGraf();

?>
        <link rel="stylesheet" href="src/Views/file/Graficas/samples/style.css" type="text/css">
        <script src="src/Views/file/Graficas/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="src/Views/file/Graficas/amcharts/serial.js" type="text/javascript"></script>
        <script src="src/Views/file/Graficas/amcharts/gantt.js" type="text/javascript"></script>

        <script>
        var chart = AmCharts.makeChart("chartdiv", {
            "type": "gantt",
            "period": "DD",

            "valueAxis": {
                "type": "date"
            },
            "brightnessStep": 10,
            "graph": {
                "fillAlphas": 1,
                "balloonText": "[[open]] - [[value]]"
            },
            "rotate": true,
            "categoryField": "category",
            "segmentsField": "segments",
            "dataDateFormat": "YYYY-MM-DD",
            "startDateField": "start",
            "endDateField": "end",




            "dataProvider": [

                <?
                foreach ($dataarray as $key ) {            ?>

                {
                "category": "<?php echo $key['placa'];   ?>",
                "segments": [{
                    "start": "<?php echo $key['fecha_ingreso'];   ?>",
                    "end": "<?php echo $key['fecha_salida'];   ?>"
                }]
            }, 

        <?php } ?>

            ],
            "chartCursor": {
                "valueBalloonsEnabled": false,
                "cursorAlpha": 0,
                "valueLineBalloonEnabled": true,
                "valueLineEnabled": true,
                "valueZoomable":true,
                "zoomable":false
            },

            "valueScrollbar": {
                "position":"top",
                "autoGridCount":true,
                "color":"#000000"
            }
        });
        </script>
    
        <div id="chartdiv" style="width: 100%; height: 400px;"></div>
    