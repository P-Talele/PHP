<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Overloading</title>
</head>
<body>
    <h1>Method Overloading</h1>
    
    <?php 
       class class_1 
       {
           public function car($num1,$num2)
           {
                 $sum=$num1+$num2;
                 echo"$sum</br>";
           }
       }
         class class_2 extends class_1
         {
            
              public function car($num1)
              {
                   echo"$num1";
             }
         }

             $obj=new class_2();
             $obj->car(12,23);
             $obj->car("hornate");
           ?>
</body>
</html>