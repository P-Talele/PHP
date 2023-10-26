<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP Function Arguments</h1>
          <!---We can pass the information in PHP function through arguments which is separated by comma.--->


          <?php

             function  disp1($name)
             {
                 echo"my nane is $name </br>";
             }
                disp1("prashant");
                disp1("rohit");
                disp1("kartik");
           ?>  


         <?php
         function  disp2($name,$id)
            {
              echo " Emp ID= $id Emp Name=$name </br>";
            }
             disp2(111,"prashant");
             disp2(123,"rohit");
             disp2(1232,"kartik");
             ?>

    
</body>
</html>