
<?php 
function validate_input($data){
    $data=trim($data);
    $data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$name = validate_input($_POST["first_name"]);
$blood_pressure = validate_input($_POST["pressure"]);
$body_temp = validate_input($_POST["temprature"]);
$bmi = validate_input($_POST["bmi"]);
$heart_beat = validate_input($_POST["heart"]);

//validating input to accept only characters and white space
if (!preg_match("/^[a-zA-Z-' ]*$/", $first_name) ) {
    echo "Only letters and white space allowed";
  } 
      else {
        $connection = mysqli_connect("localhost", "root", "");//try to creat connection
        if (!$connection) {
          print("Server not found!!!");
        }
        else {
            mysqli_select_db($connection, "hospital");      
            $sqlCheck = "SELECT first_name FROM patient where first_name = '$name'";
            $queryCheck = mysqli_query($connection, $sqlCheck);
            if (mysqli_num_rows($queryCheck)<=0) {//if the user already registered
                echo "The patient is not registered, register patient first! ";
               // print("<br><a href='patientsign.php'>Goto Patient registration page</a>");
              }
              else {
                $sql = "INSERT INTO  reception_record  VALUES('$name','$blood_pressure','$body_temp','$bmi','$heart_beat')";
                $query = mysqli_query($connection, $sql);
                if (!$query) {
                  print("data is not entered succusesfully.please try again!!!");
                } else {
                   header("location: receptionpage.php");
                 //print("You are succusesfully registered!<br><a href='labpage.php'>Go to labratorists Page</a>");
                }
              }     
    }
    mysqli_close($connection);
}

?>