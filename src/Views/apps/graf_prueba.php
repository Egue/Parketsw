<?php
require_once "src/Controllers/RolesController.php";

$objarray = RolesController::SelectRol();
$getRolUser = new RolesController;

?>
<script type="text/javascript" src="src/Views/file/Graficas/amcharts/amcharts.js"></script>
<script type="text/javascript" src="src/Views/file/Graficas/amcharts/serial.js"></script>
<script>
		var chart;
		var chartdata	=	[

		<?php
		foreach ($objarray as $key) {
			?>
		
		{
		"tipo": "	<?php echo $key['nombre_rol']; ?> ",
		"valor": 	<?php echo $getRolUser->CountRolUser($key['id']); ?>,
		"color": "#ff0f00"
		}, 

		<?php } ?>

		
		];
		AmCharts.ready(function(){
			chart 				= new AmCharts.AmSerialChart();
			chart.dataProvider 	= 	chartdata;
			chart.categoryField	=	"tipo";

			chart.depth3D = 20;
                chart.angle = 30;

			var categoryAxis 	= 	chart.categoryAxis;
                categoryAxis.labelRotation 	= 	90;
                categoryAxis.dashLength 	= 	5;
                categoryAxis.gridPosition 	= 	"start";

			var valueAxis		=	new AmCharts.ValueAxis();
			valueAxis.title 	=	"valor";
			valueAxis.dashLength	=	5;
			valueAxis.gridCount		=	2;
			valueAxis.labelFrecuency	=	2;
			valueAxis.autoGridCount	=	false;
			chart.addValueAxis(valueAxis);

			var graph			=	new	AmCharts.AmGraph();
			graph.valueField	=	"valor";
			graph.colorField	=	"color";
			graph.type			=	"column";
			graph.lineAlpha = 0;
            graph.fillAlphas = 1;
			chart.addGraph(graph);

			chart.write("grafico");

		});
	</script>

<div id="grafico" style="width: 600px; height: 400px;">

	
</div>

