<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php
         $asString="prashant";
         $asNumber=123;
         $asFlotvalue=2.23;


         echo"name $asString  </br>";
         echo"Number  $asNumber  </br>";
         echo"flotnumber $asFlotvalue </br>";
        ?> 


    <!-- Sum of to number -->
       <?php
       $num1=20;
       $num2=200;
       $sum=$num1+$num2;
      
         echo" Sum of Two Number =$sum </br>";
        ?>

       <?php
       $num1=20;
       $num2=200;
        echo"Taken as String $num1+$num2</br>";
        ?>


           <!-- PHP Variable: case sensitive-->

         <?php
             $colour="red";
             echo"my name  is prashant  $Colour";     // Envalid 
             echo"my name  is prashant  $COLOUR";     // Envalid
             echo"my name  is prashant  $colour";     // Valid
        ?>



</body>
</html>