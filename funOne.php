<!--
--  Darren Fisher
--  Homework 6
-->

<?php require_once("header.php")?>

<div>

<button onclick="changeContent()"> Plot Apple Stock</button>

<script>
    function changeContent() 
        {
            var xArray = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
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