<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String_Function</title>
</head>   
<body>
  <h1>String_Function</h1>
  <h3>  PHP addcslashes() Function</h3>
  <!--PHP addcslashes() function is used to add quote string with slashes in a C style. It is case-sensitive---->

       <?php
        $str="php is server Scripting Language";
        echo"given String".$str."</br>";
        echo"after Using String Function".addcslashes($str,'p')."</br>"
       ?>
      <?php   
       $str="prashant";
        echo"Given String=".$str."</br>";
        echo"After Using Given  String".addcslashes($str,'a..z');
       ?>

             <h3>PHP bin2hex() Function</h3>
              <!---PHP bin2hex() function is used to convert string value of ASSCII characters to hexadecimal value.--->

          <?php
              $str="Java Is programming languages";
              echo"Given String</br>";
              echo"By Using bin2hex Function()=".bin2hex($str)."</br>"; 
           ?> 
     
         
</body> 
</html>