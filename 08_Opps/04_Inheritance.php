<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h!>Inheritance</h>
    <!---PHP supports only single inheritance, where only one class can be derived from single parent class.-->
    <?php
       class class_1 
       {
           public function car()
           {
               echo"Defender";
           }
       }
         class class_2 extends class_1
         {
              public function bike()
              {
                  echo"Sp Shine 126";
              }
           }

             $obj=new class_2();
             $obj->car();
             $obj->bike();
             
     ?>

</body>
</html>