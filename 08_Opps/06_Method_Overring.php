<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Method Overriding</h1>
    <?php 
       class class_1 
       {
           public function car($num1,$num2)
           {
                 $sum=$num1+$num2;
                 echo"First Method=$sum</br>";
           }
       }
         class class_2 extends class_1
         {
              public function car($num1,$num2)
              {
                $sum=$num1+$num2;
                echo"Second method=$sum</br>";
             }
         }

             $obj=new class_2();
             $obj->car(12,23);
            
           ?>
</body>
</html>