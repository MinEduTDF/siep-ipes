      function graficos(modo,id,json) {
            var jsonData = $.ajax({
				        url : "graficos/"+json,
                dataType: "json",
                async: true
            }).done(function(rta){

              var data = google.visualization.arrayToDataTable(rta.data);
              var options = rta.options;

              var chart;
              switch(modo) { 
                case 'torta':
                  chart = new google.visualization.PieChart(document.getElementById(id));
                break;
                case 'lineal':
                  chart = new google.visualization.LineChart(document.getElementById(id));
                break;
                case 'barra':
                  chart = new google.visualization.ColumnChart(document.getElementById(id));
                break;
              }
  
		      google.load('visualization', '1', {'packages':['corechart']});
	        google.setOnLoadCallback(graficos);
          chart.draw(data, options);

         });
      }

     google.load("visualization", "1.1", {'packages':['table']});

     function tablas(id) {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Alumno');
        data.addColumn('string', 'Curso');
        data.addRows([
          ['Probando',  'sobral'],
          ['asd',  'sobral'],
          ['asdas',  'sobral'],
          ['asdasd',  'sobral'],
          ['asdasd',  'sobral'],
          ['asdadsa',  'sobral'],
          ['asdasd',  'sobral']
        ]);

        var table = new google.visualization.Table(document.getElementById(id));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
  
      } 