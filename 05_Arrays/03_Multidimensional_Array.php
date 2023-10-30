<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
      <h1>PHP Multidimensional Array</h1>
      <!-- PHP multidimensional array is also known as array of arrays. It allows you to store tabular data in an array.
        PHP multidimensional array can be represented in the form of matrix which is represented by row * column.--->     
        
         <?php
              $data=array
             (
               array(123,"prashant","MCA",9130231926),
               array(121,"Ashish","BCA",9158410300),
               array(233,"kartic","bsc",8740453210),
              // array(233,"kartic","bsc",8740453210)
                 );

                  for($i=0; $i<3; $i++)
                     {
                        for($j=0;$j<4;$j++)
                        {
                          echo $data[$i][$j]."     ";
                        }
                      echo"</br>";
                  }
        ?>

<  
?>  
</body>
</html>   