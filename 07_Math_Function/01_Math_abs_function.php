<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <H3> PHP Math: abs() function</H3>
       <!---  The abs() function returns absolute value of given number. 
       It returns an integer value but if you pass floating point value, it returns a float value.--->
      <?php
           echo "given flot value               =".abs(3.4)."</br>";
           echo "given negative value           =".abs(-443)."</br>";
           echo "given negative with flot value =".abs(-3.5)."</br>";
           echo "given integer value            =".abs(300)."</br>";


       ?>
</body>
</html>