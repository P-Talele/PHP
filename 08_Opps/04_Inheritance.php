<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inheritance</h1>
    <!---PHP supports only single inheritance, where only one class can be derived from single parent class.-->
    <h2>Single Inheritance</h2>
    <?php 
       class class_1 
       {
           public function car()
           {
               echo"Defender</br>";
           }
       }
         class class_2 extends class_1
         {
              public function bike()
              {
                  echo"Sp Shine 126</br>";
              }
           }

             $obj=new class_2();
             $obj->car();
             $obj->bike();
           ?>
       <h2>Multilevel Inheritance</h2>

           <?php
        
       class class_11
       {
           public function car()
           {
               echo"Defender</br>";
           }
       }
         class class_22 extends class_11
         {
              public function bike()
              {
                  echo"Sp Shine 126</br>";
              }
           }

             class class_33 extends class_22
           {
                public function cycle()
                {
                    echo"Sp cycle126</br>";
                }
             }
  

             $obj=new class_33();
             $obj->car();
             $obj->bike();
             $obj->cycle();
           ?>
</body>
</html>