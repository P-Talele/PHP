<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>While Loop</h1>
  <!---  PHP while loop can be used to traverse set of code like for loop. The while loop executes a 
   block of code repeatedly until the condition is FALSE.Once the condition gets FALSE, it exits from the body of loop.---->
    <?php    
$n=1;    
while($n<=10)
{
        echo "$n<br/>";    
        $n++;    
}    
?>
<h1>printing alphabets using while loop.</h1>
<?php  
    $i = 'A';  
    while ($i < 'H') {  
        echo $i;  
        $i++;  
        echo "</br>";  
    }  
?> 
</body>
</html>