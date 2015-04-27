
<!-- select DOCTYPE for browsers-->
<!DOCTYPE html>
<html>
    <head>  
        <!-- standard header stuff -->
        <meta charset="UTF-8">
        <title>php graph - shoes</title>
        <!--Load the AJAX API-->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>

        <!-- change to an include filed instead? -->
        <script type="text/javascript">

            // Load the Visualization API and the piechart package.
            google.load('visualization', '1.0', {'packages': ['corechart']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.setOnLoadCallback(drawChart);

            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {

                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['Mushrooms', 3],
                    ['Onions', 1],
                    ['Olives', 1],
                    ['Zucchini', 1],
                    ['Pepperoni', 2]
                ]);

                // Set chart options
                var options = {'title': 'How Much Pizza I Ate Last Night',
                    'width': 400,
                    'height': 300};

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        </script>
    </head>
    <body>


        <!--Div that will hold the pie chart-->
        <div id="chart_div"></div>

    </body>
</html>


<!-- Convert the pie chart to a bar chart by replacing 
google.visualization.PieChart with google.visualization.BarChart in the code and reloading your browser. -->