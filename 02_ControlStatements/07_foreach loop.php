<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>foreach loop</h1>
    <!---foreach loop--->

    <!---- The foreach loop is used to traverse the array elements. It works only on array and object.
     It will issue an error if you try to use it with the variables of different datatype.---->

     <?php  
    //declare array  
    $season = array ("Summer", "Winter", "Autumn", "Rainy");  
      
    //access array elements using foreach loop  
    foreach ($season as $element)
    {  
        echo "$element";  
        echo "</br>";   
    }  
?>
  <h1>declare array</h1>
<?php  
    //declare array  
    $employee = array (  
        "Name" => "Alex",  
        "Email" => "alex_jtp@gmail.com",  
        "Age" => 21,  
        "Gender" => "Male"  
    );  
      
    //display associative array element through foreach loop  
    foreach ($employee as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>";   
    }  
?>
<h1> declare multi-dimensional array  </h1>
<?php  
    //declare multi-dimensional array  
    $a = array();  
    $a[0][0] = "Alex";  
    $a[0][1] = "Bob";  
    $a[1][0] = "Camila";  
    $a[1][1] = "Denial";  
      
    //display multi-dimensional array elements through foreach loop  
    foreach ($a as $e1) {  
        foreach ($e1 as $e2) {  
            echo "$e2\n";  
        }  
    }  
?>  

</body>
</html>
