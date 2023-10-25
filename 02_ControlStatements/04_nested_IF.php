<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <h1>nested if Statement</h1>
    <!-- nested if Statement-->
    <?php
               $age=20;
               $natinality="indian";


               if($natinality =="indian")
               {
                 if($age>=18)
                 {
                       echo"you are eligible for vote";
                 } 
                 else
                 {
                       echo"you are not eligible  for vote";
                 }

                 }

    ?>
</body>
</html>