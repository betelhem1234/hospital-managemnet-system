
<?php 
function validate_input($data){
    $data=trim($data);
    $data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$med_name= validate_input($_POST["med_name"]);
$purpose = validate_input($_POST["purpose"]);
$dose = validate_input($_POST["dose"]);
$side = validate_input($_POST["side"]);
$made = validate_input($_POST["made"]);


//validating input to accept only characters and white space

        $connection = mysqli_connect("localhost", "root", "");//try to creat connection
        if (!$connection) {
          print("Server not found!!!");
        }
        else {
            mysqli_select_db($connection, "hospital");      
            $sqlCheck = "SELECT medicine_name FROM medicine where medicine_name = '$med_name'";
            $queryCheck = mysqli_query($connection, $sqlCheck);
           
              
                $sql = "INSERT INTO  medicine  VALUES('$med_name','$purpose','$dose','$side','$made')";
                $query = mysqli_query($connection, $sql);
                if (!$query) {
                  print("error .please try again!!!");
                } else {
                   header("location: med_dis.php");
                 //print("You are succusesfully registered!<br><a href='labpage.php'>Go to labratorists Page</a>");
                }
              }     
    
    mysqli_close($connection);


?>