<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1> Local Variable</h1>
    <!-- Local Variable-->
          <?php
           function  localvariable()    // valid
           {
                $id=123;
                $name="prashant Arun Talele";

                echo"Employee id=$id</br>";
                echo"Employee Name=".$name;
           }

            localvariable();
          ?> 
     <!-- Local variable declared inside the function -->
        <?php
           function  localvariable1()    //   Envalid
           { 
                $id=123;
                $name="prashant Arun Talele";

           }
  
            echo"Employee id=$id</br>";   
            echo"Employee Name=".$name;
            localvariable();
          ?> 


   <!-- Global Variable--->
   <!--- The global variables are the variables that are declared outside the function. These variables
        can be accessed  anywhere in the program. 
        To access the global variable within a function, use the GLOBAL keyword before the variable-->
   <h1>Global Variable</h1>
       <?php
            $id=123;
            $name="prashant Arun Talele";
            
              function  globalvariable()
              {
                  global$id;
                  global$name;

                  echo"Employee id=$id</br>";
                  echo"Employee Name=".$name;
              } 
               globalvariable();
            
  
        ?>

           <?php
             $id=123;
             $name="prashant Arun Talele";
            
              function  globalvariable1()
              {
                  global$id;
                  global$name;

                  echo"Employee id=$id</br>";
                  echo"Employee Name=$name</br>";
              } 
               globalvariable();
               echo"Employee id=$id</br>";
               echo"Employee Name=$name</br>";
            
        ?>
        

          <?php

                 $str="Global";
                 function access()
               {
                  $str="Local";
                  echo"cal the varibale=$str";
               }
                access();
          ?>


   <h1>Static Variable</h1>
   <!--static  variable-->
  
   <!--- It is a feature of PHP to delete the variable, once it completes its execution and memory is freed.
      Sometimes we need to store a variable even after completion of function execution. Therefore,
      another important feature of variable scoping is static variable. We use the static keyword before the variable to define a variable, 
      and this variable is called as static variable.--->

  
     <?php
     
    function staticvariable()
    {
             
        static$num=3;    // static vaiable
             $num1=5;    // non static variable

                $num++;
                $num1++;
            echo"static value=$num</br>";
            echo" non static value=$num1</br>";
    }

        staticvariable();
        staticvariable();
        staticvariable();
        
        staticvariable();
        staticvariable();
        staticvariable()
                     
     ?>
</body>
</html>