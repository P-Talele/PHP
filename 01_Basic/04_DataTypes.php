<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <h1>PHP Data Types</h1>  

<!-- Boolean value--->

    <?php   
    if (TRUE)  
        echo "This condition is TRUE.";  
    if (FALSE)  
        echo "This condition is FALSE.";  
    ?>  
     
     <!---Integer Value--->
    <?php   
    $dec1 = 34;  
    $oct1 = 0243;  
    $hexa1 = 0x45;  
    echo "Decimal number: " .$dec1. "</br>";  
    echo "Octal number: " .$oct1. "</br>";  
    echo "HexaDecimal number: " .$hexa1. "</br>";  
    ?>


    <!-- Floating value-->

    <?php   
    $n1 = 19.34;  
    $n2 = 54.472;  
    $sum = $n1 + $n2;  
    echo "Addition of floating numbers: " .$sum;  
    ?>  



<!--- String value-->
    <?php   
    $company = "TCS";  
    //both single and double quote statements will treat different  
    echo "Hello $company";  
    echo "</br>";  
    echo 'Hello $company';  
    ?>  
</body>
</html>