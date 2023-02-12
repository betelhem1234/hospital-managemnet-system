var entry=document.getElementById("entry");
entry.addEventListner("click",displayDetails);
var row=1;

function displayDetails(){
 var first_name=document.getElementById("first_name").value;
 var last_name=document.getElementById("last_name").value;
  var age=document.getElementById("age").value;
   
   if(!first_name || !age || ){
	   alert("please fill all boxes");
	   return;
	   
   }
    
}<!--
<?php

	  echo date('h:i:s, F I');
	   $first_name= $_POST['first_name'];
	   $middle_name= $_POST['middle_name']; 
	   $last_name= $_POST['last_name']; 
	   $age = $_POST['age'];
	
	 echo '<h1>patient info</h1>';
	 echo 'your first name is ' .$first_name .  '</br>';
	 echo 'your middle name is ' .$middle_name . '</br>';
     echo 'your last name is ' .$last_name .  '</br>';
     echo'your age is ' .$age;
$host='localhost';
$user='root';
$pass='';
$db='patient';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
	echo 'connected succesfully';
$sql="insert into patient info(first_name,middle_name,last_name,gender,age,phone_number,email_address)";
$query=mysqli_query($con,$sql);
if($query)
	echo 'data inserted successfully';
require(patient1.php);
 ?>
 
-->