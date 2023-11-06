<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Destructor</h1>


      <!--- The destructor method will be called as soon as all references to a particular object are removed or 
      when the object is explicitly destroyed in any order in shutdown sequence ---
      We create destructor by using "__destruct" function..--->
    <?php
       class hardware 
       {
         public function  hardware()
         {
                echo"this product help to shine</br>";
         }
       }
         class farm extends hardware
         {
              public function __construct()
              {
                  echo parent::hardware();
                   echo"this is constructor 1</br>";
              }

                public function __destruct()
                {
                      echo"Destroy</br>";
                }
         }

         $obj=new farm();
    ?>   




</body>
</html>