<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Destructor</h1>
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