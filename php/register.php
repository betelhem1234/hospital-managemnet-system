
<?php 
function validate_input($data){
    $data=trim($data);
    $data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$fname = validate_input($_POST["fname"]);
$lname = validate_input($_POST["lname"]);
$email = validate_input($_POST["email"]);
$password = validate_input($_POST["pass"]);
$confirm_password = validate_input($_POST["checkpass"]);
//validating input to accept only characters and white space
if (!preg_match("/^[a-zA-Z-' ]*$/", $fname) || !preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
    echo "Only letters and white space allowed";
  } else {
    if ($password != $confirm_password) {
      print("Password not Confirmed!!");
    }
      else {
        $connection = mysqli_connect("localhost", "root", "");//try to creat connection
        if (!$connection) {
          print("Server not found!!!");
        }
        else {
            mysqli_select_db($connection, "e_learning");      
            $sqlCheck = "SELECT email FROM register where email = '$email'";
            $queryCheck = mysqli_query($connection, $sqlCheck);
            if (mysqli_num_rows($queryCheck)>0) {//if the user already registered
                echo "You are already registered!Go to Login Page! ";
                print("<br><a href='login.php'>Login</a>");
              }
              else {
                $sql = "INSERT INTO  register (fname,lname,email,password) VALUES('$fname','$lname','$email','$password')";
                $query = mysqli_query($connection, $sql);
                if (!$query) {
                  print("You are not regitered.please try again!!!");
                } else {
                  //  header("location: login.php");
                 print("You are succusesfully registered!<br><a href='login.php'>Login</a>");
                }
              }     
    }
    mysqli_close($connection);
}
} 
?>