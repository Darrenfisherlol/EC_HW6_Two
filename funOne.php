<!--
--  Darren Fisher
--  Homework 6
-- js plotly
-->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Darren Fisher HW 6 Ecommerce</title>


        <script src="https://cdn.plot.ly/plotly-2.16.1.min.js"></script>
        <script src="plotly-2.16.1.min.js"></script>


    </head>
    <body>
        <!-- Pages -->
        <div>
        <a class="btn btn-primary" href="index.php"  role="button"> Home </a> 
        <a class="btn btn-primary" href="funOne.php"  role="button"> Plotly.js </a> 
        <a class="btn btn-primary" href="funTwo.php"  role="button"> JS bootstrap</a> 
        <a class="btn btn-primary" href="funThree.php"  role="button"> Underscore </a> 
        <a class="btn btn-primary" href="funFour.php"  role="button"> jquery </a> 
        </div>
        <div>
            </br>
        </div>

      <div>
   
        
<div>

<button onclick="changeContent()"> Plot Apple Stock</button>

<script>
    function changeContent()
        {
            var xArray = [1,2,3,4,5,6,7,8,9,10];
            var yArray = [140,142,138,141,146,149,152,145,155,150];

            // Define Data
            var data = [{
            x: xArray,
            y: yArray,
            mode:"markers",
            type:"scatter"
            }];

            // Define Layout
            var layout = {
            xaxis: {range: [40, 160], title: "Days"},
            yaxis: {range: [0, 20], title: "Stock Price Price"},
            title: "Apple Stock Prices Over Time"
            };

            Plotly.newPlot("myPlot", data, layout);    
    }
</script>

</div>

</body>
</hmtl>