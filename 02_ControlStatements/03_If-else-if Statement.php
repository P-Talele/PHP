<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
   <h1>PHP If-else-if Statement</h1>     
   <!-- PHP if statement allows conditional execution of code. It is executed if condition is true.-->
     
    <?php
         $num1=20;
         $num2=39;
         $num3=55;

         if($num1<$num2)
         {
             echo"$num1 is smalest number</br>";
         }
         else if($num2<$num3)
         { 
            echo"$num2 is smalest number</br>";    
         }else if($num3<$num1)
         {
            echo"$num3 is smalest number</br>";    
         }
       ?>    
       
       <?php
         $num1=20;
         $num2=39;
         $num3=55;

         if($num1>$num2)
         {
             echo"$num1 is Gretest number</br>";
         }
         else if($num2>$num3)
         { 
            echo"$num2 is Gretest number</br>";    
         }else if($num3>$num1)
         {
            echo"$num3 is Gretest  number</br>";    
         }
       ?>  
</body>
</html>