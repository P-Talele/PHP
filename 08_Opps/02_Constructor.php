<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> PHP</h1>
    <!----   1> PHP 5 allows developers to declare constructor methods for classes.
             2>  Constructor is suitable for any initialization that the object may need before it is used.
             3> We can design constructor using "__construct" or same name as class name
             3>  Parent constructors are not called implicitly if the child class defines a constructor.
             4>  In order to run a parent constructor, a call to parent::__construct(). ----->

  <h2>Example 1</h2>
  
    <?php
      class Example 
      {
           public  function  Display()
             {
                echo"this is not  Construor";      
             }
        }

           $obj=new Example();
         //  $obj->Display();
           $obj=new Example();
       ?>
 <h4>--------------------------------------------------------------------------------------------------------------------</h4>
        <?php
         
           class Cricket 
           {
               public function  __construct()
               {
                   echo"This is Constructor";
               }
           } 

               $obj=new Cricket();

        ?>
    
</body>
</html>