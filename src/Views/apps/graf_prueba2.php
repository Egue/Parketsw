       <?php
       
       require_once "src/Controllers/UsuariosController.php";

       $obj = UsuariosController::allusers();
       $counHotmail =   0;
       $countGmail  =   0;
       $CountOtro   =   0;
       foreach($obj as $key){

        if (substr_count($key["email"], "@gmail.com")) {
            $countGmail = $countGmail + 1;
        }elseif (substr_count($key["email"], "@hotmail.com"))  {
            $counHotmail    =   $counHotmail +  1;
        }else{
            $CountOtro  =   $CountOtro  +   1;
        }

        }

       ?>


        <link rel="stylesheet" href="src/Views/file/Graficas/samples/style.css" type="text/css">
        <script src="src/Views/file/Graficas/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="src/Views/file/Graficas/amcharts/pie.js" type="text/javascript"></script>

        <script>
            var chart;
            var legend;

            var chartData = [
                {
                    "dominio": "Hotmail",
                    "value": <?php echo $counHotmail; ?>
                },
                {
                    "dominio": "Gmail",
                    "value": <?php echo $countGmail; ?>
                },
                {
                    "dominio": "Otro",
                    "value": <?php  echo $CountOtro; ?>
                }
                
            ];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "dominio";
                chart.valueField = "value";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
                // this makes the chart 3D
                chart.depth3D = 15;
                chart.angle = 30;

                // WRITE
                chart.write("chartdiv");
            });
        </script>
    
        <div id="chartdiv" style="width: 100%; height: 400px;"></div>
  