<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(shoppingChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(routesChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function shoppingChart() {

        // Create the data table for shoppingChart.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Product');
        data.addColumn('number', 'Total');
        data.addRows([
          ['Mushrooms', 1],
          ['Onions', 1],
          ['Olives', 2],
          ['Zucchini', 2],
          ['Pepperoni', 1]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'How Much Pizza Sarah Ate Last Night',
                       width:500,
                       height:250,
                       is3D:true,
                       legend:'labeled',
                       };

        // Instantiate and draw the chart for shoppingChart.
        var chart = new google.visualization.PieChart(document.getElementById('shopping'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function routesChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 2],
          ['Onions', 2],
          ['Olives', 2],
          ['Zucchini', 0],
          ['Pepperoni', 3]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'How Much Pizza Anthony Ate Last Night',
                       width:500,
                       height:250,
                       is3D:true,
                       legend:'labeled',
                       };

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('routes'));
        chart.draw(data, options);
      }
    </script>
  </head>
</html>
