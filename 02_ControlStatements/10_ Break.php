<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Break Keyworld</h1>
    <!-- PHP break statement breaks the execution of the current for, while, do-while, switch, and for-each loop. If you use break inside inner loop, 
     it breaks the execution of inner loop only.--->

     <?php    
for($i=1;$i<=10;$i++)
{    
    echo "$i <br/>";    
    if($i==5)
    {    
      break;    
   }     
}    
?>  
</body>
</html>