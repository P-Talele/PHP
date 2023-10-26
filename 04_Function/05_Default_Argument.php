<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Default Argument</h1>   
  <!--    PHP allows you to define C++ style default argument values.
   In such case, if you don't pass any value to the function, it will use default argument value.--->  
   
     <?php
           function   fun($name="kartik")
           {
               echo"my name is $name </br>";
           }
             fun("prashant");
             fun();
             fun("Ashish");
          ?>


  
      <?php
           function   fun1($name="kartik",$surname="patil")
           {
              echo"my name is =$name and Surname is=$surname</br>";
           }
             fun1("prashant","talele");
             fun1();
             fun1("Ashish");
          ?>

</body>
</html>