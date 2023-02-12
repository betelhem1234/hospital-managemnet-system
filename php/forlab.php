
<?php 
function validate_input($data){
    $data=trim($data);
    $data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$first_name = validate_input($_POST["first_name"]);
$middle_name = validate_input($_POST["middle_name"]);
$last_name = validate_input($_POST["last_name"]);
$age = validate_input($_POST["age"]);
$gender = validate_input($_POST["gender"]);
$email_address = validate_input($_POST["email_address"]);
$password = validate_input($_POST["password"]);
$phone_number = validate_input($_POST["phone_number"]);

//validating input to accept only characters and white space
if (!preg_match("/^[a-zA-Z-' ]*$/", $first_name) || !preg_match("/^[a-zA-Z-' ]*$/", $last_name)) {
    echo "Only letters and white space allowed";
  } 
      else {
        $connection = mysqli_connect("localhost", "root", "");//try to creat connection
        if (!$connection) {
          print("Server not found!!!");
        }
        else {
            mysqli_select_db($connection, "hospital");      
            $sqlCheck = "SELECT email_address FROM doctor where email_address = '$email_address'";
            $queryCheck = mysqli_query($connection, $sqlCheck);
            if (mysqli_num_rows($queryCheck)>0) {//if the user already registered
                echo "You are already registered!Go to Login Page! ";
				header("location:doclog.php");
              //  print("<br><a href='doclog.php'>Goto doctor login page</a>");
              }
              else {
                $sql = "INSERT INTO  doctor  VALUES('$first_name','$middle_name','$last_name','$age','$gender','$phone_number','$email_address','$password')";
                $query = mysqli_query($connection, $sql);
                if (!$query) {
                  print("You are not regitered.please try again!!!");
                } else {
					
                   header("location: docPage.php");
               //  print("You are succusesfully registered!<br><a href='docpage.php'>Go to Doctor Page</a>");
                }
              }     
    }
    mysqli_close($connection);
}

?>