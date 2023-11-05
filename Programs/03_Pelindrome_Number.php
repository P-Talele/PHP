<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pelindrome Number</h1>
      <?php
       $num=121;
       $rev=0;
       $rem;
       while($num!=0)
       {
           $rem=$num%10;
           $rev=$rev*10+$rem;
           $num=$num/10;
       }      
       if($rev==$num)
       {
           echo"this is Pelindrome Number".$rev;
       }
       else
       {
          echo"This is Not Pelindrome NUmber".$rev;
       }
      ?>
</body>
</html>