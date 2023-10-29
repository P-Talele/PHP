<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <h1>Arrays</h1>>
    <!---  PHP array is an ordered map (contains value on the basis of key).
       It is used to hold multiple values of similar type in a single variable.---->  
       
       
    <h2>PHP Indexed Array</h2>
       <!-- PHP index is represented by number which starts from 0. We can store number
       , string and object in the PHP array. All PHP array elements are assigned to an index number by default.--->
 <?php
     $arr=Array("prashant","Arun ","Talele");
     echo"$arr[0] $arr[1] $arr[2] </br>";
     echo"$arr[0] $arr[0] $arr[0] </br>";

    for ($i=0; $i<$arr;$i++)
    {
       echo"$arr[$i]</br>";
       break;

    }
    ?>  

    <?php

           $arr1[0]="prashant";
           $arr1[1]="Ashish";
           $arr1[2]="kalpesh";
           $arr1[3]="Prapti";
           echo"$arr1[0] $arr1[1] $arr1[2]</br>"        
    ?>
  
</body>
</html>