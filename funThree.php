<!--
--  Darren Fisher
--  Homework 6
-->

<?php require_once("header.php")?>

  <div>

      <!-- Underscore JS Library-->

      <!-- <button onclick="function()"> Button Click </button> -->

      <script type="text/javascript">

        var numbersArray = [1,2,3,4,5]

        // .first and .last are a array library import called underscore
        console.log(_.first(numbersArray));
        console.log(_.last(numbersArray));

        var numTwo = [3,4,5,6]

        fuctionUnion(numbersArray,numTwo)

        
        // .union function join to arrays but does not include duplicate numbers
        function fuctionUnion(one,two)
        {
          console.log(_.union(one,two));

        } 


      </script>
  </div>

</body>
</hmtl>
