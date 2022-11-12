<!--
--  Darren Fisher
--  Homework 6
-- Bootstrap library contain java script
-->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Darren Fisher HW 6 Ecommerce</title>
    </head>
    <body>
        <!-- Pages -->
        <div>
            <a class="btn btn-primary" href="index.php"  role="button"> Home </a> 
            <a class="btn btn-primary" href="funOne.php"  role="button"> One </a> 
            <a class="btn btn-primary" href="funTwo.php"  role="button"> Two</a> 
            <a class="btn btn-primary" href="funThree.php"  role="button"> Three </a> 
            <a class="btn btn-primary" href="funFour.php"  role="button"> Four </a> 
        </div>
        <div>
            </br>
        </div>

      <div>
   
              <!-- Large modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <p> modal large</p>
            </div>
          </div>
        </div>

        <!-- Small modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <p> modal small</p>
            </div>
          </div>
        </div>
        
  </div>
  
</body>
</html>
