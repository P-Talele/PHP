<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h1> For Loop</h1>
      <!---For Loop--->
      <!--PHP for loop can be used to traverse set of code for the specified number of times --->

      <?php
           $num=10;

           for ($i=1; $i<=$num; $i++)
           {
               echo"$i</br>";
           }
       ?>

         <!--- Pattern --->
         
            <?php
             for ($i=1; $i<=5; $i++)
             {
                  for($n=1;$n<=$i; $n++)
                   {
                       echo"*";
                   }
                   echo"</br>";
             }
            ?> 

              
</body>
</html>