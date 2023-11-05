<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Class And Object</h1>
    <?php

      class  animal 
      {
             private $str="prashant";

        public function input()
         {
           echo $this->str;            
         }
      }
         $obj=new animal();
         $obj->input();

          
     ?>

    <h1>*****************************************************************************</h1>
        <?php
             class furniture 
             {
              function display()
               {
                   echo"hi prashant how are you";
               }
             }
             
              $obj=new furniture();
              $obj->display()
            
      ?>
</body>
</html>