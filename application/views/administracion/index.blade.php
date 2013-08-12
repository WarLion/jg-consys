@layout('layouts/admin')

@section('content')

<?php 	
	Asset::add('highcharts','consys/js/highcharts/js/highcharts.js');
	Asset::add('exporting','consys/js/highcharts/js/modules/exporting.js'); 
?>

<div class="container">

	<div class="row-fluid">

		<div>

		<div class="span12">

			<div class="span6">
				<h4 align="left">Propietarios con más deudas</h4> <hr />

				<table class="table table-hover">

			      <thead>
			        <tr class="well">
			          <th>#</th>
			          <th>Parcela</th>
			          <th>Propietario</th>
			          <th>Monto</th>
			        </tr>
			      </thead>

			      <tbody>
			      	@if(!empty($ctasxcobrar))
			        	@foreach($ctasxcobrar as $cxc)
				        	<tr>
								<td>{{ $x++; }}</td>
								<td>{{ $cxc->parcela_nro }}</td>
								<td>{{ $cxc->nombre }}</td>
								<td>Bs. {{ $cxc->monto.',00' }}</td>
							</tr>
						@endforeach
					@else
			        	<tr>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
						</tr>
					@endif
			      </tbody>

			    </table>
				
			</div>

			<div class="span6">
				<h4 align="left">Estadísticas</h4> <hr />

				<div id="graph" style="width: 590px; height: 400px; margin: 0 auto"></div>
			</div>

		</div>

		</div>

	</div>

</div>

@endsection

@section('postscript')

<script type="text/javascript">
	$(function () {
        $('#graph').highcharts({
            title: {
                text: 'Deuda General Total por Mes',
                x: -20 //center
            },
            subtitle: {
                text: 'Año 2013',
                x: -20
            },
            xAxis: {
                categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                    'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
            },
            yAxis: {
                title: {
                    text: 'Monto (Bs.)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ' Bs'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Monto',
                data: [4560, 5789, 3600, 6800, 7012, 5160, 7321, 8600, 0, 0, 0, 0],
                pointStart: 0
            }]
        });
    });
    
</script>

@endsection