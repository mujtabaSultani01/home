
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>home</title>
</head>
<body>
    
      <center><h1>Welcome to Sama.edu.af</h1></center>
      <hr>
      <hr>
      
</body>
</html>

<?php 

   
         // single dimension numeric array...
         $customers = array("Ali","Ahmad","Fatima","Maryam","Faisal","Farmanullah","Mhamood"); 

              for($i = 0; $i<count($customers);$i++)
                   echo $customers[$i]."<br/>";

                   

          // Multi-dimensional numeric array.
          $custmers = array(
                              array("Ali","Ahmad"),
                              array("Fatima","Maryam"),
                              array("Faisal", "Sana")
                          );

            echo $custmers[1][1];

               
            // Single dimensional associative array.
            $names = array('name'=> "Ali", 'lname'=> "Naseri", 'email'=> "ali@yahoo.com", 'address'=> "Kabul");
            echo $names['email'];

            //Multi-dimensional associative array.
            $names = array(

                     "Male"=>array("Ali", "Ahmad","Faisal","Farhad","Nasibullah"),
                     "Female"=>array("Maryam", "Fatima", "Layla","Noda","Fahima")

            );

                echo $names['Male'][3];


                





?>