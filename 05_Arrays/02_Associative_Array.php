<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Array</title>
</head>
<body>

      <h1>PHP Associative Array</h1>
       <!----We can associate name with each array elements in PHP using => symbo----->

          <?php
     
               $arr=array("prashant"=>"MCA","Bhushan"=>"BE","Ashish"=>"BCA");
               echo" $arr[prashant] $arr[Bhushan] $arr[Ashish]</br>";
          ?>


  <h4>Second Way</h4>
   <?php
         $arr1["prashant"]="MCA";
         $arr2["Kartik"]="BE";
         $arr3["Prashat"]="Bsc";
        
         echo"$arr1[prashant]";
   ?>
</body>
</html>