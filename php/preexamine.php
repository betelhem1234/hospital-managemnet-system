

<html>
<head>
<link rel ="stylesheet" type="text/css" href="new 3.css">
<link rel="stylesheet" href="new.css">
 
 <style>
body{
	background-image:url(rr.jpg);
}
.submit
 {
	
	color:blue;
	font-size:20px;
	box-shadow:3px 3px 2px 4px rgba(0,0,0,0.8);
	padding:8px;
	margin:15px;
	 font-family:italic;
	
 }
</style>

</head>
<title>
Gamby General Hospital
</title>
<body>
<header>
<div class="header">

<!--
<p> GAMBY GENERAL HOSPITAL <p>&nbsp &nbsp &nbsp &nbsp &nbsp 
-->
</div>

 <div class="top">
 
 <nav>
 <ul> <!--ul-->
 <li><a href="receptionpage.PHP">back</a></li>
 
	</li>
  <li><a href="#">Services</a>
  <ul>
           <li><a href="heart.php">heart condition</a></li>
           <li><a href="pregnancy.php">pregnancy</a></li>
		   <li><a href="skin.php">skin</a></li>
		   <li><a href="kidney.php">kidney dialsis</a></li>
		   
		   
  </ul></li>
  <li><a href="about.PHP">About Us</a></li>
  
  </ul>
  		   
  
  
</nav>
</div>

</header>

<div class="middle">
 <form method="POST" name="myform" action="reception_record.php">

 <h2><center> <marquee direction="none" style="background-color:">  pre examnination record</marquee> </h2>   </center>  
<h2><center> <marquee direction="none" style="background-color:"> </marquee> </h2>   </center>

 

<div class="in"> patient name:</div><input type="text" name="first_name" class="input"/>
 
 <br>

 <div class="in">Blood Pressure:</div> <input type="text" name="pressure" class="input"/>
 <br>

 <div class="in"> Body Tempreture:</div><input type="text" name="temprature" class="input"/>
 
 <br>

 <div class="in">BMI:</div><input type="text" name="bmi"   class="input"/>

  <br> 
   <div class="in">Heart Beat:</div><input type="text" name="heart"   class="input"/>

   <br>
  <input type="submit" name="submit"  class="submit" />
   <br>
 </b> </i> 
 
   </form>
</div>

</body>

</html>