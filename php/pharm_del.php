<!Doctype html>
<html>
<head>
<link rel ="stylesheet" type="text/css" href="new 3.css">
 <title>Admin login</title>
<style>
body{
   background-position:center;
   text-align:left;
   	background-image:url(rr.jpg);
}
form
{
text-align:center;
height:100h;
width:400px;
margin : 150px;
padding:60px;

}
.input
{
  padding:8px 5px;
  margin:px;
  height:30px;
  width:350px;
  font-size :100%;
  border-radius:5px ;
  border:2px solid powderblue;
  box-shadow:10px 10px 26px 10px rgba(0,0,0,0.4);
 }
 .in
 {
	  padding:8px 5px;
	text-align:center;
     color:white;
	 
 }
h1
{
	font-size:45px;
	color:beige;
	box-shadow:10px 10px 26px 10px rgba(0,0,0,0.9);
     padding:8px 5px;
  margin:px;
  box-shadow:10px 10px 26px 10px rgba(0,0,0,0.4);
 }
 .submit
 {
	
	color:blue;
	font-size:15px;
	box-shadow:3px 3px 2px 4px rgba(0,0,0,0.8);
	padding:5px;
	margin:30px;
	 font-family:italic;
	
}
	
} 
</style>
<script type="text/javascript">
  function valueEmpty(){
   if(document.getElementById('password').value == ""){
   alert('please fill your age');
    return false;
  }
  if(document.getElementById('username').value == ""){
   alert('please fill your email box');
    return false;
	}}
 </script>
</head>
<title> Delete pharmasist</title>

<body>
<header>
<div class="header">

<!--
<p> GAMBY GENERAL HOSPITAL <p>&nbsp &nbsp &nbsp &nbsp &nbsp 
-->
</div>

 <div class="top">
 
 <nav>
 <img src="LOG.png" CLASS="logo">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <ul> <!--ul-->
 <li><a href="adminpage.PHP">back</a></li>
 
  </ul>
  
  
</nav>
</div>

</header>
<div class="middle";>

 </div>
<footer>
<h2>our interesting facts</h2><BR>
<P></P>
<a href="homepage.PHP"><h3>join us today</h3></a>
<br>
<h4 style="float:left;" style="font-size:20px;">
contact us<br>
Addres:BahirDar,kebele 08<br>
call Gamby :058 123464<br>
Emergencies- Appointmnets-Ambulances <br>
Available 24 hours everyday (24/7)<br>
</h4>
<h3>
Over 100 Specialised Doctors<br>
modernised equipments<br>
2402 total Graduates <br>
2660 facebook followers
</h3>

<p>GAMBY GENERAL HOSPITAL <BR>SINCE 1998</p>

</footer>
<?php
 if(isset($_POST['submit'])) 
{
$email = $_POST['email'];
	$connection = mysqli_connect("localhost", "root", "");
	if (!$connection) {
		print("Server not found!!!");
	} else {
		mysqli_select_db($connection, "hospital");
		$sql = "select email_address from pharmacy where email_address = '$email'";
			$query = mysqli_query($connection, $sql);
			if (mysqli_num_rows($query) <= 0) {
				echo "<script type='text/javascript'>";
			echo "alert('Email does not exist')";
			echo "</script>";}
		 else {
			 $sqldelete = "delete from pharmacy where email_address = '$email'";
		$querydelete = mysqli_query($connection, $sqldelete);
			header("location:adminpage.php");
		}
	}

	mysqli_close($connection);
}
?>
<form method="post" name="myform" action="?">
<div class="in">EMAIL ADDRESS:</div> <input type="email" name="email" class="input"/>
 <br>
<p></p>

 <p></p>
   <input type="submit" name="submit" placeholder="log in" class="submit" value="delete" />
 <br>

 </form>
 
</body>
</html>


