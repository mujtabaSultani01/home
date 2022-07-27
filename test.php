
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
      

<?php 

        /*
   
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

               

            //PHP loops...
             $num = 5;
             while($num>0){

                echo $num."<br/>";
                $num = $num - 1;
             }
              

             $foods = array("Burger","Pasta","Pizza","Chips");
             $num = 0;
             while($num<count($foods)){

                echo $foods[$num];
                 echo "<br/>";
                 $num = $num + 1;
             }



             for ($i=0; $i<count($foods); $i++) { 
                 echo $foods[$i];
                 echo "<br/>";
             }

             

             //PHP function...

             // simple program to return the fibbonaccia resutl.

             function fibo($num){
                if($num == 0)
                    return 0;
                elseif ($num == 1) {
                    return 1;
                }
                else
                    return fibo($num-1) + fibo($num-2);
             }

             $number = 7;
             $fi = fibo($number);
             echo "The fibbonaccia of ".$number." is: ".$fi;

             

             function calcuNetSalary($hours, $salary){

                return $hours * $salary;

             }

             function calcuFinalSalary($netSalary, $tax){

                return $result = $netSalary - (($netSalary*5)/100);
             }

             $hours = 40;
             $salary_hour = 500;
             $tax = 5;

             $netSalary = calcuNetSalary($hours, $salary_hour);
             $finalSalary = calcuFinalSalary($netSalary, $tax);

             echo "your total salary is: ".$finalSalary;

             //PHP Forms...

             if(isset($_GET['submit'])){
             echo $username = $_GET['username'];
             echo "<br/>";
             echo $password = $_GET['password'];
         }

         */

?>
<!--
    <form>
       <table>
           <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
           </tr>
           <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
           </tr>
           <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Save"></td>
           </tr>
       </table>
   </form>
   -->

<?php
    /*
         if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $gender = "";

           /*
            if ($_POST["gender"] == "Male") {

                echo "<span style='color:green'>Welcome Mr.: </span>".$username;
            }
            else
            
                echo "<span style='color:green'>Welcome Ms.: </span>".$username;
                
                */

                /*
                if ($_POST["gender"] == "Male") {

                $gender = "Welcome Mr. ";
                }
               else{

                $gender = "Welcome Ms. ";
               }
            
                echo "<span style='color:green'>".$gender.": </span>".$username;

             }
         else{

         */
            


?>

 <!--
   
          <form method="POST" action="" enctype="multipart/form-data">
              <table>
              <tr>
              <td>Username:</td>
              <td><input type="text" name="username"></td>
          </tr>
          <tr>
              <td>Gender</td>
              <td><select name="gender">
                    <option>Male</option>
                    <option>Female</option>
              </select><input style="width: 108px;" type="submit" name="submit"></td>
          </tr>
          <tr>
              <td></td>
              <td></td>
          </tr>
      </table>
          </form>
      -->
           
      <?php //} ?>



      <?php
                date_default_timezone_set('Asia/Kabul');
                echo date("Y/m/d h:i:s");



      ?>
</body>
</html>