<!--
--  Darren Fisher
--  Homework 6
-- Jquery Library
-->


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
      
        <script src="jquery-3.6.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      
        <title>Darren Fisher HW 6 Ecommerce</title>
      
      
        <script>
          $(document).ready(function()
          {
            $("button").click(function()
            {
              alert("Just kiding! that won't change... but Hey " + $("#test").val() + " , nice to meet you!");
            });
          });
          </script>

        <script>
          $(document).ready(function()
          {
            $("#btn1").click(function()
             {
                $("#test1").text("This script got executed and is appart of Jquery");

            });
          });
        </script>
      
      
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
          </br>
        <p>Name: <input type="text" id="test" value="This is a Get value"></p>

        <button>Show Value</button>

        <p id="test1">This is a paragraph and it will change!!.</p>
        
      </div>
  
</body>
</html>
