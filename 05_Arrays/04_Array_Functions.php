<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_Function</title>
</head>
<body>
      <h1>PHP Array Functions</h1> 
      <!--- PHP provides various array functions to access and manipulate the elements of array---->
                    <h2> 1  PHP array() function</h2>
        <!--PHP array() function creates and returns an array. It allows you to create indexed, associative and multidimensional arrays.--->
      
       <?php
                $arr=array("prashant","Ashish","Rohot","kartik");
                  echo"$arr[0]=$arr[1]=$arr[2]=$arr[3]";
        ?>

              <h2>2  PHP array_change_key_case() function</h2>
          <!--PHP array_change_key_case() function changes the case of all key of an array.--->

              <?php
           //  Syntax  =array array_change_key_case ( array $array [, int $case = CASE_LOWER ] )  
     
              $arr1=array("prashant"=>1232,"Ashish"=>"7466463","rohit"=>"646343");
              print_r(array_change_key_case($arr1,CASE_UPPER))."</br>";        
              echo"</br>";
             
           ?>

         
              <?php
           //  Syntax  =array array_change_key_case ( array $array [, int $case = CASE_LOWER ] )  
     
               $arr1=array("prashant"=>1232,"Ashish"=>"7466463","rohit"=>"646343");
               print_r(array_change_key_case($arr1,CASE_LOWER))."</br>";                
               ?>

               <h2>3 PHP array_chunk() function</h2>
               <!--- PHP array_chunk() function splits array into chunks. By using array_chunk() 
                method, you can divide array into many parts.--->
             
               <?php    
               $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
               print_r(array_chunk($salary,2));   
               ?>   

               <h2>4 PHP count() function</h2>
               <!--- PHP count() function counts all elements in an array.---->

               <?php  
                $arr=array("prashant","Ashish","Rohot","kartik");
                 print_r(count($arr));
                ?>
  
                <h1> 5 PHP sort() function</h1>
                 <!---PHP sort() function sorts all the elements in an array.---->
                <?php
                 $arr=array("prashant","Ashish","Rohot","kartik"); 
                 sort($arr);

                 foreach($arr as $a)
                 {
                    echo $a."  ";
                  }
                 ?>

                 <h2> 6  PHP array_reverse() function</h2>
                 <!--- PHP array_reverse() function returns an array containing elements in reversed order.--->

                      <?php
                       $arr=array("prashant","talele","Ashish");
                       $rev=array_reverse($arr);
                       foreach($rev as $a)
                       {
                          echo $a."  ";
                          echo"</br>";
                        }

                       ?>

                      <h2> 7 PHP array_search() function</h2>

               <!---PHP array_search() function searches the specified value in an array. It returns key if search is successful. --->

                        
             
                <?php
                   $arr=array("prashant","talele","Ashish");
                   $key=array_search("prashant",$arr);
                 
                    if($key) 
                    {
                        echo"you are all  ready Loginned";
                    }
                    else 
                     {
                      echo"you are not  Loginned";
                     }  
                
                ?>
               <h2>PHP array_intersect() function</h2>  
               <!--PHP array_intersect() function--->

               <?php    
               $name1=array("sonoo","john","vivek","smith");    
               $name2=array("umesh","sonoo","kartik","smith");    
               $name3=array_intersect($name1,$name2);  
               foreach( $name3 as $n )    
               {    
                   echo "$n<br />";    
               }    
                ?>   



          
</body>
</html>